@extends('layouts.custom')



@section('content')
<div class="panel panel-success">
<div class="panel-heading">
<h4 class="text-center">Messages</h4>
</div>

<div class="panel-body">


<section id="">
    <section class="">
        <!-- page start-->
        <div class="row mt">
            <div class="col-sm-3">
                <section class="panel">
                    <div class="panel-body">
                        <a href="{{ url('/compose') }}" class="btn btn-compose">
                            <i class="fa fa-pencil"></i>  Compose Mail
                        </a>
                        <ul class="nav nav-pills nav-stacked mail-nav">
                            <li class="active"><a href="inbox.html"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-theme pull-right inbox-notification">3</span></a></li>
                            <li><a href="#"> <i class="fa fa-envelope-o"></i> Send Mail</a></li>
                            <li><a href="#"> <i class="fa fa-exclamation-circle"></i> Important</a></li>
                            <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts <span class="label label-info pull-right inbox-notification">8</span></a></a>
                            </li>
                            <li><a href="#"> <i class="fa fa-trash-o"></i> Trash</a></li>
                        </ul>
                    </div>
                </section>
               <!-- <section class="panel">

                </section>-->
            </div>
            <div class="col-sm-9">
                <section class="panel">
                    <header class="panel-heading wht-bg">
                        <h4 class="gen-case">
                            Inbox (3)
                            <form action="#" class="pull-right mail-src-position">
                                <div class="input-append">
                                    <input type="text" class="form-control " placeholder="Search Mail">
                                </div>
                            </form>
                        </h4>
                    </header>

                    <div class="panel-body minimal">
                        <div class="mail-option">
                            <div class="chk-all">
                                <div class="pull-left mail-checkbox">
                                    <input type="checkbox" class="">
                                </div>
                                <div class="btn-group">
                                    <a data-toggle="dropdown" href="#" class="btn mini all">
                                        All
                                        <i class="fa fa-angle-down "></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"> None</a></li>
                                        <li><a href="#"> Read</a></li>
                                        <li><a href="#"> Unread</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="btn-group">
                                <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                                    <i class=" fa fa-refresh"></i>
                                </a>
                            </div>
                            <div class="btn-group hidden-phone">
                                <a data-toggle="dropdown" href="#" class="btn mini blue">
                                    More
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <a data-toggle="dropdown" href="#" class="btn mini blue">
                                    Move to
                                    <i class="fa fa-angle-down "></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                                </ul>
                            </div>
                            <ul class="unstyled inbox-pagination">
                                <li><span>1-50 of 99</span></li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                                </li>
                                <li>
                                    <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="table-inbox-wrap ">
                            <table class="table table-inbox table-hover">
                                <tbody>
                                <tr class="unread">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                                    <td class="view-message  dont-show"><a href="{{ url('/readmessage') }}">Google Inc.</a></td>
                                    <td class="view-message "><a href="{{ url('/readmessage') }}">Your new account is ready.</a></td>
                                    <td class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message  text-right">08:10 AM</td>
                                </tr>

                                <tr class="">
                                    <td class="inbox-small-cells">
                                        <input type="checkbox" class="mail-checkbox">
                                    </td>
                                    <td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
                                    <td class="view-message dont-show">Paypal inc.</td>
                                    <td class="view-message">New payment received</td>
                                    <td class="view-message inbox-small-cells"><i class="fa fa-paperclip"></i></td>
                                    <td class="view-message text-right">March 04</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <!-- /wrapper -->
</section>

</div>
</div>
@endsection

@section('modal')
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Update Profile</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="{{ url('/updateprofile') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!-- <input type="hidden" name="_method" value="PUT">-->

                        <div class="form-group">
                            <label class="control-label">Profile pic</label>
                            <input type="file" class="form-control" name="prof_pic" value="" required />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Username</label>
                            <input type="text" class="form-control" name="username" value="{{ Auth::user()->name }}" required />
                        </div>

                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <textarea class="form-control" name="status" required > {{ Auth::user()->status }}</textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>

@endsection




