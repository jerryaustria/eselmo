@extends('layouts.app')
@extends('layouts.header')
@extends('layouts.navigation')
@extends('layouts.footer')

@section('headerlink')
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
@endsection

@section('title')
    <span>My Bookmarked Properties</span>
@endsection

@section('body')
    <body class="page-sub-page page-my-properties page-account" id="page-top">
@endsection


@section('content')
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Account</a></li>
                <li class="active">Bookmarked Properties</li>
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
                                <li><a href="{{route('userProfile')}}"><i class="fa fa-user"></i><span>Profile</span></a></li>
                                <li><a href="{{route('myProperties')}}""><i class="fa fa-home"></i><span>My Properties</span></a></li>
                                <li class="active"><a href="#"><i class="fa fa-heart"></i><span>Bookmarked Properties</span></a></li>
                            </ul>
                        </aside>
                    </section><!-- /#sidebar -->
                </div><!-- /.col-md-3 -->
                <!-- end Sidebar -->
                <!-- My Properties -->
                <div class="col-md-9 col-sm-10">
                    <section id="bookmarked-properties">
                        <header><h1>Bookmarked Properties </h1></header>
                        <div class="grid">

                            @isset($bookmark)
                                @foreach($bookmark as $bookmarked)
                                    <div class="property masonry">
                                        <div class="inner">
                                            <a href="{{route('Units.show',$bookmarked->unit->slug ? $bookmarked->unit->slug : $bookmarked->unit->id)}}">
                                                <div class="property-image">
                                                    <div class="overlay">
                                                        <div class="info">
                                                            <div class="tag price">$ {{$bookmarked->unit->price}}</div>
                                                        </div>
                                                    </div>
                                                    <img alt="" src="{{$bookmarked->unit->unitPhotos->first() ? $bookmarked->unit->unitPhotos->first()->path : asset('assets/img/properties/property-09.jpg')}}">

                                                </div>
                                            </a>
                                            <aside>
                                                <header>
                                                    <a href="{{route('Units.show',$bookmarked->unit->slug ? $bookmarked->unit->slug : $bookmarked->unit->id)}}"><h3>{{$bookmarked->unit->Address}}</h3></a>
                                                    <figure>{{$bookmarked->unit->city}}, {{$bookmarked->unit->zipcode}}</figure>
                                                </header>
{{--                                                <p>{{$bookmarked->unit->Description}}</p>--}}
                                                <dl>
                                                    <dt>Status:</dt>
                                                    <dd>{{$bookmarked->unit->propertyStatus->name}}</dd>
                                                    <dt>Area:</dt>
                                                    <dd>{{$bookmarked->unit->area}} m<sup>2</sup></dd>
                                                    <dt>Beds:</dt>
                                                    <dd>{{$bookmarked->unit->beds}}</dd>
                                                    <dt>Baths:</dt>
                                                    <dd>{{$bookmarked->unit->baths}}</dd>
                                                    <dt>Seller/Agent</dt>
                                                    <dd>{{$bookmarked->unit->user->name}}</dd>
                                                </dl>
                                                <a href="{{route('Units.show',$bookmarked->unit->slug ? $bookmarked->unit->slug : $bookmarked->unit->id)}}" class="link-arrow">Read More</a>
                                            </aside>
                                        </div>
                                     </div><!-- /.property -->
                                @endforeach
                            @endisset




                        </div><!-- /js-masonry-->
                        <!-- Pagination -->
                        <div class="center">
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul><!-- /.pagination-->
                        </div><!-- /.center-->
                    </section><!-- /#my-properties -->
                </div><!-- /.col-md-9 -->
                <!-- end My Properties -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>

@endsection




@section('footer_script')
    <script type="text/javascript" src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/scrollReveal.min.js')}}"></script>
@endsection