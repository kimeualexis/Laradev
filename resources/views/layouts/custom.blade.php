<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <a class="navbar-brand fa fa-home fa-lg">Laradev</a>

             <form class="navbar-form navbar-left" role="search" method="get" action="">
                <div class="form-group">
                    <input type="text" class="form-control" name="q" value="">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>


        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp; Add Question
                </a>
            </li>
            <li>
                <a href="">
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp; Logout
                </a>
            </li>
        </ul>


    </div>
    </div>



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
                <li> <a href=""> <i class="fa fa-link"></i>&nbsp;Website</a></li>
                <li> <a href="{{ url('/messages') }}"> <i class="fa fa-envelope"></i>&nbsp;Messages</a></li>
                <li> <a href="" data-toggle="modal" data-target="#myModal"> <i class="fa fa-user"></i>&nbsp;Profile</a></li>

            </ul>



        </div>





        <div class="col-md-9">

            @include('partials.errors')
            @include('partials.success')
            <br>
            @yield('content')

        </div>


        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-primary">Update Profile</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" action="{{ url('/updateprofile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- <input type="hidden" name="_method" value="PUT">-->

                            <div class="form-group" style="padding: 8px;">
                                <label class="control-label">Profile pic</label>
                                <input type="file"  name="prof_pic" value="" required />
                            </div>

                            <div class="form-group" style="padding: 8px;">
                                <label class="control-label">Username</label>
                                <input type="text" class="form-control" name="username" value="{{ Auth::user()->name }}" required />
                            </div>

                            <div class="form-group" style="padding: 8px;">
                                <label class="control-label">Status</label>
                                <textarea rows="5" class="form-control" name="status" required > {{ Auth::user()->status }}</textarea>
                            </div>

                            <div class="form-group" style="padding: 8px;">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>

                        </form>
                    </div>

                </div>

            </div>
        </div>


    </div>

</div>
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="lib/jquery.scrollTo.min.js"></script>
<script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
<!--common script for all pages-->
<script src="lib/common-scripts.js"></script>
