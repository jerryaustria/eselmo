@extends('layouts.app')
@extends('layouts.header')
@extends('layouts.navigation')
@extends('layouts.footer')

@section('headerlink')
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/fileinput.min.css')}}" type="text/css">
{{--    <link rel="stylesheet" href="{{asset('vendor/bootstrap-fileinput-master/css/fileinput.min.css')}}" type="text/css">--}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfyW_Jj9YpTxwDGfRe8FCbgohLb_321Yc&libraries=places&sensor=false" type="text/javascript"></script>

    <link rel="stylesheet" href="{{asset('vendor/dropzone/dropzone.css')}}" type="text/css">


@endsection

@section('style')

@endsection

@section('body')
    <body class="page-sub-page page-submit" id="page-top">
@endsection

@section('headerscript')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/themes/fa/theme.js"></script>
    <link rel="stylesheet" href="{{asset('vendor/summernote-develop/dist/summernote-bs4.css')}}">
    <script src="{{asset('vendor/summernote-develop/dist/summernote-bs4.js')}}"></script>

@endsection



@section('content')
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Add your property</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <header><h1>Add Your Property</h1></header>
            <div class="row">
                <!-- Submit-->
                <div class="col-md-9 col-sm-9">
                    <section id="submit" class="submit">
                        <section id="select-package">
                            <div class="table-responsive submit-pricing">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Your Package:</th>
                                        <th class="title">Free</th>
                                        <th class="title">Silver</th>
                                        <th class="title">Gold</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="prices">
                                        <td></td>
                                        <td>$0</td>
                                        <td>$20</td>
                                        <td>$40</td>
                                    </tr>
                                    <tr>
                                        <td>Property Submit Limit</td>
                                        <td>1</td>
                                        <td>20</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr>
                                        <td>Agent Profiles</td>
                                        <td>1</td>
                                        <td>10</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr>
                                        <td>Agency Profiles</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td>5</td>
                                        <td>Unlimited</td>
                                    </tr>
                                    <tr>
                                        <td>Featured Properties</td>
                                        <td class="not-available"><i class="fa fa-times"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                        <td class="available"><i class="fa fa-check"></i></td>
                                    </tr>
                                    <tr class="buttons">
                                        <td></td>
                                        <td class="package-selected" data-package="free"><button type="button" class="btn btn-default small">Select</button></td>
                                        <td data-package="silver"><button type="button" class="btn btn-default small">Select</button></td>
                                        <td data-package="gold"><button type="button" class="btn btn-default small">Select</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.submit-pricing -->
                        </section><!-- /#select-package -->
                    </section><!-- /#submit -->
                </div><!-- /.col-md-9 -->
                <aside class="col-md-3 col-sm-3">
                    <div class="submit-step">
                        <figure class="step-number">1</figure>
                        <div class="description">
                            <h4>Select Your Price Package</h4>
                            <p>Choose from price packages one that suit your need. If you have chosen package before,
                                it will be automatically selected.
                            </p>
                        </div>
                    </div><!-- /.submit-step -->
                </aside><!-- /.col-md-3 -->
            </div><!-- /.row -->
            <form role="form" id="form-submit" class="form-submit" action="{{$modify == 0 ? route('Units.store') : route('Unitsupdate',$unit->id)}}" method="POST" role="form" enctype="multipart/form-data">
{{--                {{var_dump($errors)}}--}}


{{--                {!! Form::open(['method'=>'POST', 'action'=>'PropertyController@store','id'=>'form-submit', 'role'=>'form','files'=>true]) !!}--}}

{{--            {!! Form::model($unit, ['method'=> $modify == 0 ? 'POST' : 'PATCH','action'=> $modify == 0 ? 'PropertyController@store' : ['PropertyController@update',$unit->id], 'files'=>true,'role'=>'form']) !!}--}}



{{--                {!! Form::label('title','Title:') !!}--}}
{{--                {!! Form::text('title', null, ['class'=>'form-control','id'=>'id']) !!}--}}

{{--            {!! Form::submit('Submit', null, ['class'=>'btn btn-info','id'=>'id']) !!}--}}


            {{--            for edit page--}}
{{--             {!! Form::model($unit, ['method'=>'PATCH', 'action'=>['UnitController@update'], $unit->id) !!}--}}



                {{ csrf_field() }}

                <div class="row">
                    <div class="block">
                        <div class="col-md-9 col-sm-9">
                            <div class="row">@include('includes.form_error')</div>
                            <section id="submit-form">
                                <section id="basic-information">
                                    <header><h2>Basic Information</h2></header>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
{{--                                                <label for="submit-title" >Title</label>--}}

                                                {!! Form::label('Title','Title')!!}

{{--                                                <input type="text" class="form-control error" id="submit-title" name="title" value="{{old('title')}}" required>--}}
                                                {!! Form::text('Title',$modify == 0 ? old('Title') : $unit->Title,['class'=>'form-control error', 'id'=>'submit-title', 'required']) !!}

                                                <small class="error">{{$errors->first('Title')}}</small>

                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                {!! Form::label('price','Price') !!}
                                                <div class="input-group">
                                                    <span class="input-group-addon">P</span>
{{--                                                    <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}" pattern="^\d*(\.\d{2}$)?" required>--}}


                                                        {!! Form::text('price',$modify == 0 ? old('price') : $unit->price,['class'=>'form-control error', 'id'=>'price', 'pattern'=>'^\d*(\.\d{2}$)?', 'required']) !!}

                                                    <small class="error">{{$errors->first('price')}}</small>
                                                </div>
                                            </div><!-- /.form-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">

{{--                                        {!! Form::label('Description','Description') !!}--}}
{{--                                        <textarea class="form-control" id="submit-description" rows="8" name="Description" value="{{old('Description')}}" required>{{old('--}}
{{--                                        Description')}}</textarea>--}}



{{--                                            {!! Form::textarea('Description',old('Description'),['class'=>'form-control', 'required']) !!}--}}





{{--                                                <label for="description" class="form-label"><i class="fas fa-pencil-alt prefix"></i> Description</label>--}}

{{--                                        <textarea id="description" name="Description" value="This is content" class="md-textarea summernote"></textarea>--}}


                                            {!! Form::label('description','Description',['class'=>'form-label']) !!} <i class="fas fa-pencil-alt prefix"></i>
                                            {!! Form::textarea('Description',old('Description'),['class'=>'md-textarea summernote', 'id'=>'description']) !!}


                                                <div class="col-xs-12 text-right"><span id="maxContentPost"></span>
                                                </div>
                                                <!--Textarea with icon prefix-->



                                        <small class="error">{{$errors->first('Description')}}</small>
                                    </div><!-- /.form-group -->
                                </section><!-- /#basic-information -->

                                <section>
                                    <div class="row">
                                        <div class="block clearfix">
                                            <div class="col-md-6 col-sm-6">
                                                <section id="summary">
                                                    <header><h2>Summary</h2></header>

                                                    <div class="form-group">
{{--                                                        <label for="local_address">Address</label>--}}
{{--                                                        <input type="text" class="form-control" id="local_address" value="{{old('local_address')}}" name="local_address">--}}

                                                        {!! Form::label('Address','Address') !!}
                                                        {!! Form::text('Address',$modify == 0 ? old('Address') : $unit->Address,['class'=>'form-control', 'id'=>'address']) !!}


                                                        <small class="error">{{$errors->first('Address')}}</small>
                                                    </div><!-- /.form-group -->

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">


                                                            <div class="form-group">
                                                                <label for="property-city">City</label>

                                                                <input list="property_city" name="city" value="{{$modify == 0 ? old('city') : $unit->city}}" type="text">
                                                                <datalist id="property_city" >
                                                                    @foreach($cities as $key=>$city)
                                                                        <option value="{{$city}}">{{$city}}</option>
                                                                    @endforeach
                                                                </datalist>
                                                                <small class="error">{{$errors->first('city')}}</small>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="property-zipcode">Zip Code</label>

                                                                <input id="property_zipcode" name="zipcode" value="{{$modify == 0 ? old('zipcode') : $unit->zipcode}}" type="number">
                                                                <small class="error">{{$errors->first('zipcode')}}</small>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->


                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-property-type">Property Type</label>
                                                                <select name="property_type" id="submit-property-type" value="{{$modify == 0 ? old('property_type') : $unit->property_type}}">
                                                                    @foreach($property_type as $key=>$propertyType)
                                                                        <option value="{{$key}}" @if($modify==1){{$unit->property_type == $key ? 'selected' : ''}} @endif>  {{$propertyType}}</option>
{{--                                                                        <option value="{{$propertyType->id}}">{{$propertyType->name}}</option>--}}
                                                                    @endforeach
                                                                </select>
                                                                <small class="error">{{$errors->first('type-property')}}</small>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="status">Status</label>
                                                                <select name="status" id="submit-status">
                                                                    @foreach($status as $key=>$stat)

                                                                        <option value="{{$key}}" @if($modify == 1){{$unit->status == $key ? 'selected' : ''}} @endif>{{$stat}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="beds">Beds</label>
                                                                <input type="text" class="form-control" id="submit-Beds" name="beds" pattern="\d*" value="{{$modify == 0 ? old('beds') : $unit->beds}}" required>
                                                                <small class="error">{{$errors->first('beds')}}</small>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="baths">Baths</label>
                                                                <input type="text" class="form-control" id="submit-Baths" name="baths" value="{{$modify == 0 ? old('baths') : $unit->baths}}" pattern="\d*"  required>
                                                                <small class="error">{{$errors->first('baths')}}</small>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="area">Area</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control error" id="submit-area" name="area" pattern="\d*" value="{{$modify == 0 ? old('area') : $unit->area}}" required>
                                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                                    <small class="error">{{$errors->first('area')}}</small>
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="garages">Garages</label>
                                                                <input type="text" class="form-control" id="submit-garages" name="garages" pattern="\d*" value="{{$modify == 0 ? old('garages') : $unit->garages}}">
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="checkbox">
                                                        <div class="col-md-6 col-sm-6" style="padding:0px">
                                                            <label>
                                                                <input type="checkbox" name="israting" {{ $modify == 0 ? old('israting') : $unit->israting == 1 ? 'checked' : '' }} >Allow user rating <i class="fa fa-question-circle tool-tip"  data-toggle="tooltip" data-placement="right" title="Users can give you a stars rating which is displayed in property detail"></i>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6" style="padding-right:0px">
                                                            <label>
                                                                <input type="checkbox" name="allow_comment" {{ $modify == 0 ? old('allow_comment') : $unit->allow_comment == 1 ? 'checked' : '' }} >Allow user comment <i class="fa fa-question-circle tool-tip"  data-toggle="tooltip" data-placement="right" title="Users can give you a comment which is displayed in property detail"></i>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </section><!-- /#summary -->
                                            </div><!-- /.col-md-6 -->
                                            <div class="col-md-6 col-sm-6">
                                                <section id="place-on-map">
                                                    <header class="section-title">
                                                        <h2>Place on Map</h2>
                                                        <span class="link-arrow geo-location">Get My Position</span>
                                                    </header>
                                                    <div class="form-group">
                                                        <label for="location_map">location Map</label>
                                                        <input type="text" class="form-control" id="location_map" value="{{$modify == 0 ? old('location_map') : $unit->location_map}}" name="location_map">
                                                        <small class="error">{{$errors->first('location_map')}}</small>
                                                    </div><!-- /.form-group -->
                                                    <label for="address-map">Or drag the marker to property position</label>
                                                    <div id="submit-map"></div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="latitude" value="{{$modify == 0 ? old('map_lat') : $unit->map_lat}}" name="map_lat" readonly>
                                                            </div><!-- /.form-group -->
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="longitude" name="map_lon" value="{{$modify == 0 ? old('map_lon') : $unit->map_lon}}" readonly>
                                                            </div><!-- /.form-group -->
                                                        </div>
                                                    </div>
                                                </section><!-- /#place-on-map -->
                                            </div><!-- /.col-md-6 -->
                                        </div><!-- /.block -->
                                    </div><!-- /.row -->
                                </section>

                                <section class="block" id="gallery">
                                    <header><h2>Gallery</h2></header>
                                    <div class="center">
                                        <div class="form-group">


                                                {!! Form::file('file[]',['class'=>'file','data-show-upload'=>'false',
                                                'data-show-caption'=>'false','data-show-caption'=>'false','data-show-remove'=>'false','data-show-delete'=>'true',
                                                'accept'=>'image/jpeg,image/png','data-browse-class'=>'btn btn-default','data-browse-label'=>'Browse Images',
                                                'multiple'=>true,'id'=>'file-upload']) !!}



{{--                                            <div class="file-loading">--}}
{{--                                                <input id="file-upload" name="file[]" type="file" multiple accept="image/jpeg,image/png">--}}
{{--                                            </div>--}}



                                            <figure class="note"><strong>Hint:</strong> You can upload all images at once!</figure>
                                        </div>
                                    </div>
                                </section>

                                <section class="block" id="gallery">
                                    <header><h2>Floor Plans</h2></header>
                                    <div class="center">
                                        <div class="form-group">
                                            <input id="floorplan_photos" name="floorplan_photos[]" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Browse Images">

                                            <figure class="note"><strong>Hint:</strong> You can upload all images at once!</figure>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="form-group">

{{--  Dropzone                                      --}}
{{--                                        <input type="hidden" id="tempID" >--}}
{{--                                        <div class="dropzone" id="my-awesome-dropzone">--}}
{{--                                            <div class="fallback">--}}
{{--                                                <input id="file" multiple="true" name="file" type="file" multiple>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}


{{--  End of Dropzone                                      --}}

                                        <label for="video">Video:</label>
                                        <input type="text" class="form-control" id="video" value="{{$modify == 0 ? old('video') : $unit->video}}" name="video">
                                        <figure>Add link here</figure>
                                        <small class="error">{{$errors->first('video')}}</small>
                                    </div><!-- /.form-group -->
                                </section>

                                <section id="property-features" class="block">
                                    <section>
                                        <header><h2>Property Features</h2> <span id="add_features"><i class="material-icons">add_circle_outline</i>Add Feature</span></header>

                                        <ul class="submit-features" id="ul_features">
                                            @foreach($property_features as $feature)
                                                <li>
                                                    <div class="checkbox">
                                                        <label>

                                                            <input type="checkbox" name="property_features[]" value="{{$feature->id}}" @if($modify == 1){{in_array($feature->id,$property_selected_features) ? 'checked' : ''}} @endif>{{$feature->name}}
                                                        </label>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </section>
                                </section>
                                <hr>
                            </section>
                        </div><!-- /.col-md-9 -->

                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">2</figure>
                                <div class="description">
                                    <h4>Enter Information About Property</h4>
                                    <p>Type information about your property. Be descriptive.
                                    </p>
                                </div>
                            </aside><!-- /.submit-step -->
                        </div><!-- /.col-md-3 -->



                    </div>
                </div><!-- /.row -->
                <div class="row">
                    <div class="block">
                        <div class="col-md-9 col-sm-9">
                            <div class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default large">{{$modify == 0 ? 'Proceed to Payment': 'Update'}}</button>
                                </div><!-- /.form-group -->
                                <figure class="note block">By clicking the “Proceed to Payment” or “Submit” button you agree with our <a href="terms-conditions.html">Terms and conditions</a></figure>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <aside class="submit-step">
                                <figure class="step-number">3</figure>
                                <div class="description">
                                    <h4>Review Information and Proceed to Payment</h4>
                                    <p>Carefully check entered information and than click button to submit them.
                                    </p>
                                </div>
                            </aside><!-- /.submit-step -->
                        </div><!-- /.col-md-3 -->
                    </div>
                </div>

                <input type="hidden" id="marker" value="{{$modify == 0 ? 'false' : 'true' }}">

            {!! Form::close() !!}

{{--            </form><!-- /#form-submit -->--}}
        </div><!-- /.container -->
    </div>

{{--Jan 28 2020 Modal for Property Feature--}}
    <div class="modal fade" id="property-featuresID" tabindex="-1" role="dialog" aria-labelledby="property-featuresID"
         aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header text-center">
                    <h4 class="modal-title white-text w-100 font-weight-bold py-2">Property Features</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="white-text">&times;</span>
                    </button>
                </div>

                <!--Body-->
                <div class="modal-body">
                    <div class="md-form mb-5">

                        <input type="text" id="input_feature" name="name" class="form-control validate" >
                        <label data-error="wrong" data-success="right" for="form3">Feature name</label>
                    </div>

                </div>

                <!--Footer-->
                <div class="modal-footer justify-content-center">
                    <a type="button" class="btn btn-outline-warning waves-effect" id="add_feature_button">
                        add<i class="fas fa-paper-plane-o ml-1"></i></a>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>

{{--   end of modal --}}

@endsection

@extends('layouts.footer')

@section('footer_script')

{{--    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&libraries=places"></script>--}}
{{--    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfyW_Jj9YpTxwDGfRe8FCbgohLb_321Yc&libraries=places&sensor=false" type="text/javascript"></script>--}}
    <script type="text/javascript" src="{{asset('assets/js/markerwithlabel_packed.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/piexif.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/fileinput.min.js')}}"></script>
{{--    <script type="text/javascript" src="{{asset('vendor/bootstrap-fileinput-master/js/fileinput.min.js')}}"></script>--}}

    <script type="text/javascript" src="{{asset('assets/js/custom-map.js')}}"></script>
{{--    <script type="text/javascript" src="{{asset('vendor/dropzone/dropzone.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('js/common.js')}}"></script>
    <script src="{{asset('vendor/summernote-develop/dist/summernote-bs4.js')}}" type="text/javascript"></script>

    <script>

        var map_lat = document.getElementById("latitude").value;
        var map_lon = document.getElementById("longitude").value;

        var _marker = $("#marker").val() == 'false' ? '../assets/img/marker.png' : '../../assets/img/marker.png';



{{--        var _marker = {{$modify == 0 ? '../assets/img/marker.png' : '../../assets/img/marker.png'}};--}}

        var _latitude = !!map_lat  ? map_lat : 14.5699;
        var _longitude = !!map_lon ? map_lon : 120.9858;



        google.maps.event.addDomListener(window, 'load', initSubmitMap(_latitude,_longitude));

        function initSubmitMap(_latitude,_longitude){
            var mapCenter = new google.maps.LatLng(_latitude,_longitude);
            var mapOptions = {
                zoom: 15,
                center: mapCenter,
                disableDefaultUI: false,
                //scrollwheel: false,
                styles: mapStyles
            };
            var mapElement = document.getElementById('submit-map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new MarkerWithLabel({
                position: mapCenter,
                map: map,
                icon: _marker,
                labelAnchor: new google.maps.Point(50, 0),
                draggable: true
            });
            $('#submit-map').removeClass('fade-map');
            google.maps.event.addListener(marker, "mouseup", function (event) {
                var latitude = this.position.lat();
                var longitude = this.position.lng();
                $('#latitude').val( this.position.lat() );
                $('#longitude').val( this.position.lng() );
            });

//      Autocomplete
//             var input = /** @type {HTMLInputElement} */( document.getElementById('address-map') );
            var input = /** @type {HTMLInputElement} */( document.getElementById('location_map') );
            var autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.bindTo('bounds', map);
            google.maps.event.addListener(autocomplete, 'place_changed', function() {
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    return;
                }
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);
                $('#latitude').val( marker.getPosition().lat() );
                $('#longitude').val( marker.getPosition().lng() );
                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }
            });

        }

        function success(position) {
            initSubmitMap(position.coords.latitude, position.coords.longitude);
            $('#latitude').val( position.coords.latitude );
            $('#longitude').val( position.coords.longitude );
        }

        $('.geo-location').on("click", function() {
            if (navigator.geolocation) {
                $('#submit-map').addClass('fade-map');
                navigator.geolocation.getCurrentPosition(success);
            } else {
                error('Geo Location is not supported');
            }
        });



        $("#add_features").click(function(){

            $("#property-featuresID").modal('show');

        });

        // $("#add_feature_button").click(function(e){
        //     e.preventDefault();
        //     alert($("#input_feature").val());

        // });

        // var idko;
        // function deleteMe(me){
        //     $(me).parent().parent().parent().parent().remove();
        // }


        $(document).ready(function(){

            // var btns = '<button type="button" class="kv-cust-btn btn btn-kv btn-secondary" title="Edit" onclick="deleteMe(this)" id="deleteme"><i class="glyphicon glyphicon-edit"></i></button>';

            // $('.kv-cust-btn').on('click', function() {
            //     // var btn = $(this), key = btn.data('key');
            //     // console.log(btn);
            //     alert("hello");
            // });


           // idko =  $("#file-upload").fileinput({
           //      overwriteInitial: false,
           //      // maxFileSize: 5000,
           //      // initialCaption: "The Moon and the Earth",
           //      showCaption: false,
           //      showRemove: false,
           //      showUpload: false,
           //      // maxFilePreviewSize: 10240,
           //      otherActionButtons: btns,
           //     browseClass: "btn btn-success",
           //     browseLabel: "Pick Image",
           //     allowedFileExtensions: ["jpg", "JPG", "jpeg", "JPEG","gif","ping","bmp"],
           //     allowedFileTypes: ["image"],
           //     // maxFileCount: 10,
           //     browseOnZoneClick:false,
           //     showCancel:false

           //     initialPreview: [
           //         // IMAGE DATA
           //         "https://kartik-v.github.io/bootstrap-fileinput-samples/samples/Desert.jpg",
           //         // IMAGE DATA
           //         "https://kartik-v.github.io/bootstrap-fileinput-samples/samples/Lighthouse.jpg",
           //         // VIDEO DATA
           //         "https://kartik-v.github.io/bootstrap-fileinput-samples/samples/small.mp4",
           //         // OFFICE WORD DATA
           //         'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/SampleDOCFile_100kb.doc',
           //         // OFFICE EXCEL DATA
           //         'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/SampleXLSFile_38kb.xls',
           //         // OFFICE POWERPOINT DATA
           //         'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/SamplePPTFile_500kb.ppt',
           //         // TIFF IMAGE FILE
           //         'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/multipage_tiff_example.tif',
           //         // ADOBE ILLUSTRATOR FILE
           //         'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/sample_ai.ai',
           //         // ENCAPSULATED POST SCRIPT FILE
           //         'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/sample_eps.eps',
           //         // PDF DATA
           //         'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/pdf-sample.pdf',
           //         // TEXT DATA
           //         "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut mauris ut libero fermentum feugiat eu et dui. Mauris condimentum rhoncus enim, sed semper neque vestibulum id. Nulla semper, turpis ut consequat imperdiet, enim turpis aliquet orci, eget venenatis elit sapien non ante. Aliquam neque ipsum, rhoncus id ipsum et, volutpat tincidunt augue. Maecenas dolor libero, gravida nec est at, commodo tempor massa. Sed id feugiat massa. Pellentesque at est eu ante aliquam viverra ac sed est.",
           //         // HTML DATA
           //         '<div class="text-center">' +
           //         '<h3>Lorem Ipsum</h3>' +
           //         '<p><em>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</em></p>' +
           //         '<h5><small>"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</small></h5>' +
           //         '<hr>' +
           //         '</div>' +
           //         '<div class="text-justify">' +
           //         '<p>' +
           //         'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis convallis dolor sed dignissim. Phasellus euismod mauris vel dolor maximus, sed fermentum mauris lobortis. Aliquam luctus, diam in luctus egestas, magna lacus luctus libero, scelerisque mattis ante dolor ac nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse varius orci ultricies massa euismod, at semper turpis fermentum. Quisque vitae augue vel lectus viverra facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla lacinia molestie diam, et volutpat nunc bibendum a. Cras a est sed augue commodo accumsan quis vitae nisi.' +
           //         '</p>' +
           //         '<p>' +
           //         'Nunc sit amet metus et dui aliquet feugiat. Praesent lobortis, ipsum et elementum dignissim, urna libero fringilla justo, at tincidunt nisi mi sed mi. Integer vel est porttitor, tempor tortor non, lobortis felis. Curabitur porttitor nisi et volutpat iaculis. Fusce nec feugiat lectus, vitae ullamcorper lorem. Ut ultrices nunc imperdiet placerat malesuada. Proin commodo erat in egestas maximus.' +
           //         '</p>' +
           //         '</div>'
           //     ],
           //     initialPreviewAsData: true, // identify if you are sending preview data only and not the raw markup
           //     initialPreviewFileType: 'image', // image is the default and can be overridden in config below
           //     initialPreviewDownloadUrl: 'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/{filename}', // includes the dynamic `filename` tag to be replaced for each config
           //     initialPreviewConfig: [
           //         {caption: "Desert.jpg", size: 827000, width: "120px", url: "/file-upload-batch/2", key: 1},
           //         {caption: "Lighthouse.jpg", size: 549000, width: "120px", url: "/file-upload-batch/2", key: 2},
           //         {
           //             type: "video",
           //             size: 375000,
           //             filetype: "video/mp4",
           //             caption: "KrajeeSample.mp4",
           //             url: "/file-upload-batch/2",
           //             key: 3,
           //             downloadUrl: 'https://kartik-v.github.io/bootstrap-fileinput-samples/samples/small.mp4', // override url
           //             filename: 'KrajeeSample.mp4' // override download filename
           //         },
           //         {type: "office", size: 102400, caption: "SampleDOCFile_100kb.doc", url: "/file-upload-batch/2", key: 4},
           //         {type: "office", size: 45056, caption: "SampleXLSFile_38kb.xls", url: "/file-upload-batch/2", key: 5},
           //         {type: "office", size: 512000, caption: "SamplePPTFile_500kb.ppt", url: "/file-upload-batch/2", key: 6},
           //         {type: "gdocs", size: 811008, caption: "multipage_tiff_example.tif", url: "/file-upload-batch/2", key: 7},
           //         {type: "gdocs", size: 375808, caption: "sample_ai.ai", url: "/file-upload-batch/2", key: 8},
           //         {type: "gdocs", size: 40960, caption: "sample_eps.eps", url: "/file-upload-batch/2", key: 9},
           //         {type: "pdf", size: 8000, caption: "About.pdf", url: "/file-upload-batch/2", key: 10, downloadUrl: false}, // disable download
           //         {type: "text", size: 1430, caption: "LoremIpsum.txt", url: "/file-upload-batch/2", key: 11, downloadUrl: false},  // disable download
           //         {type: "html", size: 3550, caption: "LoremIpsum.html", url: "/file-upload-batch/2", key: 12, downloadUrl: false}  // disable download
           //     ],
           //     purifyHtml: true, // this by default purifies HTML data for preview
           //     uploadExtraData: {
           //         img_key: "1000",
           //         img_keywords: "happy, places"
           //     }
           // }).on('filesorted', function(e, params) {
           //     console.log('File sorted params', params);
           // }).on('fileuploaded', function(e, params) {
           //     console.log('File uploaded params', params);






            // });



            $("#add_feature_button").click(function () {

                $.ajaxSetup({
                   headers:{
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
                });
                $.ajax({
                    url:"{{url('/addFeatures')}}",
                    method:'post',
                    data:{
                        name: $("#input_feature").val(),
                        created_by:"{{Auth::user()->id}}",
                    },
                    success: function(result) {


                        if(!result.errors)
                        {
                            $('#property-featuresID').modal('hide');
                            $("#ul_features").append('<li><div class="checkbox"><label><input type="checkbox" checked name="property_features[]" value="' + result.last_insert + '">' + result.name + '</label></div></li>');
                            $('input').iCheck();
                            $("#input_feature").val('');
                        }
                    },
                });
            });




        });






        registerSummernote('.summernote', 'Describe your property', 3090, function(max) {
            $('#maxContentPost').text(max);
        });

        function registerSummernote(element, placeholder1, max, callbackMax) {
            $(element).summernote({
                placeholder:placeholder1,
                fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New'],
                toolbar: [
                    ['style', ['style']],
                    ['basic', ['fontsize']],
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height',['height', 'undo', 'redo']]
                ],
                callbacks: {
                    onKeydown: function(e) {
                        var t = e.currentTarget.innerText;
                        if (t.trim().length >= max) {
                            //delete key
                            if (e.keyCode != 8)
                                e.preventDefault();
                            // add other keys ...
                        }
                    },
                    onKeyup: function(e) {
                        var t = e.currentTarget.innerText;
                        if (typeof callbackMax == 'function') {
                            callbackMax(max - t.trim().length);
                        }
                    },
                    onPaste: function(e) {
                        var t = e.currentTarget.innerText;
                        var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
                        e.preventDefault();
                        var all = t + bufferText;
                        document.execCommand('insertText', false, all.trim().substring(0, 3090));
                        if (typeof callbackMax == 'function') {
                            callbackMax(max - t.length);
                        }
                    }
                },
                // height: 250,
                minHeight: 150,
                maxHeight: 300
            });
        }
        $('.note-editable').css('lineHeight','.8');

        $('#description').summernote('code', "{!! $modify == 1 ? $unit->Description : '' !!}");


        // Dropzone.options.myAwesomeDropzone = {
        //     paramName: "file", // The name that will be used to transfer the file
        //     maxFilesize: 2, // MB
        //     accept: function(file, done) {
        //         if (file.name == "justinbieber.jpg") {
        //             done("Naha, you don't.");
        //         }
        //         else { done(); }
        //     }
        // };








    </script>







@endsection



