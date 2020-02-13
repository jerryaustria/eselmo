@extends('layouts.app')
@extends('layouts.header')
@extends('layouts.navigation')
@extends('layouts.footer')

@section('body')
    <body class="page-sub-page page-404 page-error" id="page-top">
@endsection

@section('title')
    <span>Page not found</span>
@endsection

@section('content')
    <div class="wrapper">
        <!-- Page Content -->
        <div id="page-content">
            <!-- Breadcrumb -->
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">404</li>
                </ol>
            </div>
            <!-- end Breadcrumb -->

            <div class="container">
                <section id="404">
                    <div class="error-page">
                        <div class="title">
                            <img alt="" src="{{asset('assets/img/error-page-background.png')}}" class="top">
                            <header>404</header>
                            <img alt="" src="{{asset('assets/img/error-page-background.png')}}" class="bottom">
                        </div>
                        <h2 class="no-border">Page not found</h2>
                        <a href="" class="link-arrow back" onclick="history.back(-1)">Go Back</a>
                    </div>
                </section>
            </div><!-- /.container -->
        </div>
        <!-- end Page Content -->
    </div>
@endsection