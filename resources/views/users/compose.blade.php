@extends('layouts.custom')

@section('content')
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="text-center">Compose</h4>
                </div>
                <div class="panel-body">



                    <section id="">
                        <section class="">
                            <!-- page start-->
                            <div class="row mt">
                                <div class="col-sm-3">
                                    <section class="panel">
                                        <div class="panel-body">
                                            <a href="mail_compose.html" class="btn btn-compose">
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
                                    <!--<section class="panel">

                                    </section>-->
                                </div>
                                <div class="col-sm-9">
                                    <section class="panel">
                                        <header class="panel-heading wht-bg">
                                            <h4 class="gen-case">
                                                Compose Mail
                                                <form action="#" class="pull-right mail-src-position">
                                                    <div class="input-append">
                                                        <input type="text" class="form-control " placeholder="Search Mail">
                                                    </div>
                                                </form>
                                            </h4>
                                        </header>
                                        <div class="panel-body">
                                            <div class="compose-btn pull-right">
                                                <button class="btn btn-theme btn-sm"><i class="fa fa-check"></i> Send</button>
                                                <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                                                <button class="btn btn-sm">Draft</button>
                                            </div>
                                            <div class="compose-mail">
                                                <form role="form-horizontal" method="post">
                                                    <div class="form-group">
                                                        <label for="to" class="">To:</label>
                                                        <input type="text" tabindex="1" id="to" class="form-control">
                                                        <div class="compose-options">
                                                            <a onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" href="javascript:;">Cc</a>
                                                            <a onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" href="javascript:;">Bcc</a>
                                                        </div>
                                                    </div>
                                                    <div class="form-group hidden">
                                                        <label for="cc" class="">Cc:</label>
                                                        <input type="text" tabindex="2" id="cc" class="form-control">
                                                    </div>
                                                    <div class="form-group hidden">
                                                        <label for="bcc" class="">Bcc:</label>
                                                        <input type="text" tabindex="2" id="bcc" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="subject" class="">Subject:</label>
                                                        <input type="text" tabindex="1" id="subject" class="form-control">
                                                    </div>
                                                    <div class="compose-editor">
                                                        <textarea class="wysihtml5 form-control" rows="9"></textarea>
                                                        <input type="file" class="default">
                                                    </div>
                                                    <div class="compose-btn">
                                                        <button class="btn btn-theme btn-sm"><i class="fa fa-check"></i> Send</button>
                                                        <button class="btn btn-sm"><i class="fa fa-times"></i> Discard</button>
                                                        <button class="btn btn-sm">Draft</button>
                                                    </div>
                                                </form>
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
