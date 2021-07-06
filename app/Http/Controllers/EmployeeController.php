<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\EmployeePosition;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employees::all();
        $departments = Department::all();
        $positions = EmployeePosition::all();
        return view('employees.index')
            ->with([
                'departments' => $departments,
                'positions' => $positions,
                'employees' => $employees
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        $positions = EmployeePosition::all();
        return view('employees.create')
            ->with([
                'departments' => $departments,
                'positions' => $positions
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, [
            'name' => 'string|unique:Employees|required',
            'dob' => 'date|required',
            'dept_id' => 'required',
            'position_id' => 'required',
        ]);

        $employee = new Employees();
        $employee->name = $request->name;
        $employee->gender = $request->gender;
        $employee->DOB = $request->dob;
        $employee->dept_id = $request->dept_id;
        $employee->position_id = $request->position_id;
        $employee->save();

        return redirect()->route('employees.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the data
        $this->validate($request, [
            'name' => 'string|unique:Employees|required',

        ]);

        $employee = Employees::find($id);
        $employee->name = $request->name;
        $employee->dept_id = $request->dept_id;
        $employee->position_id = $request->position_id;
        $employee->DOB = $request->dob;
        $employee->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employees::destroy($id);

        return back();
    }
}
