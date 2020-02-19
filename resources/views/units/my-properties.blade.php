@extends('layouts.app')
@extends('layouts.header')
@extends('layouts.navigation')
@extends('layouts.footer')

@section('headerlink')
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
@endsection

@section('body')
    <body class="page-sub-page page-my-properties page-account" id="page-top">
    @endsection

    @section('title')
        <span>My Properties</span>
@endsection

@section('content')
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Account</a></li>
                <li class="active">My Properties</li>
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
                                <li class="active"><a href="{{route('myProperties')}}"><i class="fa fa-home"></i><span>My Properties</span></a></li>
                                <li><a href="bookmarked.html"><i class="fa fa-heart"></i><span>Bookmarked Properties</span></a></li>
                            </ul>
                        </aside>
                    </section><!-- /#sidebar -->
                </div><!-- /.col-md-3 -->
                <!-- end Sidebar -->
                <!-- My Properties -->
                <div class="col-md-9 col-sm-10">
                    <section id="my-properties">
                        <header><h1>My Properties</h1></header>
                        <div class="my-properties">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Property</th>
                                        <th></th>
                                        <th>Type</th>
                                        <th>Date Added</th>
                                        <th>Views</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @isset($units)
                                        @foreach($units as $unit)
                                            <tr>
                                                <td class="image">
{{--                                                    <a href="property-detail.html"><img alt="" src="assets/img/properties/property-04.jpg"></a>--}}

                                                    <a href="property-detail.html"><img alt="" src="{{$unit->unitPhotos->first()->path ? $unit->unitPhotos->first()->path : 'no user photo '}}"></a>
                                                </td>
                                                <td><div class="inner">

                                                        <a href="property-detail.html"><h2>{{$unit->Title}}</h2></a>
                                                        <figure>{{$unit->Address}}</figure>
                                                        <div class="tag price">{{$unit->price}}</div>
                                                    </div>
                                                </td>
                                                <td><div class="inner">

                                                    </div>
                                                    <h2>{{$unit->propertyType->name}}</h2>
                                                    <figure>{{$unit->propertyStatus->name}}</figure>

                                                </td>
                                                <td>{{$unit->created_at->diffForHumans()}}</td>
                                                <td>236</td>
                                                <td class="actions">
                                                    <a href="{{route('Units.edit', $unit->id)}}" class="edit"><i class="fa fa-pencil"></i>Edit</a>
                                                    <a href="{{route('Units.delete',['id'=>$unit->id])}}"><i class="delete fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                            <!-- Pagination -->
                            <div class="center">
                                {{$units->render()}}
{{--                                <ul class="pagination">--}}

{{--                                    <li class="active"><a href="#">1</a></li>--}}
{{--                                    <li><a href="#">2</a></li>--}}
{{--                                    <li><a href="#">3</a></li>--}}
{{--                                    <li><a href="#">4</a></li>--}}
{{--                                    <li><a href="#">5</a></li>--}}
{{--                                </ul><!-- /.pagination-->--}}
                            </div><!-- /.center-->
                        </div><!-- /.my-properties -->
                    </section><!-- /#my-properties -->
                </div><!-- /.col-md-9 -->
                <!-- end My Properties -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
@endsection