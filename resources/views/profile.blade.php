@extends('layouts.app-template')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>User Profile</h3>
            </div>

            <!-- <div class="title_right">
                              <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search for...">
                                  <span class="input-group-btn">
                                    <button class="btn btn-secondary" type="button">Go!</button>
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
                        <h2>Account and activity details <small> </small></h2>
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
                        <div class="col-md-3 col-sm-3 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="images/images.png" alt="Avatar"
                                        title="Change the avatar">
                                    <i class="fas fa-user-alt"></i>
                                </div>
                            </div>
                            <h3>Mwanaishar Jazzy</h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> Dar es salaam, Tanzania
                                </li>

                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> Software Engineer
                                </li>

                                <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="#" target="_blank">ishar@gmail.com</a>
                                </li>
                            </ul>

                            <a data-toggle="modal" data-target="#editUser" data-whatever="@mdo" data-placement="top"
                                class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                            <br />



                        </div>
                        <div class="col-md-9 col-sm-9 ">



                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab"
                                            data-toggle="tab" aria-expanded="true">Recent Activity</a>
                                    </li>

                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane active " id="tab_content1"
                                        aria-labelledby="home-tab">

                                        <!-- start recent activity -->
                                        <ul class="messages">
                                            <li>
                                                <i class="fa fa-desktop"></i>
                                                <div class="message_date">
                                                    <h3 class="date text-info">24</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Device</h4>
                                                    <blockquote class="message">Mozilla/5.0 (Windows NT 10.0; Win64; x64)
                                                        AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93
                                                        Safari/537.36</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                        <a href="#">Ip Address::1</a>
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <i class="fa fa-desktop"></i>
                                                <div class="message_date">
                                                    <h3 class="date text-error">21</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Device</h4>
                                                    <blockquote class="message">Mozilla/5.0 (Windows NT 10.0; Win64; x64)
                                                        AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93
                                                        Safari/537.36</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                        <a href="#" data-original-title="">Ip Address::1
                                                </div>
                                            </li>
                                            <li>
                                                <i class="fa fa-desktop"></i>
                                                <div class="message_date">
                                                    <h3 class="date text-info">14</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Device</h4>
                                                    <blockquote class="message">Mozilla/5.0 (Windows NT 10.0; Win64; x64)
                                                        AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93
                                                        Safari/537.36</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                        <a href="#"> Ip Address::1 </a>
                                                    </p>
                                                </div>
                                            </li>

                                            <li>
                                                <i class="fa fa-desktop"></i>
                                                <div class="message_date">
                                                    <h3 class="date text-error">11</h3>
                                                    <p class="month">May</p>
                                                </div>
                                                <div class="message_wrapper">
                                                    <h4 class="heading">Device</h4>
                                                    <blockquote class="message">Mozilla/5.0 (Windows NT 10.0; Win64; x64)
                                                        AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93
                                                        Safari/537.36</blockquote>
                                                    <br />
                                                    <p class="url">
                                                        <span class="fs1" aria-hidden="true" data-icon=""></span>
                                                        <a href="#" data-original-title="">Ip Address::1</a>
                                                    </p>
                                                </div>
                                            </li>

                                        </ul>
                                        <!-- end recent activity -->

                                    </div>

                                    <!-- <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                          <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui
                                            photo booth letterpress, commodo enim craft beer mlkshk </p>
                                        </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
