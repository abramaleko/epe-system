@extends('layouts.app-template')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Register Employee</h3>
            </div>

            <!-- <div class="title_right">
            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
                </span>
            </div>
            </div>
            </div> -->
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><small>Please fill in the fields below</small></h2>
                        <!-- <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="#">Settings 1</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Settings 2</a>
                            </li>
                            </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                            </ul> -->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" method="POST" action="{{ route('employees.store') }}" data-parsley-validate
                            class="form-horizontal form-label-left">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="full-name">Full Name <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="full-name" required="required" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="dept_id" class="col-form-label col-md-3 col-sm-3 label-align">Department</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select name="dept_id" class="form-control  id=" dept_id">
                                        <option selected disabled>Choose ..</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group d-none">
                                <label for="position_id" class="col-form-label col-md-3 col-sm-3 label-align">Employee
                                    Position</label>
                                <div class="hidden col-md-6 col-sm-6">
                                    <select name="position_id" class="form-control name=" employee_id" id="">
                                        <option selected disabled>Choose ..</option>
                                        @foreach ($positions as $positon)
                                            <option value="{{ $positon->id }}">{{ $positon->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of
                                    Birth <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input name="dob" id="birthday" class="date-picker form-control"
                                        placeholder="dd-mm-yyyy" type="text" required="required" type="text"
                                        onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'"
                                        onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
                                    <script>
                                        function timeFunctionLong(input) {
                                            setTimeout(function() {
                                                input.type = 'text';
                                            }, 60000);
                                        }
                                    </script>
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="my-2 mt-2 form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" value="Female">Female
                                        </label>
                                    </div>
                                    <div class="form-check-inline">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" value="Male">Male
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Register</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>





    </div>
    </form>
    </div>
    </div>
    </div>
    </div>





    </div>
@endsection
@section('scripts')
    <script>
        $.ajax({

        });
    </script>
@endsection
