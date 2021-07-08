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
                                            <td class="">
                                                {{ Carbon\Carbon::parse($task->completion_date)->format('M d Y') }}</td>
                                            <td class=""><span class="p-2 badge
                                                                    @if ($task->status ===
                                                    'On
                                                    progress') badge-primary
                                                @elseif ($task->status ==='Complete')
                                                    badge-success
                                                @else
                                                    badge-danger @endif">
                                                    {{ $task->status }}</span></td>
                                            <td class="a-right ">{{ $task->employee->department->name }}</td>
                                            <td class=" last"><a data-toggle="modal"
                                                    data-target="#editTask-{{ $task->id }}" data-whatever="@mdo"
                                                    data-placement="top" href="#"
                                                    class="p-2 badge badge-primary">Details</a> <a data-toggle="modal"
                                                    data-target="#deleteTask-{{ $task->id }}" data-whatever="@mdo"
                                                    data-placement="top" title="Click here to delete Task" href="#"
                                                    class="p-2 badge badge-danger">Delete</a>
                                            </td>
                                            </td>
                                        </tr>
                                        <!--edit Task -->
                                        <div class="modal fade" id="editTask-{{ $task->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit
                                                            {{ $task->employee->name }} task</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" role="form"
                                                            action="{{ route('tasks.update', $task->id) }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Employee</label>
                                                                <select class="form-control" name="employee_id" id="">
                                                                    @foreach ($employees as $employee)
                                                                        <option
                                                                            {{ $employee->id == $task->employee_id ? 'selected' : '' }}
                                                                            value="{{ $employee->id }}">
                                                                            {{ $employee->name }}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Task</label>
                                                                <textarea rows="4" id="task-detail" name="task_detail"
                                                                    class="form-control">{{ $task->description }}</textarea>

                                                            </div>

                                                            <div class="form-group">
                                                                <label>Due date</label>
                                                                <input name="due_date" id="birthday"
                                                                    class="date-picker form-control"
                                                                    value="{{ $task->completion_date }}"
                                                                    placeholder="dd-mm-yyyy" type="text" required="required"
                                                                    type="text" onfocus="this.type='date'"
                                                                    onmouseover="this.type='date'"
                                                                    onclick="this.type='date'" onblur="this.type='text'"
                                                                    onmouseout="timeFunctionLong(this)">
                                                                <script>
                                                                    function timeFunctionLong(input) {
                                                                        setTimeout(function() {
                                                                            input.type = 'text';
                                                                        }, 60000);
                                                                    }
                                                                </script>
                                                            </div>

                                                            <div class="form-group">
                                                                <label>Budget used</label>
                                                                <input type="number" name="budget" class="form-control"
                                                                    required value="{{ $task->budget }}">

                                                            </div>
                                                            <div class="form-group">
                                                                <label>Status</label>
                                                                <select class="form-control" name="status" id="">
                                                                    <option
                                                                        {{ $task->status == 'On progress' ?? 'selected' }}
                                                                        value="On progress">On progress</option>
                                                                    <option
                                                                        {{ $task->status == 'Complete' ?? 'selected' }}
                                                                        value="Complete">Complete</option>
                                                                    <option
                                                                        {{ $task->status == 'Incomplete' ?? 'selected' }}
                                                                        value="Incomplete">Incomplete</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Comment upon completion</label>
                                                                <select
                                                                    {{ $task->status == 'On progress' ? 'disabled' : '' }}
                                                                    class="form-control" name="comment">
                                                                    <option disabled selected="true">Choose ..</option>
                                                                    @foreach ($comments as $comment)
                                                                        <option value="{{ $comment->id }}">
                                                                            {{ $comment->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">
                                                                    <span>Close</span></button>
                                                                <button type="submit"
                                                                    {{ $task->status == 'On progress' ? '' : 'disabled' }}
                                                                    class="btn btn-primary">
                                                                    <span>Submit</span></button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- edit Task modal-->

                                        <!-- delete Task modal-->

                                        <div class="modal fade" id="deleteTask-{{ $task->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Task</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" name="site_form" role="form"
                                                            action="{{ route('tasks.destroy', $task->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="form-group">
                                                                <label class="text-center">Are you sure you want to delete
                                                                    this
                                                                    Task?</label>
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="1" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">
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
                                    @endforeach


                                </tbody>
                            </table>
                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
