@extends('layouts.app')
@extends('layouts.header')
@extends('layouts.navigation')
@extends('layouts.footer')

@section('headerlink')
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
@endsection

@section('body')
    <body class="page-sub-page page-agencies-listing" id="page-top">
@endsection

@section('title')
    <span>Users</span>
@endsection

@section('content')
    <div class="wrapper">
        <!-- Page Content -->
        <div id="page-content">
            <!-- Breadcrumb -->
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Agents</a></li>
                    <li class="active">Agents Listing</li>
                </ol>
            </div>
            <!-- end Breadcrumb -->

            <div class="container">
                <div class="row">
                    <!-- Agent Detail -->
                    <div class="col-md-12 col-sm-12">
                        <section id="agents-listing">
                            <header><h1>User List</h1></header>
                            <div class="row">

                                @isset($users)
                                @foreach($users as $user)
                                <div class="col-md-12 col-lg-4">
                                    <div class="agent">
                                        <a href="{{route('admin.users',['id'=>$user->id])}}" class="agent-image"><img src="{{$user->userPhoto ? $user->userPhoto->path : '/images/user.jpg'}}" /></a>
                                        <div class="wrapper">
                                            <header><a href="{{route('admin.users',['id'=>$user->id])}}"><h2>{{$user->name}}</h2></a></header>
                                            <aside>23 Properties</aside>
                                            <dl>
                                                <dt>Phone:</dt>
                                                <dd>{{$user->phone}}</dd>
                                                <dt>Mobile:</dt>
                                                <dd>888 123 456 789</dd>
                                                <dt>Email:</dt>
                                                <dd><a href="mailto:{{$user->email}}">{{$user->email}}</a></dd>
                                                @if($user->skype)
                                                    <dt>Skype:</dt>
                                                    <dd><a href="{{$user->skype}}">{{$user->skype}}</a></dd>
                                                @endif
                                                @if($user->facebook)
                                                    <dt>Facebook:</dt>
                                                    <dd><a href="{{$user->facebook}}" target="_blank">Link to Page</a></dd>
                                                @endif
                                            </dl>
                                        </div>
                                    </div><!-- /.agent -->
                                </div><!-- /.col-md-12 -->
                                @endforeach
                                @endif

                            </div><!-- /.row -->
                        </section><!-- /#agents-listing -->
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
                    </div><!-- /.col-md-9 -->
                    <!-- end Agent Detail -->

                    <!-- sidebar -->
{{--                    <div class="col-md-3 col-sm-3">--}}
{{--                        <section id="sidebar">--}}
{{--                            <aside id="edit-search">--}}
{{--                                <header><h3>Search Properties</h3></header>--}}
{{--                                <form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <select name="type">--}}
{{--                                            <option value="">Status</option>--}}
{{--                                            <option value="1">Rent</option>--}}
{{--                                            <option value="2">Sale</option>--}}
{{--                                        </select>--}}
{{--                                    </div><!-- /.form-group -->--}}
{{--                                    <div class="form-group">--}}
{{--                                        <select name="country">--}}
{{--                                            <option value="">Country</option>--}}
{{--                                            <option value="1">France</option>--}}
{{--                                            <option value="2">Great Britain</option>--}}
{{--                                            <option value="3">Spain</option>--}}
{{--                                            <option value="4">Russia</option>--}}
{{--                                            <option value="5">United States</option>--}}
{{--                                        </select>--}}
{{--                                    </div><!-- /.form-group -->--}}
{{--                                    <div class="form-group">--}}
{{--                                        <select name="city">--}}
{{--                                            <option value="">City</option>--}}
{{--                                            <option value="1">New York</option>--}}
{{--                                            <option value="2">Los Angeles</option>--}}
{{--                                            <option value="3">Chicago</option>--}}
{{--                                            <option value="4">Houston</option>--}}
{{--                                            <option value="5">Philadelphia</option>--}}
{{--                                        </select>--}}
{{--                                    </div><!-- /.form-group -->--}}
{{--                                    <div class="form-group">--}}
{{--                                        <select name="district">--}}
{{--                                            <option value="">District</option>--}}
{{--                                            <option value="1">Manhattan</option>--}}
{{--                                            <option value="2">The Bronx</option>--}}
{{--                                            <option value="3">Brooklyn</option>--}}
{{--                                            <option value="4">Queens</option>--}}
{{--                                            <option value="5">Staten Island</option>--}}
{{--                                        </select>--}}
{{--                                    </div><!-- /.form-group -->--}}
{{--                                    <div class="form-group">--}}
{{--                                        <select name="property-type">--}}
{{--                                            <option value="">Property Type</option>--}}
{{--                                            <option value="1">Apartment</option>--}}
{{--                                            <option value="2">Condominium</option>--}}
{{--                                            <option value="3">Cottage</option>--}}
{{--                                            <option value="4">Flat</option>--}}
{{--                                            <option value="5">House</option>--}}
{{--                                        </select>--}}
{{--                                    </div><!-- /.form-group -->--}}
{{--                                    <div class="form-group">--}}
{{--                                        <div class="price-range">--}}
{{--                                            <input id="price-input" type="text" name="price" value="1000;299000">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="form-group">--}}
{{--                                        <button type="submit" class="btn btn-default">Search Now</button>--}}
{{--                                    </div><!-- /.form-group -->--}}
{{--                                </form><!-- /#form-map -->--}}
{{--                            </aside><!-- /#edit-search -->--}}
{{--                            <aside id="featured-properties">--}}
{{--                                <header><h3>Featured Properties</h3></header>--}}
{{--                                <div class="property small">--}}
{{--                                    <a href="property-detail.html">--}}
{{--                                        <div class="property-image">--}}
{{--                                            <img alt="" src="assets/img/properties/property-06.jpg">--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="info">--}}
{{--                                        <a href="property-detail.html"><h4>2186 Rinehart Road</h4></a>--}}
{{--                                        <figure>Doral, FL 33178 </figure>--}}
{{--                                        <div class="tag price">$ 72,000</div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- /.property -->--}}
{{--                                <div class="property small">--}}
{{--                                    <a href="property-detail.html">--}}
{{--                                        <div class="property-image">--}}
{{--                                            <img alt="" src="assets/img/properties/property-09.jpg">--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="info">--}}
{{--                                        <a href="property-detail.html"><h4>2479 Murphy Court</h4></a>--}}
{{--                                        <figure>Minneapolis, MN 55402</figure>--}}
{{--                                        <div class="tag price">$ 36,000</div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- /.property -->--}}
{{--                                <div class="property small">--}}
{{--                                    <a href="property-detail.html">--}}
{{--                                        <div class="property-image">--}}
{{--                                            <img alt="" src="assets/img/properties/property-03.jpg">--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <div class="info">--}}
{{--                                        <a href="property-detail.html"><h4>1949 Tennessee Avenue</h4></a>--}}
{{--                                        <figure>Minneapolis, MN 55402</figure>--}}
{{--                                        <div class="tag price">$ 128,600</div>--}}
{{--                                    </div>--}}
{{--                                </div><!-- /.property -->--}}
{{--                            </aside><!-- /#featured-properties -->--}}
{{--                            <aside id="our-guides">--}}
{{--                                <header><h3>Our Guides</h3></header>--}}
{{--                                <a href="#" class="universal-button">--}}
{{--                                    <figure class="fa fa-home"></figure>--}}
{{--                                    <span>Buying Guide</span>--}}
{{--                                    <span class="arrow fa fa-angle-right"></span>--}}
{{--                                </a><!-- /.universal-button -->--}}
{{--                                <a href="#" class="universal-button">--}}
{{--                                    <figure class="fa fa-umbrella"></figure>--}}
{{--                                    <span>Right Insurance for You</span>--}}
{{--                                    <span class="arrow fa fa-angle-right"></span>--}}
{{--                                </a><!-- /.universal-button -->--}}
{{--                            </aside><!-- /#our-guide -->--}}
{{--                        </section><!-- /#sidebar -->--}}
{{--                    </div>--}}
                    <!-- /.col-md-3 -->
                    <!-- end Sidebar -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
        <!-- end Page Content -->
    </div>

 @endsection