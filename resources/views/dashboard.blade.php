@extends('layouts.app-template')
@section('content')
        <!-- top tiles -->
        <div class="row" style="display: inline-block;">
            <div class="tile_count">
                <div class="col-md-2 col-sm-4 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Tasks completed</span>
                    <div class="count">{{$data['tasksCompleted']}}</div>
                    {{-- <span class="count_bottom"><i class="green">4% </i> From last Week</span> --}}
                </div>
                <div class="col-md-2 col-sm-4 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Total incomplete tasks</span>
                    <div class="count">{{$data['tasksIncomplete']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span> --}}
                </div>
                <div class="col-md-2 col-sm-4 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Ongoing tasks</span>
                    <div class="count green">{{$data['ongoingTask']}}</div>
                    {{-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> --}}
                </div>
                <div class="col-md-2 col-sm-4 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Departments</span>
                    <div class="count">{{$data['departments']}}</div>
                    <!-- <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span> -->
                </div>
                <div class="col-md-2 col-sm-4 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Employees</span>
                    <div class="count">{{$data['employees']}}</div>
                    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
                </div>
                <div class="col-md-2 col-sm-4 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
                    <div class="count">{{$data['users']}}</div>
                    <!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
                </div>
            </div>
        </div>
        <!-- /top tiles -->
        <div class="">
            <!-- <div class="row" style="display: inline-block;">
                <div class="top_tiles">
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                      <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
                      <div class="count">179</div>
                      <h3>Total Employees</h3>
                      <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                  </div>
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                      <div class="icon"><i class="fa fa-comments-o"></i></div>
                      <div class="count">179</div>
                      <h3>Total Departments</h3>
                      <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                  </div>
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                      <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                      <div class="count">179</div>
                      <h3>Pending tasks</h3>
                      <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                  </div>
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                    <div class="tile-stats">
                      <div class="icon"><i class="fa fa-check-square-o"></i></div>
                      <div class="count">179</div>
                      <h3>Completed tasks</h3>
                      <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                  </div>
                </div>
              </div> -->

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Performance <small>Weekly progress</small></h2>
                            <div class="filter">
                                <div id="reportrange" class="pull-right"
                                    style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-9 col-sm-12 ">
                                <div class="demo-container" style="height:280px">
                                    <div id="chart_plot_02" class="demo-placeholder"></div>
                                </div>


                            </div>

                            <div class="col-md-3 col-sm-12 ">
                                <div>
                                    <div class="x_title">
                                        <h2>Top Employees overall</h2>
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
                                    <ul class="list-unstyled top_profiles scroll-view">
                                        <li class="media event">
                                            <a class="pull-left border-aero profile_thumb">
                                                <i class="fa fa-user aero"></i>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Ms. Mary Jane</a>
                                                <p>Agent Sales </p>
                                                <p> <small>12 complete tasks</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media event">
                                            <a class="pull-left border-green profile_thumb">
                                                <i class="fa fa-user green"></i>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Ms. Mary Jane</a>
                                                <p>Agent Sales </p>
                                                <p> <small>12 complete tasks</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media event">
                                            <a class="pull-left border-blue profile_thumb">
                                                <i class="fa fa-user blue"></i>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Ms. Mary Jane</a>
                                                <p>Agent Sales </p>
                                                <p> <small>12 complete tasks</small>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="media event">
                                            <a class="pull-left border-aero profile_thumb">
                                                <i class="fa fa-user aero"></i>
                                            </a>
                                            <div class="media-body">
                                                <a class="title" href="#">Ms. Mary Jane</a>
                                                <p>Agent Sales </p>
                                                <p> <small>12 complete tasks</small>
                                                </p>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Weekly Summary <small>Activity shares</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
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
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">

                        <div class="row" style="border-bottom: 1px solid #E0E0E0; padding-bottom: 5px; margin-bottom: 5px;">
                          <div class="col-md-7" style="overflow:hidden;">
                            <span class="sparkline_one" style="height: 160px; padding: 10px 25px;">
                                          <canvas width="200" height="60" style="display: inline-block; vertical-align: top; width: 94px; height: 30px;"></canvas>
                                      </span>
                            <h4 style="margin:18px">Weekly sales progress</h4>
                          </div>

                          <div class="col-md-5">
                            <div class="row" style="text-align: center;">
                              <div class="col-md-4">
                                <canvas class="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                <h4 style="margin:0">Bounce Rates</h4>
                              </div>
                              <div class="col-md-4">
                                <canvas class="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                <h4 style="margin:0">New Traffic</h4>
                              </div>
                              <div class="col-md-4">
                                <canvas class="canvasDoughnut" height="110" width="110" style="margin: 5px 10px 10px 0"></canvas>
                                <h4 style="margin:0">Device Share</h4>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->



            <div class="row">
                <div class="col-md-4">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Top employees by<small>productivity</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                              </div>
                          </li> -->
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item One Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Three Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Top Employees by<small>punctuality</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                              </div>
                          </li> -->
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item One Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Three Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="x_panel">
                        <div class="x_title">

                            <h2>Top employees by<small>effeciency</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                              </div>
                          </li> -->
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item One Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Three Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Top employees by<small>Quality</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                              </div>
                          </li> -->
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item One Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Two Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">April</p>
                                    <p class="day">23</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Item Three Title</a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
