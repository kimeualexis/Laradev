@extends('layouts.custom')

@section('content')
            <div class="panel panel-primary">
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
                                                <i class="fa fa-pencil"></i>  Compose Message
                                            </a>
                                            <ul class="nav nav-pills nav-stacked mail-nav">
                                                <li class="active"><a href="inbox.html"> <i class="fa fa-inbox"></i> Inbox  <span class="label label-theme pull-right inbox-notification">3</span></a></li>
                                                <li><a href="#"> <i class="fa fa-envelope-o"></i> Sent</a></li>
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

                                        <div class="panel-body">

                                            <div class="compose-mail">
                                                <form role="form-horizontal" method="post">
                                                    <div class="form-group">
                                                        <label for="to" class="">To:</label>
                                                        <input type="text" tabindex="1" id="to" class="form-control">

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
