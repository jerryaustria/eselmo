@extends('layouts.app')


@section('content')


{{-- *******************************************************************   --}}

<div id="page-content">
    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">Sign In</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->

    <div class="container">
        <header><h1>Sign In</h1></header>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                <form role="form" id="form-create-account" method="post" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="form-create-account-email">E-mail Address</label>
                        <input type="email" class="form-control" id="form-create-account-email" value="{{ old('email') }}" name="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div><!-- /.form-group -->
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="form-create-account-password">Password:</label>
                        <input type="password" class="form-control" id="form-create-account-password" name="password" required>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div><!-- /.form-group -->
                    <br>
                    <div class="form-group clearfix">
                        <div class="col-md-6">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn pull-right btn-default" id="account-submit">Sign to My Account</button>
                        </div><!-- /.form-group -->
                    </div>
                        <br>
                    <div class="center"><a href="{{ route('password.request') }}">I don't remember my password</a></div>

                </form>
                <br>

            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>


{{-- *******************************************************************   --}}




@endsection
