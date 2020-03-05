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
                                <li><a href="{{route('Bookmark.index')}}"><i class="fa fa-heart"></i><span>Bookmarked Properties</span></a></li>
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

{{-- Form --}}
                                <form action="/delete/SelectedProperties" method="POST">
                                    {{csrf_field()}} {{method_field('delete')}}

                                <div class="form-inline">
{{--                                    <div class="form-group">--}}
{{--                                        <input type="checkbox" name="checkboxMyProperties" id="checkboxMyProperties" class="form-control">--}}
{{--                                        <label for="checkboxMyProperties">Check All</label>--}}
{{--                                    </div>--}}
                                    <div class="form-group" id="deleteIcon">
                                         <button type="submit" style="color:red; background:transparent; border:0"><i class="delete fa fa-trash-o"></i> Delete</button>
                                    </div>
                                    <div class="form-group">

                                        <select name="numberOfPropertyList" id="numberOfPropertyList" class="form-control">
                                            <option>5</option>
                                            <option>10</option>
                                            <option>20</option>
                                            <option>30</option>
                                            <option>40</option>
                                            <option>50</option>
                                        </select>

                                    </div>


                                </div>



                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th style="width: 40px;">

                                                <input type="checkbox" name="checkboxMyProperties" id="checkboxMyProperties" class="form-control">
                                        </th>
                                        <th></th>
                                        <th>Property</th>
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
                                                <td><input type="checkbox" name="checkboxSelectedProperties[]" class="form-control checkBoxes" value="{{$unit->id}}" /></td>
                                                <td class="image">
{{--                                                    <a href="property-detail.html"><img alt="" src="assets/img/properties/property-04.jpg"></a>--}}

                                                    <a href="{{route('Units.show',$unit->slug ? $unit->slug : $unit->id)}}"><img alt="" src="{{$unit->unitPhotos->first() ? $unit->unitPhotos->first()->path : asset('assets/img/properties/property-04.jpg')}}"></a>
                                                </td>
                                                <td><div class="inner">

                                                        <a href="{{route('Units.show',$unit->slug ? $unit->slug : $unit->id)}}"><h2>{{$unit->Title}}</h2></a>
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
{{--                                                    <a href="{{route('Units.edit', $unit->hash_id)}}" class="edit"><i class="fa fa-pencil"></i>Edit</a>--}}
                                                    <a href="{{route('Units.edit', $unit->hash_id ? $unit->hash_id : $unit->slug)}}" class="edit"><i class="fa fa-pencil"></i>Edit</a>
                                                    <a href="{{route('Unitsdelete',$unit->id)}}"><i class="delete fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endisset
                                    </tbody>
                                </table>

                                </form>


                            </div><!-- /.table-responsive -->
                            <!-- Pagination -->
                            <div class="center">
{{--                                {{$units->render()}}--}}
                                <ul class="pagination">

                                    {{$units->links()}}
{{--                                    <li class="active"><a href="#">1</a></li>--}}
{{--                                    <li><a href="#">2</a></li>--}}
{{--                                    <li><a href="#">3</a></li>--}}
{{--                                    <li><a href="#">4</a></li>--}}
{{--                                    <li><a href="#">5</a></li>--}}
                                </ul><!-- /.pagination-->
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

@section('footer_script')
    <script>
        $(document).ready(function(){
            $('#checkboxMyProperties').click(function(){
                if(this.checked){
                    $('.checkBoxes').each(function(){
                        this.checked = true;
                    });
                }else{
                    $('.checkBoxes').each(function(){
                        this.checked = false;
                    });
                }
            });
        });
    </script>
@endsection