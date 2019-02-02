@extends('layouts.custom')

@section('content')
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="text-center">View Message</h4>
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
                                   <!-- <section class="panel">

                                    </section>-->
                                </div>
                                <div class="col-sm-9">
                                    <section class="panel">
                                        <header class="panel-heading wht-bg">
                                            <h4 class="gen-case">
                                                View Message
                                                <form action="#" class="pull-right mail-src-position">
                                                    <div class="input-append">
                                                        <input type="text" class="form-control " placeholder="Search Mail">
                                                    </div>
                                                </form>
                                            </h4>
                                        </header>
                                        <div class="panel-body ">
                                            <div class="mail-header row">
                                                <div class="col-md-8">
                                                    <h4 class="pull-left"> Dashio, New Admin Dashboard & Front-end </h4>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="compose-btn pull-right">
                                                        <button class="btn  btn-sm tooltips" data-original-title="Print" type="button" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-print"></i> </button>
                                                        <button class="btn btn-sm tooltips" data-original-title="Trash" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-trash-o"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mail-sender">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <img src="img/ui-zac.jpg" alt="">
                                                        <strong>Zac Doe</strong>
                                                        <span>[zac@youremail.com]</span> to
                                                        <strong>me</strong>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <p class="date"> 10:15AM 02 FEB 2014</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="view-mail">
                                                <p>As he bent his head in his most courtly manner, there was a secrecy in his smiling face, and he conveyed an air of mystery to those words, which struck the eyes and ears of his nephew forcibly. At the same time, the thin straight lines
                                                    of the setting of the eyes, and the thin straight lips, and the markings in the nose, curved with a sarcasm that looked handsomely diabolic. </p>
                                                <p>"Yes," repeated the Marquis. "A Doctor with a daughter. Yes. So commences the new philosophy! You are fatigued. Good night!"</p>
                                                <p>It would have been of as much avail to interrogate any stone face outside the chateau as to interrogate that face of his. The nephew looked at him, in vain, in passing on to the door. </p>
                                                <p>"Good night!" said the uncle. "I look to the pleasure of seeing you again in the morning. Good repose! Light Monsieur my nephew to his chamber there!--And burn Monsieur my nephew in his bed, if you will," he added to himself, before
                                                    he rang his little bell again, and summoned his valet to his own bedroom.</p>
                                            </div>
                                            <div class="attachment-mail">
                                                <p>
                                                    <span><i class="fa fa-paperclip"></i> 2 attachments — </span>
                                                    <a href="#">Download all attachments</a> |
                                                    <a href="#">View all images</a>
                                                </p>

                                            </div>
                                            <div class="compose-btn pull-left">
                                                <a href="mail_compose.html" class="btn btn-sm btn-theme"><i class="fa fa-reply"></i> Reply</a>
                                                <button class="btn btn-sm "><i class="fa fa-arrow-right"></i> Forward</button>

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

        </div>
 @endsection
