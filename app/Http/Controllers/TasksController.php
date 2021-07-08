<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Department;
use App\Models\EmployeePosition;
use App\Models\Employees;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasks::all();
        $employees = Employees::all();
        $comments = Comment::all();
        return view('tasks.index')
            ->with([
                'tasks' => $tasks,
                'employees' => $employees,
                'comments' => $comments
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employees::all();
        return view('tasks.create')->with('employees', $employees);
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
        $request->validate([
            'budget' => 'required|numeric',
            'due_date' => 'date|required',
            'employee_id' => 'required',
            'task_detail' => 'string|required',
        ]);

        $task = new Tasks();
        $task->description = $request->task_detail;
        $task->employee_id = $request->employee_id;
        $task->completion_date = $request->due_date;
        $task->budget = $request->budget;
        $task->save();

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
      //  validate the data
        $request->validate([
            'budget' => 'required|numeric',
            'due_date' => 'date|required',
            'employee_id' => 'required',
            'task_detail' => 'string|required',
        ]);
        $task = Tasks::find($id);
        $task->description = $request->task_detail;
        $task->employee_id = $request->employee_id;
        $task->completion_date = $request->due_date;
        $task->status = $request->status;
        $task->budget = $request->budget;
        // if ($request->comment) {
        //     $task->comment = $request->comment;
        // }
        $task->save();

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
        Tasks::destroy($id);

        return back();
    }
}
