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
            ->select('Employees.id', 'Employees.name', 'Employees.dept_id','tasks.status')
            ->get();

        return view('report.productivity',with(''));
    }
}
