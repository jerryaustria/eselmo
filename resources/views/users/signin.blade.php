@extends('layouts.app')
@extends('layouts.header')
@extends('layouts.navigation')

@section('body')
    <body class="page-sub-page page-sign-in page-account" id="page-top">
@endsection

@section('content')
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Sign In</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Sign In</h1></header>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                    <form role="form" id="form-create-account" method="post" >
                        <div class="form-group">
                            <label for="form-create-account-email">Email:</label>
                            <input type="email" class="form-control" id="form-create-account-email" required>
                        </div><!-- /.form-group -->
                        <div class="form-group">
                            <label for="form-create-account-password">Password:</label>
                            <input type="password" class="form-control" id="form-create-account-password" required>
                        </div><!-- /.form-group -->
                        <div class="form-group clearfix">
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Sign to My Account</button>
                        </div><!-- /.form-group -->
                    </form>
                    <hr>
                    <div class="center"><a href="#">I don't remember my password</a></div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
@endsection