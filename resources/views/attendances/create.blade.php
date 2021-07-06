@extends('layouts.app-template')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Employee attendance</h3>
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

            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Tick in the small box to record employee attendance</h2>
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


                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title">First name </th>
                                        <th class="column-title">Second name</th>
                                        <th class="column-title">Last name </th>
                                        <th class="column-title">Department</th>
                                        <th class="column-title">Registered on </th>
                                        <th class="column-title">Status </th>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk attendance ( <span
                                                    class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class="">121000040</td>
                                        <td class="">John</td>
                                        <td class="">Musa </td>
                                        <td class=""> Sales</td>
                                        <td class="">May 23, 2014 11:30:12 PM</td>
                                        <td class="a-right ">Available</td>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class="">121000040</td>
                                        <td class="">John</td>
                                        <td class="">Musa </td>
                                        <td class=""> Sales</td>
                                        <td class="">May 23, 2014 11:30:12 PM</td>
                                        <td class="a-right ">Available</td>
                                        </td>
                                    </tr>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class="">121000040</td>
                                        <td class="">John</td>
                                        <td class="">Musa </td>
                                        <td class=""> Sales</td>
                                        <td class="">May 23, 2014 11:30:12 PM</td>
                                        <td class="a-right ">Available</td>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class="">121000040</td>
                                        <td class="">John</td>
                                        <td class="">Musa </td>
                                        <td class=""> Sales</td>
                                        <td class="">May 23, 2014 11:30:12 PM</td>
                                        <td class="a-right ">Available</td>
                                        </td>
                                    </tr>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class="">121000040</td>
                                        <td class="">John</td>
                                        <td class="">Musa </td>
                                        <td class=""> Sales</td>
                                        <td class="">May 23, 2014 11:30:12 PM</td>
                                        <td class="a-right ">Available</td>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class="">121000040</td>
                                        <td class="">John</td>
                                        <td class="">Musa </td>
                                        <td class=""> Sales</td>
                                        <td class="">May 23, 2014 11:30:12 PM</td>
                                        <td class="a-right ">Available</td>
                                        </td>
                                    </tr>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class="">121000040</td>
                                        <td class="">John</td>
                                        <td class="">Musa </td>
                                        <td class=""> Sales</td>
                                        <td class="">May 23, 2014 11:30:12 PM</td>
                                        <td class="a-right ">Available</td>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class="">121000040</td>
                                        <td class="">John</td>
                                        <td class="">Musa </td>
                                        <td class=""> Sales</td>
                                        <td class="">May 23, 2014 11:30:12 PM</td>
                                        <td class="a-right ">Available</td>
                                        </td>
                                    </tr>

                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class="">121000040</td>
                                        <td class="">John</td>
                                        <td class="">Musa </td>
                                        <td class=""> Sales</td>
                                        <td class="">May 23, 2014 11:30:12 PM</td>
                                        <td class="a-right ">Available</td>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class="">121000040</td>
                                        <td class="">John</td>
                                        <td class="">Musa </td>
                                        <td class=""> Sales</td>
                                        <td class="">May 23, 2014 11:30:12 PM</td>
                                        <td class="a-right ">Available</td>
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
