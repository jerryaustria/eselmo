@extends('layouts.app')
@extends('layouts.header')
@extends('layouts.navigation')
@extends('layouts.footer')

@section('headerlink')
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/fileinput.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfyW_Jj9YpTxwDGfRe8FCbgohLb_321Yc&libraries=places&sensor=false" type="text/javascript"></script>
@endsection

@section('style')

@endsection

@section('body')
    <body class="page-sub-page page-submit" id="page-top">
@endsection

@section('headerscript')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.9/themes/fa/theme.js"></script>



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
{{--            <form role="form" id="form-submit" class="form-submit" action="{{route('postproperty')}}" method="post">--}}
{{--                {{var_dump($errors)}}--}}


                {!! Form::open(['method'=>'POST', 'action'=>'PropertyController@store','id'=>'form-submit', 'role'=>'form','files'=>true]) !!}


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
                                                {!! Form::text('Title',null,['class'=>'form-control error', 'id'=>'submit-title', 'required']) !!}

                                                <small class="error">{{$errors->first('Title')}}</small>

                                            </div><!-- /.form-group -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">

                                                {!! Form::label('price','Price') !!}
                                                <div class="input-group">
                                                    <span class="input-group-addon">P</span>
{{--                                                    <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}" pattern="^\d*(\.\d{2}$)?" required>--}}


                                                        {!! Form::text('price',null ,['class'=>'form-control error', 'id'=>'price', 'pattern'=>'^\d*(\.\d{2}$)?', 'required']) !!}

                                                    <small class="error">{{$errors->first('price')}}</small>
                                                </div>
                                            </div><!-- /.form-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        {!! Form::label('Description','Description') !!}
{{--                                        <textarea class="form-control" id="submit-description" rows="8" name="Description" value="{{old('Description')}}" required>{{old('--}}
{{--                                        Description')}}</textarea>--}}



                                            {!! Form::textarea('Description',old('Description'),['class'=>'form-control', 'required']) !!}

{{--                                        @include('includes.tinyeditor')--}}



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
                                                        <label for="local_address">Address</label>
                                                        <input type="text" class="form-control" id="local_address" value="{{old('local_address')}}" name="local_address">
                                                        <small class="error">{{$errors->first('Address')}}</small>
                                                    </div><!-- /.form-group -->

                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">


                                                            <div class="form-group">
                                                                <label for="property-city">City</label>

                                                                <input list="property_city" name="city" value="{{old('city')}}" type="text">
                                                                <datalist id="property_city" >
                                                                    @foreach($cities as $city)
                                                                        <option value="{{$city->name}}">{{$city->name}}</option>
                                                                    @endforeach
                                                                </datalist>
                                                                <small class="error">{{$errors->first('city')}}</small>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="property-zipcode">Zip Code</label>

                                                                <input id="property_zipcode" name="zipcode" value="{{old('zipcode')}}" type="number">
                                                                <small class="error">{{$errors->first('zipcode')}}</small>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->


                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="submit-property-type">Property Type</label>
                                                                <select name="property_type" id="submit-property-type">
                                                                    @foreach($property_type as $key=>$propertyType)
                                                                        <option value="{{$key}}">  {{$propertyType}}</option>
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
                                                                        <option value="{{$key}}">{{$stat}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="beds">Beds</label>
                                                                <input type="text" class="form-control" id="submit-Beds" name="beds" pattern="\d*" value="{{old('beds')}}" required>
                                                                <small class="error">{{$errors->first('beds')}}</small>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="baths">Baths</label>
                                                                <input type="text" class="form-control" id="submit-Baths" name="baths" value="{{old('baths')}}" pattern="\d*"  required>
                                                                <small class="error">{{$errors->first('baths')}}</small>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="area">Area</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control error" id="submit-area" name="area" pattern="\d*" value="{{old('area')}}" required>
                                                                    <span class="input-group-addon">m<sup>2</sup></span>
                                                                    <small class="error">{{$errors->first('area')}}</small>
                                                                </div>
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                        <div class="col-md-6 col-sm-6">
                                                            <div class="form-group">
                                                                <label for="garages">Garages</label>
                                                                <input type="text" class="form-control" id="submit-garages" name="garages" pattern="\d*" value="{{old('garages')}}">
                                                            </div><!-- /.form-group -->
                                                        </div><!-- /.col-md-6 -->
                                                    </div><!-- /.row -->
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="israting" {{ old('israting') ? 'checked' : '' }} value='1'>Allow user rating <i class="fa fa-question-circle tool-tip"  data-toggle="tooltip" data-placement="right" title="Users can give you a stars rating which is displayed in property detail"></i>
                                                        </label>
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
                                                        <label for="Address">location Map</label>
                                                        <input type="text" class="form-control" id="Address" value="{{old('Address')}}" name="Address">
                                                        <small class="error">{{$errors->first('Address')}}</small>
                                                    </div><!-- /.form-group -->
                                                    <label for="address-map">Or drag the marker to property position</label>
                                                    <div id="submit-map"></div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="latitude" value="{{old('map_lat')}}" name="map_lat" readonly>
                                                            </div><!-- /.form-group -->
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" id="longitude" name="map_lon" value="{{old('map_lon')}}" readonly>
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

                                                {!! Form::file('file[]',['class'=>'file','data-show-upload'=>'false','data-show-caption'=>'false','data-show-caption'=>'false','data-show-remove'=>'false','accept'=>'image/jpeg,image/png','data-browse-class'=>'btn btn-default','data-browse-label'=>'Browse Images','multiple'=>true,'id'=>'file-upload']) !!}

{{--                                            <input id="file-upload" type="file" class="file" multiple="true" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Browse Images">--}}
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
                                        <label for="video">Video:</label>
                                        <input type="text" class="form-control" id="video" value="{{old('video')}}" name="video">
                                        <figure>Add link here</figure>
                                        <small class="error">{{$errors->first('video')}}</small>
                                    </div><!-- /.form-group -->
                                </section>

                                <section id="property-features" class="block">
                                    <section>
                                        <header><h2>Property Features</h2> <span id="add_features"><i class="material-icons">add_circle_outline</i>Add Feature</span></header>
                                        <ul class="submit-features" id="ul_features">
                                            @foreach($property_features as $feature)
                                                <li><div class="checkbox"><label><input type="checkbox" name="property_features[]" value="{{$feature->id}}">{{$feature->name}}</label></div></li>
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
                                    <button type="submit" class="btn btn-default large">Proceed to Payment</button>
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
    <script type="text/javascript" src="{{asset('assets/js/fileinput.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/custom-map.js')}}"></script>
{{--    <script type="text/javascript" src="{{asset('assets/js/markerwithlabel_packed.js')}}"></script>--}}
    <script type="text/javascript" src="{{asset('js/common.js')}}"></script>


    <script>
        var _latitude = 14.5699;
        var _longitude = 120.9858;

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
                icon: '../assets/img/marker.png',
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
            var input = /** @type {HTMLInputElement} */( document.getElementById('Address') );
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

        $(document).ready(function(){

            $("#input-id").fileinput({
                maxFileCount: 5
            });

            $("#add_feature_button").click(function () {

                $.ajaxSetup({
                   headers:{
                       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
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

                        // alert(result.last_insert);

                        if(!result.errors)
                        {
                            $('#property-featuresID').modal('hide');
                            $("#ul_features").append('<li><div class="checkbox"><label><input type="checkbox" checked name="property_features[]" value="' + result.last_insert + '">' + result.name + '</label></div></li>');
                        }
                    },
                });
            });



            var url1 = 'http://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/FullMoon2010.jpg/631px-FullMoon2010.jpg',
                url2 = 'http://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Earth_Eastern_Hemisphere.jpg/600px-Earth_Eastern_Hemisphere.jpg';
            $("#input-id").fileinput({
                initialPreview: [url1, url2],
                initialPreviewAsData: true,
                initialPreviewConfig: [
                    {caption: "Moon.jpg", downloadUrl: url1, size: 930321, width: "120px", key: 1},
                    {caption: "Earth.jpg", downloadUrl: url2, size: 1218822, width: "120px", key: 2}
                ],
                deleteUrl: "/site/file-delete",
                overwriteInitial: true,
                maxFileSize: 100,
                initialCaption: "The Moon and the Earth"
            });










        });







    </script>
@endsection



