@extends('layouts.app-template')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Tasks</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" style="display: block;">


            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List of tasks assigned to employees </h2>
                        <!-- <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Settings 1</a>
                                            <a class="dropdown-item" href="#">Settings 2</a>
                                        </div>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                    </ul> -->
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <!-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> -->

                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title">Employee </th>
                                        <th class="column-title">Start Date </th>
                                        <th class="column-title">Completion date </th>
                                        <th class="column-title">Status </th>
                                        <th class="column-title">Department </th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($tasks as $task)
                                        <tr class="even pointer">
                                            <td class="">{{ $task->employee->name }}</td>
                                            <td class="">{{ $task->created_at->format('M d Y') }} </td>
                                            <td class="">{{ Carbon\Carbon::parse($task->completion_date)->format('M d Y') }}</td>
                                            <td class=""><span class="badge badge-primary">
                                                {{$task->checkCompletion($task->created_at,$task->completion_date)}}</span></td>
                                            <td class="a-right ">{{ $task->employee->department->name }}</td>
                                            <td class=" last"><a data-toggle="modal" data-target="#editTask"
                                                    data-whatever="@mdo" data-placement="top" href="#"
                                                    class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                    data-target="#deleteTask" data-whatever="@mdo" data-placement="top"
                                                    title="Click here to delete Task" href="#"
                                                    class="badge badge-danger">Delete</a>
                                            </td>
                                            </td>
                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>

                        <!--edit Task -->
                        <div class="modal fade" id="editTask" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Task</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" name="site_form" role="form" action="#">

                                            <div class="form-group">
                                                <label>Employee</label>
                                                <select class="form-control" name="employees_id" id="">
                                                    <option value="1">John Blank L</option>
                                                    <option value="1">John Full L</option>
                                                    <option value="1">John Null L</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Task</label>
                                                <input type="text" name="task" class="form-control" placeholder="Training"
                                                    required>
                                            </div>
                                            <div class="form-group">
                                                <label>Due date</label>
                                                <input type="date" name="due_date" class="form-control" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Completion date</label>
                                                <input type="date" name="completion_date" class="form-control" required>

                                            </div>
                                            <div class="form-group">
                                                <label>Budget used</label>
                                                <input type="number" name="budget_used" class="form-control" required>

                                            </div>
                                            <div class="form-group">
                                                <label>Status</label>
                                                <select class="form-control" name="status" id="">
                                                    <option value="1">Pending</option>
                                                    <option value="1">On progress</option>
                                                    <option value="1">Complete</option>
                                                    <option value="1">Incomplete</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Comment upon completion</label>
                                                <select class="form-control" name="status" id="">
                                                    <option value="1">Excellent</option>
                                                    <option value="1">Good</option>
                                                    <option value="1">Fair</option>
                                                    <option value="1">Poor</option>
                                                </select>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    <span>Close</span></button>
                                                <button type="submit" name="submit" class="btn btn-primary">
                                                    <span>Submit</span></button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- edit Task modal-->

                        <!-- delete Task modal-->

                        <div class="modal fade" id="deleteTask" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Task</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" name="site_form" role="form" action="#">
                                            <div class="form-group">
                                                <label class="text-center">Are you sure you want to delete this
                                                    Task?</label>
                                                <input type="hidden" name="id" class="form-control" value="1" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    <span>No,Thanks</span></button>
                                                <button type="submit" name="Task" class="btn btn-danger">
                                                    <span>Delete</span></button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete Task modal-->


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
