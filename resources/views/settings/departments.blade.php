@extends('layouts.app-template')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Departments</h3>
            </div>

            <div class="text-right">
                <button data-toggle="modal" data-target="#addDepartment" data-whatever="@mdo" data-placement="top"
                    class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Department</button>

            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" style="display: block;">


            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>List of all departments </h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">

                                        <th class="column-title">S/No </th>
                                        <th class="column-title">Department</th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($departments as $department)
                                        <tr class="even pointer">

                                            <td class="">{{ $loop->iteration }}</td>
                                            <td class="">{{ $department->name }}</td>
                                            <td class=" last"><a data-toggle="modal"
                                                    data-target="#editDepartment-{{ $department->id }}"
                                                    data-whatever="@mdo" data-placement="top" href="#"
                                                    class="badge badge-primary">Edit</a>
                                                <a data-toggle="modal"
                                                    data-target="#deleteDepartment-{{ $department->id }}"
                                                    data-whatever="@mdo" data-placement="top"
                                                    title="Click here to delete Department" href="#"
                                                    class="badge badge-danger">Delete</a>
                                            </td>
                                        </tr>

                                        <!--edit Department -->
                                        <div class="modal fade" id="editDepartment-{{ $department->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" role="form"
                                                            action="{{ route('settings.updateDepartment', $department->id) }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label>Department</label>
                                                                <input type="text" name="name" class="form-control"
                                                                    value="{{ $department->name }}" required>
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
                                        <!-- delete Department modal-->
                                        <div class="modal fade" id="deleteDepartment-{{ $department->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Department
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST"
                                                            action="{{ route('settings.deleteDepartment', ['id' => $department->id]) }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="text-center">Are you sure you want to delete
                                                                    this Department?</label>
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
                                        <!-- delete Department modal-->
                                    @endforeach
                                </tbody>
                            </table>
                        </div>



                        <!--add Department -->
                        <div class="modal fade" id="addDepartment" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New Department</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('settings.addDepartment') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label>Department name</label>
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Enter Department" required>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
