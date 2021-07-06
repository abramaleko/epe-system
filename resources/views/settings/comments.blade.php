@extends('layouts.app-template')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Weight settings</h3>
            </div>

            <div class="text-right">
                <button data-toggle="modal" data-target="#addComment" data-whatever="@mdo" data-placement="top"
                    class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Comment weight</button>

            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" style="display: block;">


            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Settings for the weights of the comments made upon work completion </h2>
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

                                        <th class="column-title">Comment </th>
                                        <th class="column-title">Weignt </th>
                                        <th class="column-title no-link last"><span class="nobr">Action</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="even pointer">

                                        <td class="">Good</td>
                                        <td class="">5</td>
                                        <td class=" last"><a data-toggle="modal" data-target="#editComment"
                                                data-whatever="@mdo" data-placement="top" href="#"
                                                class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                data-target="#deleteComment" data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete Comment" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">

                                        <td class="">Good</td>
                                        <td class="">5</td>
                                        <td class=" last"><a data-toggle="modal" data-target="#editComment"
                                                data-whatever="@mdo" data-placement="top" href="#"
                                                class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                data-target="#deleteComment" data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete Comment" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="even pointer">

                                        <td class="">Good</td>
                                        <td class="">5</td>
                                        <td class=" last"><a data-toggle="modal" data-target="#editComment"
                                                data-whatever="@mdo" data-placement="top" href="#"
                                                class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                data-target="#deleteComment" data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete Comment" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">

                                        <td class="">Good</td>
                                        <td class="">5</td>
                                        <td class=" last"><a data-toggle="modal" data-target="#editComment"
                                                data-whatever="@mdo" data-placement="top" href="#"
                                                class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                data-target="#deleteComment" data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete Comment" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="even pointer">

                                        <td class="">Good</td>
                                        <td class="">5</td>
                                        <td class=" last"><a data-toggle="modal" data-target="#editComment"
                                                data-whatever="@mdo" data-placement="top" href="#"
                                                class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                data-target="#deleteComment" data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete Comment" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="">Good</td>
                                        <td class="">5</td>
                                        <td class=" last"><a data-toggle="modal" data-target="#editComment"
                                                data-whatever="@mdo" data-placement="top" href="#"
                                                class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                data-target="#deleteComment" data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete Comment" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="even pointer">

                                        <td class="">Good</td>
                                        <td class="">5</td>
                                        <td class=" last"><a data-toggle="modal" data-target="#editComment"
                                                data-whatever="@mdo" data-placement="top" href="#"
                                                class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                data-target="#deleteComment" data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete Comment" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>

                                    <tr class="odd pointer">
                                        <td class="">Good</td>
                                        <td class="">5</td>
                                        <td class=" last"><a data-toggle="modal" data-target="#editComment"
                                                data-whatever="@mdo" data-placement="top" href="#"
                                                class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                data-target="#deleteComment" data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete Comment" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>

                                    <tr class="even pointer">
                                        <td class="">Good</td>
                                        <td class="">5</td>
                                        <td class=" last"><a data-toggle="modal" data-target="#editComment"
                                                data-whatever="@mdo" data-placement="top" href="#"
                                                class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                data-target="#deleteComment" data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete Comment" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">

                                        <td class="">Good</td>
                                        <td class="">5</td>
                                        <td class=" last"><a data-toggle="modal" data-target="#editComment"
                                                data-whatever="@mdo" data-placement="top" href="#"
                                                class="badge badge-primary">Edit</a> <a data-toggle="modal"
                                                data-target="#deleteComment" data-whatever="@mdo" data-placement="top"
                                                title="Click here to delete Comment" href="#"
                                                class="badge badge-danger">Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!--edit Comment -->
                        <div class="modal fade" id="editComment" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Comment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" name="site_form" role="form" action="#">


                                            <div class="form-group">
                                                <label>Comment</label>
                                                <input type="text" name="Comment_name" class="form-control"
                                                    placeholder="Good" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Comment weight</label>
                                                <input type="text" name="comment_weight" class="form-control"
                                                    placeholder="5" required>
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
                        <!-- edit Comment modal-->

                        <!--add Comment -->
                        <div class="modal fade" id="addComment" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New Comment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" name="site_form" role="form" action="#">

                                            <div class="form-group">
                                                <label>Comment name</label>
                                                <input type="text" name="Comment_name" class="form-control"
                                                    placeholder="Enter Comment" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Comment weight</label>
                                                <input type="text" name="comment_weight" class="form-control"
                                                    placeholder="Enter weight" required>
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
                        <!-- add Comment modal-->

                        <!-- delete Comment modal-->

                        <div class="modal fade" id="deleteComment" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Comment</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" name="site_form" role="form" action="#">
                                            <div class="form-group">
                                                <label class="text-center">Are you sure you want to delete this
                                                    Comment?</label>
                                                <input type="hidden" name="id" class="form-control" value="1" required>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    <span>No,Thanks</span></button>
                                                <button type="submit" name="Comment" class="btn btn-danger">
                                                    <span>Delete</span></button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete Comment modal-->


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
