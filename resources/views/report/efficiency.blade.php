@extends('layouts.app-template')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Employee Efficiency report</h3>
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

        <div class="row" style="display: block;">


            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>This report shows employee's efficiency based on the time taken to perform tasks and resources
                            used. </h2>
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
                                        <th class="column-title">Efficiency(%)</th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="even pointer">

                                        <td class="">1</td>
                                        <td class="">Senior</td>
                                        <td class="">80</td>
                                        <td class=" last"><a href="#" class="badge badge-primary">view</a>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">

                                        <td class="">1</td>
                                        <td class="">Senior</td>
                                        <td class="">23</td>
                                        <td class=" last"><a href="#" class="badge badge-primary">view</a>
                                        </td>

                                    </tr>
                                    <tr class="even pointer">

                                        <td class="">1</td>
                                        <td class="">Senior</td>
                                        <td class="">20</td>
                                        <td class=" last"><a href="#" class="badge badge-primary">view</a>
                                        </td>

                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="">1</td>
                                        <td class="">Senior</td>
                                        <td class="">14</td>
                                        <td class=" last"><a href="#" class="badge badge-primary">view</a>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
