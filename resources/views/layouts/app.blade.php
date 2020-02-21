<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>{{ config('app.name', 'Eselmo') }}</title>--}}
    <title>Eselmo | @yield('headerTitle')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.slider.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" type="text/css">
    <link href="https://fonts.gobogleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('headerlink')
    @yield('headerscript')

<style>
    @yield('style')
</style>

</head>
@yield('body')
{{--<body>--}}



<div class="wrapper">
    <div class="navigation">
        @yield('top-navigation')
            <div class="container">
                @yield('header-navigation')
            </div><!-- /.container -->
    </div><!-- /.navigation -->
    <!-- Slider -->
        @yield('has-slider')
    <!-- end Slider -->

    <!-- Search Box -->
        @yield('right-search')
    <!-- end Search Box -->

    <!-- Page Content -->
        @yield('content')
    <!-- end Page Content -->
    <!-- Footer -->
        @yield('footer')



    </div>




    {{--    <div id="app">--}}
{{--        <nav class="navbar navbar-default navbar-static-top">--}}
{{--            <div class="container">--}}
{{--                <div class="navbar-header">--}}

{{--                    <!-- Collapsed Hamburger -->--}}
{{--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
{{--                        <span class="sr-only">Toggle Navigation</span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                    </button>--}}

{{--                    <!-- Branding Image -->--}}
{{--                    <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                        {{ config('app.name', 'Laravel') }}--}}
{{--                    </a>--}}
{{--                </div>--}}

{{--                <div class="collapse navbar-collapse" id="app-navbar-collapse">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="nav navbar-nav">--}}
{{--                        &nbsp;--}}
{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="nav navbar-nav navbar-right">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @if (Auth::guest())--}}
{{--                            <li><a href="{{ route('login') }}">Login</a></li>--}}
{{--                            <li><a href="{{ route('register') }}">Register</a></li>--}}
{{--                        @else--}}
{{--                            <li class="dropdown">--}}
{{--                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--                                    {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                                </a>--}}

{{--                                <ul class="dropdown-menu" role="menu">--}}
{{--                                    <li>--}}
{{--                                        <a href="{{ route('logout') }}"--}}
{{--                                            onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                            Logout--}}
{{--                                        </a>--}}

{{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                            {{ csrf_field() }}--}}
{{--                                        </form>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        @endif--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        @yield('content')--}}
{{--    </div>--}}

    <!-- Scripts -->
<div id="overlay"></div>

<script src="{{ asset('js/app.js') }}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/smoothscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.placeholder.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/icheck.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.vanillabox-0.1.5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/retina-1.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jshashtable-2.1_src.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.numberformatter-1.2.3.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/tmpl.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.dependClass-0.1.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/draggable-0.1.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery.slider.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

<!--[if gt IE 8]>
<script type="text/javascript" src="{{asset('assets/js/ie.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/common.js')}}"></script>
<![endif]-->
<script>
    $(window).load(function(){
        initializeOwl(false);
    });

</script>


    @yield('footer_script')

</body>
</html>
