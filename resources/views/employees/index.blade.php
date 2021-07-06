@extends('layouts.app-template')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Employees</h3>
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
                        <h2>List of all the employees in the company </h2>
                        <!-- <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="btn btn-primary" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#" class="btn btn-primary">Settings 1</a>
                                        <a class="dropdown-item" href="#" class="btn btn-primary">Settings 2</a>
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

                                        <th class="column-title">S/No </th>
                                        <th class="column-title">Name</th>
                                        <th class="column-title">Gender</th>
                                        <th class="column-title">Department</th>
                                        <th class="column-title">Postion</th>
                                        <th class="column-title">Registered on</th>

                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($employees as $employee)
                                        <tr class="even pointer">

                                            <td class="">{{ $loop->iteration }}</td>
                                            <td class="">{{ $employee->name }}</td>
                                            <td class="">{{ $employee->gender }}</td>
                                            <td class="">{{ $employee->department->name }} </td>
                                            <td class="">{{ $employee->position->name }}</td>
                                            <td class="">{{ $employee->created_at }}</td>

                                            <td class=" last">
                                                <a data-toggle="modal" data-target="#editEmployee-{{ $employee->id }}"
                                                    data-whatever="@mdo" data-placement="top" href="#"
                                                    class="badge badge-primary">Edit</a>
                                                <a data-toggle="modal" data-target="#deleteEmployee-{{ $employee->id }}"
                                                    data-whatever="@mdo" data-placement="top"
                                                    title="Click here to delete Employee" href="#"
                                                    class="badge badge-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <!--edit Employee -->
                                        <div class="modal fade" id="editEmployee-{{ $employee->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" name="site_form" role="form"
                                                            action="{{ route('employees.update', $employee->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="item form-group">
                                                                <label class="col-form-label col-md-3 col-sm-3 label-align"
                                                                    for="full-name">Full Name <span
                                                                        class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 ">
                                                                    <input type="text" id="full-name" required="required"
                                                                        class="form-control" name="name"
                                                                        value="{{ $employee->name }}">
                                                                </div>
                                                            </div>

                                                            <div class="item form-group">
                                                                <label for="dept_id"
                                                                    class="col-form-label col-md-3 col-sm-3 label-align">Department</label>
                                                                <div class="col-md-6 col-sm-6 ">
                                                                    <select name="dept_id" class="form-control  id="
                                                                        dept_id">
                                                                        <option disabled>Choose ..</option>
                                                                        @foreach ($departments as $department)
                                                                            <option
                                                                                {{ $employee->dept_id == $department->id ? 'selected' : '' }}
                                                                                value="{{ $department->id }}">
                                                                                {{ $department->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label for="position_id"
                                                                    class="col-form-label col-md-3 col-sm-3 label-align">Employee
                                                                    Position</label>
                                                                <div class="col-md-6 col-sm-6 ">
                                                                    <select name="position_id" class="form-control name="
                                                                        employee_id" id="">
                                                                        @foreach ($positions as $position)
                                                                            <option
                                                                                {{ $employee->position_id == $position->id ? 'selected' : '' }}
                                                                                value="{{ $position->id }}">
                                                                                {{ $position->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="item form-group">
                                                                <label
                                                                    class="col-form-label col-md-3 col-sm-3 label-align">Date
                                                                    Of
                                                                    Birth <span class="required">*</span>
                                                                </label>
                                                                <div class="col-md-6 col-sm-6 ">
                                                                    <input name="dob" id="birthday"
                                                                        value="{{ $employee->DOB }}"
                                                                        class="date-picker form-control"
                                                                        placeholder="dd-mm-yyyy" type="text"
                                                                        required="required" type="text"
                                                                        onfocus="this.type='date'"
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
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">
                                                                    <span>Close</span></button>
                                                                <button type="submit" class="btn btn-primary">
                                                                    <span>Submit</span></button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- delete Employee modal-->

                                        <div class="modal fade" id="deleteEmployee-{{ $employee->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Employee</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" name="site_form" role="form"
                                                            action="{{ route('employees.destroy', $employee->id) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="form-group">
                                                                <label class="text-center">Are you sure you want to delete
                                                                    this
                                                                    Employee?</label>
                                                                <input type="hidden" name="id" class="form-control"
                                                                    value="1" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">
                                                                    <span>No,Thanks</span></button>
                                                                <button type="submit" class="btn btn-danger">
                                                                    <span>Delete</span></button>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- delete Employee modal-->

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
