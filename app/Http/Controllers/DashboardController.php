<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employees;
use App\Models\Tasks;
use App\Models\User;

use Illuminate\Http\Request;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data=[];
        $data['tasksCompleted'] = Tasks::where('status', 'Complete')->count();
        $data['tasksIncomplete'] = Tasks::where('status', 'InComplete')->count();
        $data['ongoingTask']=Tasks::where('status', 'On progress')->count();
        $data['departments']=Department::all()->count();
        $data['employees']=Employees::all();
        $data['users']=User::all()->count();


        return view('dashboard')
        ->with([
            'data' => $data,

        ]);
    }
}
