@extends('layouts.app')
{{--@extends('layouts.navigation')--}}
@section('body')
    <body class="page-sub-page page-create-account page-account" id="page-top">
    @endsection

@section('content')
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{{Route('home')}}">Home</a></li>
                <li class="active">Create an Account</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Register</h1></header>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <h3>Account Type</h3>

                    {{-- ***************** Form --}}
                    <form class="form-horizontal" method="POST" action="{{'/register'}}">
                        {{ csrf_field() }}

                        <div class="radio" id="create-account-user">
                            <label>
                                <input type="radio" id="account-type-user" name="account-type" value="Regular User" required>Regular User
                            </label>
                        </div>
                        <div class="radio" id="agent-switch" data-agent-state="">
                            <label>
                                <input type="radio" id="account-type-agent" name="account-type" value="Agent"  required >Agent
                            </label>
                        </div>
                        <div id="agency" class="disabled">
                            <div class="form-group">
                                <label for="account-agency">Select your agency:</label>
                                <select name="account-agency" id="account-agency">
                                    <option value="">Agency</option>
                                    @isset($agencies)
                                    @foreach($agencies as $agency)
                                        <option value="{{$agency->id}}">{{$agency->name}}</option>
                                    @endforeach
                                    @endisset
                                    <option>Create Agency...</option>
                                </select>
                                <small class="error">{{$errors->first('account-agency')}}</small>
                            </div><!-- /.form-group -->
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="form-create-account-full-name">Full Name:</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                             @endif

{{--                            <small class="error">{{$errors->first('form-create-account-full-name')}}</small>--}}
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                             @endif

{{--                            <small class="error">{{$errors->first('form-create-account-email')}}</small>--}}
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                                </span>
                             @endif

{{--                            <small class="error">{{$errors->first('form-create-account-password')}}</small>--}}
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-confirm-password">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>

                            @if ($errors->has('confirm-password'))
                                <span class="help-block">
                                <strong>{{ $errors->first('confirm-password') }}</strong>
                                </span>
                            @endif


{{--                            <small class="error">{{$errors->first('form-create-account-confirm-password')}}</small>--}}
                        </div><!-- /.form-group -->
                        <div class="checkbox pull-left">
                            <label>
                                <input type="checkbox" id="account-type-newsletter" name="account-newsletter">Receive Newsletter
                            </label>
                        </div>

                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Create an Account</button>
{{--                            <button type="submit" class="btn btn-primary">Register</button>--}}
                        </div><!-- /.form-group -->
                    </form>
                    <hr>
                    <div class="center">
                        <figure class="note">By clicking the “Create an Account” button you agree with our <a href="terms-conditions.html">Terms and conditions</a></figure>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
@endsection

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-8 col-md-offset-2">--}}
{{--            <div class="panel panel-default">--}}
{{--                <div class="panel-heading">Register</div>--}}

{{--                <div class="panel-body">--}}
{{--                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">--}}
{{--                        {{ csrf_field() }}--}}

{{--                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
{{--                            <label for="name" class="col-md-4 control-label">Name</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>--}}

{{--                                @if ($errors->has('name'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>--}}

{{--                                @if ($errors->has('email'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
{{--                            <label for="password" class="col-md-4 control-label">Password</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control" name="password" required>--}}

{{--                                @if ($errors->has('password'))--}}
{{--                                    <span class="help-block">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <div class="col-md-6 col-md-offset-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    Register--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
