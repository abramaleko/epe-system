<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function productivityReport()
    {
        $employeeWithTasks = DB::table('Employees')
            ->join('tasks', 'tasks.employee_id', '=', 'Employees.id')
            ->join('departments', 'Employees.dept_id','=','departments.id')
            ->select('Employees.id', 'Employees.name', 'departments.name as department', 'tasks.status')
            ->get()->toArray();

        //groups the employees
        $groupedEmployees = $this->group_by($employeeWithTasks);

        //employees with their productivity
       $data=$this->calculateProductivity($groupedEmployees);

        return view('report.productivity')->with('data',$data);
    }

    function calculateProductivity($groupedEmployees)
    {
        $employeesWithHighestProductivity = [];
        $unsortedEmployeesProductivity = [];

      //calculates which employee with the highest productivity
        foreach ($groupedEmployees as $key => $employee) {
            $unsortedEmployeesProductivity[$key]=[];
            $tasks=count($employee);
            $tasksCompleted= 0;

            foreach ($employee as $employee_taskStatus)
               if ($employee_taskStatus->status === 'Complete')
                  $tasksCompleted ++ ;

            $productivity=intval(($tasksCompleted / $tasks) * 100);
            $unsortedEmployeesProductivity[$key]=[
                'productivity %' => $productivity,
                'department'     => $employee[0]->department
            ];
        }

        //sorts the employees depending on productivity from highest to lowest
        uasort($unsortedEmployeesProductivity,function($a,$b){
            return $b['productivity %'] <=> $a['productivity %'];
        });
        $employeesWithHighestProductivity=$unsortedEmployeesProductivity;

        return $employeesWithHighestProductivity;
    }


    function group_by($array)
    {
        /*
          search through the array
          check if the array has the grouped key name
       */
        $return = [];
        foreach ($array as $value) {
            if (array_key_exists($value->name, $return))
                array_push($return[$value->name], $value);
            else
                $return[$value->name] = [$value,];
        }
        return $return;
    }
}
