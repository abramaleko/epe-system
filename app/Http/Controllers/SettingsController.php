<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\EmployeePosition;
use App\Models\User;

use Illuminate\Http\Request;

class SettingsController extends Controller
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


    public function departments()
    {
        $departments = Department::all();
        return view('settings.departments')->with('departments', $departments);
    }


    public function addDepartment(Request $request)
    {
        Department::firstOrCreate([
            'name' => $request->name,
        ]);

        return back();
    }

    public function updateDepartment($id, Request $request)
    {
        $department = Department::find($id);
        $department->name = $request->name;
        $department->save();

        return back();
    }

    public function deleteDepartment($id)
    {
        Department::destroy($id);

        return back();
    }

    public function position()
    {
        $positions = EmployeePosition::all();
        return view('settings.positions')->with('positions', $positions);
    }

    public function addPosition(Request $request)
    {
        EmployeePosition::firstOrCreate([
            'name' => $request->name,
        ]);

        return back();
    }

    public function updatePosition($id, Request $request)
    {
        $position = EmployeePosition::find($id);
        $position->name = $request->name;
        $position->save();

        return back();
    }

    public function deletePosition($id)
    {
        EmployeePosition::destroy($id);

        return back();
    }
}
