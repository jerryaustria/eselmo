@extends('layouts.app')
@extends('layouts.header')
@extends('layouts.navigation')

@section('body')
    <body class="page-sub-page page-create-account page-account" id="page-top">
@endsection

    <!-- Page Content -->
@section('content')
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Create an Account</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>{{$modify == 1 ? 'Modify User' : 'Create an Account'}}</h1></header>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <h3>Account Type</h3>

{{-- ***************** Form --}}
                    <form role="form" id="form-create-account" method="post" action="{{$modify == 1 ? route('update_user',['user_id' => 1]) : route('register')}}">
                        <div class="radio" id="create-account-user">
                            <label>
                                <input type="radio" id="account-type-user" name="account-type" value="Regular User" required>Regular User
                            </label>
                        </div>
                        <div class="radio" id="agent-switch" data-agent-state="">
                            <label>
                                <input type="radio" id="account-type-agent" name="account-type" value="Agent" required>Agent
                            </label>
                        </div>
                        <div id="agency" class="disabled">
                            <div class="form-group">
                                <label for="account-agency">Select your agency:</label>
                                <select name="account-agency" id="account-agency">
                                    <option value="">Agency</option>
                                        @foreach($agencies as $agency)
                                            <option value="{{$agency->id}}">{{$agency->name}}</option>
                                        @endforeach
                                            <option>Create Agency...</option>
                                </select>
                                <small class="error">{{$errors->first('account-agency')}}</small>
                            </div><!-- /.form-group -->
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="form-create-account-full-name">Full Name:</label>
                            <input type="text" class="form-control" id="form-create-account-full-name" name="form-create-account-full-name" value="{{old('form-create-account-full-name')}}">
                            <small class="error">{{$errors->first('form-create-account-full-name')}}</small>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-email">Email:</label>
                            <input type="email" class="form-control" id="form-create-account-email" name="form-create-account-email" required>
                            <small class="error">{{$errors->first('form-create-account-email')}}</small>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-password">Password:</label>
                            <input type="password" class="form-control" id="form-create-account-password" name="form-create-account-password" required>
                            <small class="error">{{$errors->first('form-create-account-password')}}</small>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-confirm-password">Confirm Password:</label>
                            <input type="password" class="form-control" id="form-create-account-confirm-password" required>
                            <small class="error">{{$errors->first('form-create-account-confirm-password')}}</small>
                        </div><!-- /.form-group -->
                        <div class="checkbox pull-left">
                            <label>
                                <input type="checkbox" id="account-type-newsletter" name="account-newsletter">Receive Newsletter
                            </label>
                        </div>
                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Create an Account</button>
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