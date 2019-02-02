<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
                    <h4 class="text-center">Questions</h4>
                </div>
                <div class="panel-body">

                </div>
            </div>

        </div>

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


    </div>
</div>
