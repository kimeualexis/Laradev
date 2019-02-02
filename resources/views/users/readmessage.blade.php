<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
    <div class="row">

        <!-- code start -->

        <div class="twPc-div">
            <a class="twPc-bg twPc-block"></a>

            <div>


                <a title="Mert S. Kaplan" href="https://twitter.com/mertskaplan" class="twPc-avatarLink">
                    @if(!empty(Auth::user()->profile_img))
                        <img alt="Mert S. Kaplan" src="{{ Auth::user()->profile_img }}" class="twPc-avatarImg">
                    @else
                        <img alt="Mert S. Kaplan" src="http://127.0.0.1:8000/uploads/default.jpg" class="twPc-avatarImg">
                    @endif
                </a>

                <div class="twPc-divUser">
                    <div class="twPc-divName">
                        <a href="https://twitter.com/mertskaplan">{{ Auth::user()->username }}</a>
                    </div>
                    <span>
				<a href="https://twitter.com/mertskaplan"><span>{{ Auth::user()->email }}</span></a>
			</span>
                </div>

                <div class="twPc-divStats">
                    <ul class="twPc-Arrange">
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan" title="9.840 Tweet">
                                <span class="twPc-StatLabel twPc-block">Quiz</span>
                                <span class="twPc-StatValue">9.840</span>
                            </a>
                        </li>
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan/following" title="885 Following">
                                <span class="twPc-StatLabel twPc-block">Following</span>
                                <span class="twPc-StatValue">885</span>
                            </a>
                        </li>
                        <li class="twPc-ArrangeSizeFit">
                            <a href="https://twitter.com/mertskaplan/followers" title="1.810 Followers">
                                <span class="twPc-StatLabel twPc-block">Followers</span>
                                <span class="twPc-StatValue">1.810</span>
                            </a>
                        </li>

                        <li class="twPc-ArrangeSizeFit" style="float: right;">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#myModal">Profile</a></li>
                                    <li><a href="#">Change password</a></li>
                                    <li><a href="{{ url('/logout') }}">Log out</a></li>

                                </ul>
                            </div>
                        </li>
                    </ul>



                </div>


            </div>



        </div>


        <!-- code end -->
    </div>

    <div class="row">
        <div class="col-md-2">
            <br>
            <ul class="list-unstyled">
                <li> <p class="">{{ Auth::user()->status }}</li>
                <li> <a href="" class="">Website</a></li>
                <li> <a href="{{ url('/messages') }}" class="">Messages</a></li>

            </ul>



        </div>





        <div class="col-md-9">
            @if(count($errors)>0)
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            @if(session('response'))
                <div class="alert alert-info">{{session('response')}}</div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif

            <br>
            <div class="panel panel-success">
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

    </div>
</div>
