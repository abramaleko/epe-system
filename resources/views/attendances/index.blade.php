@extends('layouts.app-template')
@section('content')
     <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Employee attendances</h3>
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
                    <h2>List of all attendances made by all employees </h2>
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
                            <th class="column-title">Employee</th>
                            <th class="column-title">Date</th>
                            <th class="column-title">Arrived at</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr class="even pointer">

                            <td class="">1</td>
                            <td class="">Senior</td>
                            <td class="">May 23, 2014</td>
                            <td class="">11:47:56 PM</td>

                            <td class=" last"><a data-toggle="modal" data-target="#editAttendance" data-whatever="@mdo" data-placement="top" href="#" class="badge badge-primary">Edit</a> <a data-toggle="modal" data-target="#deleteAttendance" data-whatever="@mdo" data-placement="top" title="Click here to delete Attendance" href="#" class="badge badge-danger">Delete</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">

                            <td class="">1</td>
                            <td class="">Senior</td>
                            <td class="">May 23, 2014</td>
                            <td class="">11:47:56 PM</td>
							<td class=" last"><a data-toggle="modal" data-target="#editAttendance" data-whatever="@mdo" data-placement="top" href="#" class="badge badge-primary">Edit</a> <a data-toggle="modal" data-target="#deleteAttendance" data-whatever="@mdo" data-placement="top" title="Click here to delete Attendance" href="#" class="badge badge-danger">Delete</a>
                            </td>
                          </tr>
                          <tr class="even pointer">

                            <td class="">1</td>
                            <td class="">Senior</td>
                            <td class="">May 23, 2014</td>
                            <td class="">11:47:56 PM</td>
							<td class=" last"><a data-toggle="modal" data-target="#editAttendance" data-whatever="@mdo" data-placement="top" href="#" class="badge badge-primary">Edit</a> <a data-toggle="modal" data-target="#deleteAttendance" data-whatever="@mdo" data-placement="top" title="Click here to delete Attendance" href="#" class="badge badge-danger">Delete</a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class="">1</td>
                            <td class="">Senior</td>
                            <td class="">May 23, 2014</td>
                            <td class="">11:47:56 PM</td>
							<td class=" last"><a data-toggle="modal" data-target="#editAttendance" data-whatever="@mdo" data-placement="top" href="#" class="badge badge-primary">Edit</a> <a data-toggle="modal" data-target="#deleteAttendance" data-whatever="@mdo" data-placement="top" title="Click here to delete Attendance" href="#" class="badge badge-danger">Delete</a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
															<!--edit Attendance -->
				<div class="modal fade" id="editAttendance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Edit Attendance</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						</div>
						<div class="modal-body">
						<form method="POST" name="site_form" role="form" action="#">

							<div class="form-group">
							<label>Employee</label>
							<select class="form-control" name="employees_id" id="">
								<option value="1">Senior Blank L</option>
								<option value="1">John Full L</option>
								<option value="1">John Null L</option>
							</select>
							</div>

							<div class="form-group">
							<label>Date</label>
							<input type="date" name="attendance_date" class="form-control"  required>
							</div>

							<div class="form-group">
							<label>Arrival time</label>
							<input type="time" name="arrived_at" class="form-control"  required>

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
				<!-- edit Attendance modal-->

				  <!-- delete Attendance modal-->

				<div class="modal fade" id="deleteAttendance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<div class="modal-header">
						  <h5 class="modal-title" id="exampleModalLabel">Delete Attendance</h5>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body">
						  <form method="POST" name="site_form" role="form" action="#">
							 <div class="form-group">
							  <label class="text-center">Are you sure you want to delete this Attendance?</label>
							  <input type="hidden" name="id" class="form-control" value="1" required>
							</div>
							  <div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">
						   <span>No,Thanks</span></button>
						  <button type="submit" name="Attendance" class="btn btn-danger">
						  <span>Delete</span></button>
						</div>

						  </form>
						</div>
					   </div>
					  </div>
				   </div>
				  <!-- delete Attendance modal-->

                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
