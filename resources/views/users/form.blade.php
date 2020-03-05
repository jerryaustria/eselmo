@extends('layouts.app')
@extends('layouts.header')
@extends('layouts.navigation')
@extends('layouts.footer')

@section('headerlink')
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/fileinput.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">

    <link href="{{Asset('assets/fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
@endsection


@section('title')
    <span>User Profile</span>
@endsection

@section('body')
    <body class="page-sub-page page-submit" id="page-top">
@endsection

@section('content')
    <div class="wrapper">

        <!-- Page Content -->
        <div id="page-content">
            <!-- Breadcrumb -->
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Account</a></li>
                    <li class="active">Profile</li>
                </ol>
            </div>
            <!-- end Breadcrumb -->

            <div class="container">
                <div class="row">
                    <!-- sidebar -->
                    <div class="col-md-3 col-sm-2">
                        <section id="sidebar">
                            <header><h3>Account</h3></header>
                            <aside>
                                <ul class="sidebar-navigation">
                                    <li class="active"><a href="{{route('userProfile')}}"><i class="fa fa-user"></i><span>Profile</span></a></li>
                                    <li><a href="{{route('myProperties')}}"><i class="fa fa-home"></i><span>My Properties</span></a></li>
                                    <li><a href="{{route('Bookmark.index')}}"><i class="fa fa-heart"></i><span>Bookmarked Properties</span></a></li>
                                </ul>
                            </aside>
                        </section><!-- /#sidebar -->
                    </div><!-- /.col-md-3 -->
                    <!-- end Sidebar -->
                    <!-- My Properties -->
                    <div class="col-md-9 col-sm-10">
                        <section id="profile">
                            <header><h1>Profile</h1></header>
                            <div class="account-profile">
                                <div class="row">
                                    @if(Session::has('disabled_user'))
                                        <div class="alert alert-warning" role="alert">
                                            {{session('disabled_user')}}
                                        </div>
                                    @endif
                                    @if(Session::has('updated_user'))
                                        <div class="alert  alert-success" role="alert">
                                           {{session('updated_user')}}
                                        </div>
                                        @endif

                                    @include('includes.form_error');

                                    <form role="form" id="form-account-profile" method="post" action="{{route('updateUser',['user_id'=>$user->id])}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                    <div class="col-md-3 col-sm-3">

                                      <label for="file">
                                        <img id="userPhoto" alt="" class="image" src="{{$user->userPhoto ? $user->userPhoto->path : '/images/user.jpg'}}" style="cursor: pointer">
                                      </label>

                                        <input id="file" type="file" name="file" style="visibility: hidden;"/>

                                    </div>
                                    <div class="col-md-9 col-sm-9">

                                            <div class="checkbox switch" id="agent-switch" data-agent-state="is-agent" data-agent-value="{{$user->role->name == 'Agent' ? 'Agent' : ''}}">
                                                <label>
                                                    I am an agent<input type="checkbox" id="imAgent">
                                                </label>
                                            </div>
                                            <section id="agency">
                                                <h3>My Agency</h3>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <label for="account-agency">Select your agency:</label>
                                                    </div>
                                                    <div class="col-md-8 col-sm-8">
                                                        <div class="form-group">
{{--                                                            <select name="account-agency" id="account-agency">--}}
{{--                                                                <option value="">Agency</option>--}}
{{--                                                                <option value="1">Estate+</option>--}}
{{--                                                                <option value="2">Northfolk Eastate</option>--}}
{{--                                                                <option value="3">Maximum Properties</option>--}}
{{--                                                                <option value="4">Edd's Homes</option>--}}
{{--                                                                <option value="5">Will & Scotch</option>--}}
{{--                                                            </select>--}}
                                                            <div class="form-group">
                                                                {!! Form::label('agency','Agency') !!}
                                                                {!! Form::select('agency',[''=>'Choose'] + $agency,null,['class'=>'form-control', 'id'=>'role']) !!}
                                                            </div>
                                                        </div><!-- /.form-group -->
                                                    </div>
                                                </div>
                                            </section>
                                            <section id="contact">
                                                <h3>Contact</h3>
                                                <dl class="contact-fields">
                                                    <dt><label for="form-account-name">Your Name:</label></dt>
                                                    <dd><div class="form-group">
                                                            <input type="text" class="form-control" id="name" name="name" required value="{{$user->name}}">
                                                            <small class="error">{{$errors->first('name')}}</small>
                                                        </div><!-- /.form-group --></dd>
                                                    <dt><label for="form-account-phone">Phone/Mobile:</label></dt>
                                                    <dd><div class="form-group">
                                                            <input type="text" class="form-control" id="phone" name="phone" value="{{$user->phone}}">
                                                            <small class="error">{{$errors->first('phone')}}</small>
                                                        </div><!-- /.form-group --></dd>
                                                    <dt><label for="form-account-email">Email:</label></dt>
                                                    <dd><div class="form-group">
                                                            <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
                                                            <small class="error">{{$errors->first('email')}}</small>
                                                        </div><!-- /.form-group --></dd>
                                                    <dt><label for="form-account-skype">Skype:</label></dt>
                                                    <dd><div class="form-group">
                                                            <input type="text" class="form-control" id="skype" name="skype" value="{{$user->skype}}">
                                                            <small class="error">{{$errors->first('skype')}}</small>
                                                        </div><!-- /.form-group --></dd>
                                                </dl>
                                            </section>
                                            <section id="about-me">
                                                <h3>About Me</h3>
                                                <div class="form-group">
                                                <textarea class="form-control" id="about_me" rows="5" name="about_me" >{{old('about_me') ? old('about_me') : $user->about_me}}</textarea>
                                                </div><!-- /.form-group -->
                                            </section>
                                            <section id="social">
                                                <h3>My Social Network</h3>
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                                        <input type="text" class="form-control" id="twitter" name="twitter" value="{{$user->twitter}}">

                                                    </div>
                                                </div><!-- /.form-group -->
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><a href="{{$user->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></span>
                                                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{$user->facebook}}">

                                                    </div>
                                                </div><!-- /.form-group -->
                                                <div class="form-group">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                                                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{$user->instagram}}">
                                                    </div>
                                                </div><!-- /.form-group -->



                                                <div class="form-group clearfix">


                                                        <a href="{{route('deleteUser',['id'=>$user->id])}}" role="button" type="submit" class="btn pull-right btn-danger" id="account-inactive" name="user-inactive">Delete User</a>

                                                    <button type="submit" class="btn pull-right btn-default" id="account-submit" name="user-profile">Save Changes</button>



                                                </div><!-- /.form-group -->

                                                <div class="checkbox switch" id="user_inactive_radio" data-agent-state="is-active">
                                                    <label class="pull-right">
                                                        Active
{{--                                                        <input id="is_active"  name="is_active" type="checkbox" {{$user->is_active == 1 ? 'checked' : '' }}>--}}
                                                        <input id="is_active"  name="is_active" type="checkbox" {{$user->is_active == 1 ? 'checked' : '' }}>
                                                    </label>
                                                </div>


                                            </section>
                                        </form><!-- /#form-contact -->


{{--      End of user form                                  --}}


                                        <form role="form" id="form-change-password" method="post" action="{{route('updatePassword',['user_id'=>$user->id])}}">
                                            {{ csrf_field() }}

                                        <section id="change-password">
                                            <header><h2>Change Your Password</h2></header>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <form role="form" id="form-account-password" method="post" >
                                                        <div class="form-group">
                                                            <label for="password">Current Password</label>
                                                            <input type="password" class="form-control" id="password" name="password">

                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="form-account-password-new">New Password</label>
                                                            <input type="password" class="form-control" id="new_password" name="new_password">

                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="new-confirm-password">Confirm New Password</label>
                                                            <input type="password" class="form-control" id="new_confirm_password" name="new_confirm_password">
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group clearfix">
                                                            <button type="submit" class="btn btn-default" id="form-account-password-submit" name="user-password">Change Password</button>
                                                        </div><!-- /.form-group -->
                                                    </form><!-- /#form-account-password -->
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <strong>Hint:</strong>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui
                                                        vestibulum, bibendum purus sit amet, vulputate mauris.
                                                    </p>
                                                </div>
                                            </div>
                                        </section>
                                        </form>
                                    </div><!-- /.col-md-9 -->
                                </div><!-- /.row -->
                            </div><!-- /.account-profile -->
                        </section><!-- /#profile -->
                    </div><!-- /.col-md-9 -->
                    <!-- end My Properties -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!-- end Page Content -->
    </div>
@endsection

@section('footer_script')
    <script>
        $('#file').change(function(){
            if(this.files && this.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#userPhoto').attr('src',e.target.result);
                };
                reader.readAsDataURL(this.files[0]);


            }
        });




{{--        @if($user->role->name == "Agent")--}}

{{--                $("#imAgent").iCheck('check');--}}
{{--        @else--}}
{{--                agentState();--}}
{{--                $("#imAgent").iCheck('uncheck');--}}
{{--        @endif--}}

        // $("#is_active").iCheck('uncheck', function(){
        //
        // });

        // $('#is_active').on('ifChanged',function(){
        //     if($('#is_active').is(':checked')){
        //
        //         // $(this).attr('checked', true);
        //         $(this).attr('value', '1');
        //         $('#is_active').iCheck('update');
        //     }else{
        //
        //         // $(this).attr('checked', false);
        //         $(this).attr('value', '0');
        //         $('#is_active').iCheck('update');
        //     }
        // });

        // $('#is_active').on('ifChanged', function(event) {
        //     // alert('checked = ' + event.target.checked);
        //     // alert('value = ' + event.target.value);
        //
        //     if(event.currentTarget.checked == true){
        //         alert("true")
        //         $(this).attr('value', '1');
        //
        //
        //
        //
        //     }else{
        //         alert("false");
        //
        //         $(this).attr('value', '0');
        //
        //     }
        // });



    </script>
@endsection