@extends('layouts.app-template')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Postions</h3>
            </div>

            <div class="text-right">
                <button data-toggle="modal" data-target="#addPosition" data-whatever="@mdo" data-placement="top"
                    class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Position</button>

            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" style="display: block;">


            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List of all positions for the employees </h2>
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

                                        <th class="column-title">S/No </th>
                                        <th class="column-title">Postion</th>
                                        <th class="column-title">Department</th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="even pointer">
                                        @foreach ($positions as $position)
                                    <tr class="even pointer">

                                        <td class="">{{ $loop->iteration }}</td>
                                        <td class="">{{ $position->name }}</td>
                                        <td class="">{{ $position->department->name }}</td>
                                        <td class=" last"><a data-toggle="modal"
                                                data-target="#editPosition-{{ $position->id }}" data-whatever="@mdo"
                                                data-placement="top" href="#" class="badge badge-primary">Edit</a>
                                            <a data-toggle="modal" data-target="#deletePosition-{{ $position->id }}"
                                                data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete position" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <!--edit Position -->
                                    <div class="modal fade" id="editPosition-{{ $position->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Position</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" role="form"
                                                        action="{{ route('settings.updatePosition', $position->id) }}">
                                                        @csrf

                                                        <div class="form-group">
                                                            <label>Position</label>
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $position->name }}" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" name="name" class="form-control"
                                                                value="{{ $position->name }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Department</label>
                                                            @foreach ($departments as $department)
                                                                <select name="dept_id" class="form-control">
                                                                    @foreach ($departments as $department)
                                                                        <option
                                                                            {{ $department->id == $position->department_id ? 'selected' : '' }}
                                                                            value="{{ $department->id }}">
                                                                            {{ $department->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @endforeach
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
                                                                <span>Close</span></button>
                                                            <button type="submit" name="submit" class="btn btn-primary">
                                                                <span>Submit</span></button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- delete Position modal-->

                                    <div class="modal fade" id="deletePosition-{{ $position->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete Position</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST"
                                                        action="{{ route('settings.deletePosition', ['id' => $position->id]) }}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="text-center">Are you sure you want to delete this
                                                                Position?</label>
                                                            <input type="hidden" name="id" class="form-control" value="1"
                                                                required>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
                                                                <span>No,Thanks</span></button>
                                                            <button type="submit" name="Position" class="btn btn-danger">
                                                                <span>Delete</span></button>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- delete Position modal-->
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <!--add Position -->
                        <div class="modal fade" id="addPosition" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New Position</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('settings.addPosition') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Position name</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Enter Position" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Department</label>
                                                    <select name="dept_id" class="form-control">
                                                        @foreach ($departments as $department)
                                                            <option
                                                                value="{{ $department->id }}">
                                                                {{ $department->name }}</option>
                                                        @endforeach
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
                        <!-- add Position modal-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
