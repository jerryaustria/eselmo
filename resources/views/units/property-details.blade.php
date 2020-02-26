@extends('layouts.app')
@extends('layouts.header')
@extends('layouts.navigation')
@extends('layouts.footer')

@section('headerlink')
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}" type="text/css">
@endsection

@section('title')
    <span>{{$unit->title}}</span>
@endsection

@section('body')
    <body class="page-sub-page page-property-detail" id="page-top">
@endsection


@section('content')
    <!-- Page Content -->
    <div id="page-content">
        <!-- Breadcrumb -->
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Property Detail</li>
            </ol>
        </div>
        <!-- end Breadcrumb -->

        <div class="container">
            <div class="row">
                <!-- Property Detail Content -->
                <div class="col-md-9 col-sm-9">
                    <section id="property-detail">
                        <header class="property-title">
                            <h1>{{$unit->Title}}</h1>
                            <figure>{{$unit->Address}}</figure>
                            <span class="actions">
                                <!--<a href="#" class="fa fa-print"></a>-->
                                <a href="#" class="bookmark" data-bookmark-state="empty"><span class="title-add">Add to bookmark</span><span class="title-added">Added</span></a>
                            </span>
                        </header>
                        <section id="property-gallery">
                            <div class="owl-carousel property-carousel">

                                @isset($photos)
                                    @foreach($photos as $photo)
                                        <div class="property-slide">
                                            <a href="{{$photo->path}}" class="image-popup">
                                                <div class="overlay"><h3>Front View</h3></div>
                                                <img alt="" src="{{$photo->path}}">
                                            </a>
                                        </div><!-- /.property-slide -->
                                    @endforeach
                                @endisset

                            </div><!-- /.property-carousel -->

                        </section>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <section id="quick-summary" class="clearfix">
                                                            <aside id="edit-search">
                                                                <header><h3>Search Properties</h3></header>
                                                                <form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">
                                                                    <div class="form-group">
                                                                        <select name="type">
                                                                            <option value="">Status</option>
                                                                            <option value="1">Rent</option>
                                                                            <option value="2">Sale</option>
                                                                        </select>
                                                                    </div><!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <select name="country">
                                                                            <option value="">Country</option>
                                                                            <option value="1">France</option>
                                                                            <option value="2">Great Britain</option>
                                                                            <option value="3">Spain</option>
                                                                            <option value="4">Russia</option>
                                                                            <option value="5">United States</option>
                                                                        </select>
                                                                    </div><!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <select name="city">
                                                                            <option value="">City</option>
                                                                            <option value="1">New York</option>
                                                                            <option value="2">Los Angeles</option>
                                                                            <option value="3">Chicago</option>
                                                                            <option value="4">Houston</option>
                                                                            <option value="5">Philadelphia</option>
                                                                        </select>
                                                                    </div><!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <select name="district">
                                                                            <option value="">District</option>
                                                                            <option value="1">Manhattan</option>
                                                                            <option value="2">The Bronx</option>
                                                                            <option value="3">Brooklyn</option>
                                                                            <option value="4">Queens</option>
                                                                            <option value="5">Staten Island</option>
                                                                        </select>
                                                                    </div><!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <select name="property-type">
                                                                            <option value="">Property Type</option>
                                                                            <option value="1">Apartment</option>
                                                                            <option value="2">Condominium</option>
                                                                            <option value="3">Cottage</option>
                                                                            <option value="4">Flat</option>
                                                                            <option value="5">House</option>
                                                                        </select>
                                                                    </div><!-- /.form-group -->
                                                                    <div class="form-group">
                                                                        <div class="price-range">
                                                                            <input id="price-input" type="text" name="price" value="1000;299000">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <button type="submit" class="btn btn-default">Search Now</button>
                                                                    </div><!-- /.form-group -->
                                                                </form><!-- /#form-map -->
                                                            </aside>



{{--                                    <header><h2>Quick Summary</h2></header>--}}
{{--                                    <dl>--}}
{{--                                        <dt>Location</dt>--}}
{{--                                        <dd>{{$unit->Cities}}</dd>--}}
{{--                                        <dt>Price</dt>--}}
{{--                                        <dd><span class="tag price">Php {{$unit->price}}</span></dd>--}}
{{--                                        <dt>Property Type:</dt>--}}
{{--                                        <dd>{{$unit->property_type}}</dd>--}}
{{--                                        <dt>Status:</dt>--}}
{{--                                        <dd>{{$unit->status}}</dd>--}}
{{--                                        <dt>Area:</dt>--}}
{{--                                        <dd>{{$unit->area}} m<sup>2</sup></dd>--}}
{{--                                        <dt>Beds:</dt>--}}
{{--                                        <dd>{{$unit->beds}}</dd>--}}
{{--                                        <dt>Baths:</dt>--}}
{{--                                        <dd>{{$unit->baths}}</dd>--}}
{{--                                        <dt>Garages:</dt>--}}
{{--                                        <dd>{{$unit->garages}}</dd>--}}

{{--                                        @if($unit->israting)--}}
{{--                                            <dt>Rating:</dt>--}}
{{--                                            <dd><div class="rating rating-overall" data-score="4"></div></dd>--}}
{{--                                        @endif--}}

{{--                                    </dl>--}}
                                </section><!-- /#quick-summary -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-8 col-sm-12">
                                <section id="description">
                                    <header><h2>Property Description</h2></header>
                                    {{$unit->Description}}
                                </section><!-- /#description -->
                                <section id="property-features">
                                    <header><h2>Property Features</h2></header>
                                    <ul class="list-unstyled property-features-list">


                                        @isset($myFeatures)
                                            @foreach($myFeatures as $features)

                                                <li>{{$features->name}}</li>
{{--                                                <li>Fireplace or fire pit</li>--}}
{{--                                                <li>Outdoor Kitchen</li>--}}
{{--                                                <li>Tennis Courts</li>--}}
{{--                                                <li>Trees and Landscaping</li>--}}
{{--                                                <li>Sun Room</li>--}}
{{--                                                <li>Family Room</li>--}}
{{--                                                <li>Concrete Flooring</li>--}}
                                            @endforeach
                                        @endisset

                                    </ul>
                                </section><!-- /#property-features -->

                                @if($flrPlan)
                                    <section id="floor-plans">
                                        <div class="floor-plans">
                                            <header><h2>Floor Plans</h2></header>

                                            @foreach($flrPlan as $plan)
                                                <a href="{{$plan}}" class="image-popup"><img alt="" src="{{$plan}}" width="250"  class="mx-auto"></a>
                                            @endforeach
                                        </div>
                                    </section><!-- /#floor-plans -->
                                @endif
                                <section id="property-map">
                                    <header><h2>Map</h2></header>
                                    <input type="hidden" id="map_lat" value="{{$unit->map_lat}}">
                                    <input type="hidden" id="map_lon" value="{{$unit->map_lon}}">
                                    <input type="hidden" id="map_image" value="">

                                    <div class="property-detail-map-wrapper">
                                        <div class="property-detail-map" id="property-detail-map"></div>
                                    </div>
                                </section><!-- /#property-map -->

                                @if($unit->israting)
                                    <section id="property-rating">
                                        <header><h2>Rating</h2></header>
                                        <div class="clearfix">
                                            <aside>
                                                <header>Your Rating</header>
                                                <div class="rating rating-user">
                                                    <div class="inner"></div>
                                                </div>
                                            </aside>
                                            <figure>
                                                <header>Overall Rating</header>
                                                <div class="rating rating-overall" data-score="4"></div>
                                            </figure>
                                        </div>
                                        <div class="rating-form">
                                            <header>Thank you! Please describe your rating</header>
                                            <form role="form" id="form-rating" method="post"  class="clearfix">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="form-rating-name">Your Name<em>*</em></label>
                                                            <input type="text" class="form-control" id="form-rating-name" name="form-rating-name" required>
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.col-md-6 -->
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="form-rating-email">Your Email<em>*</em></label>
                                                            <input type="email" class="form-control" id="form-rating-email" name="form-rating-email" required>
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.col-md-6 -->
                                                </div><!-- /.row -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="form-rating-message">Your Message<em>*</em></label>
                                                            <textarea class="form-control" id="form-rating-message" rows="6" name="form-rating-message" required></textarea>
                                                        </div><!-- /.form-group -->
                                                    </div><!-- /.col-md-12 -->
                                                </div><!-- /.row -->
                                                <div class="form-group">
                                                    <button type="submit" class="btn pull-right btn-default" id="form-rating-submit">Send a Message</button>
                                                </div><!-- /.form-group -->
                                                <div id="form-rating-status"></div>
                                            </form><!-- /#form-contact -->
                                        </div><!-- /.rating-form -->
                                    </section><!-- /#property-rating -->
                                @endif

                                @if($unit->video)

                                    <section id="video-presentation">
                                        <header><h2>Video Presentation</h2></header>
    {{--                                    <div class="video">--}}
    {{--                                        <iframe src="//player.vimeo.com/video/34741214?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="500" height="281" ></iframe>--}}
    {{--                                    </div>--}}

                                        <div class="video">

                                            {!! $unit->getVideoHtmlAttribute() !!}
                                        </div>


                                    </section><!-- /#video-presentation -->
                                @endif


                            </div><!-- /.col-md-8 -->
                            <div class="col-md-12 col-sm-12">
                                <section id="contact-agent">
                                    <header><h2>Quick Contact</h2></header>
                                    <div class="row">
                                        <section class="agent-form">
                                            <div class="col-md-7 col-sm-12">
                                                <aside class="agent-info clearfix">
                                                    <figure><a href="agent-detail.html"><img alt="" src="{{$unit->user->userPhoto->path ?? '../assets/img/agent-01.jpg'}}"></a></figure>
                                                    <div class="agent-contact-info">
                                                        <h3>{{$unit->user->name}}</h3>
                                                        <p>
                                                            {{$unit->user->about_me}}

                                                        </p>
                                                        <dl>
                                                            <dt>Phone:</dt>
                                                            <dd>{{$unit->user->phone ?? 'None'}}</dd>
                                                            <dt>Mobile:</dt>
                                                            <dd>{{$unit->user->mobile ?? 'N/A' }}</dd>
                                                            <dt>Email:</dt>
                                                            <dd><a href="mailto:{{$unit->user->email}}">{{$unit->user->email}}</a></dd>
                                                            <dt>Skype:</dt>
                                                            <dd>{{$unit->user->skype ?? 'None'}}</dd>
                                                            <dt>Facebook:</dt>
                                                            <dd><a href="{{$unit->user->facebook ?? 'None'}}" target="_blank">{{$unit->user->name}}</a></dd>
                                                        </dl>
                                                        <hr>
                                                        <a href="agent-detail.html" class="link-arrow">Full Profile</a>
                                                    </div>
                                                </aside><!-- /.agent-info -->
                                            </div><!-- /.col-md-7 -->
                                            <div class="col-md-5 col-sm-12">
                                                <div class="agent-form">

{{--  Email FROM                                                  --}}
                                                    <form role="form" id="form-contact-agent" method="GET" action="/quick-contact"  class="clearfix">
                                                        {{csrf_field()}}
                                                        <input type="hidden" value="{{$unit->id}}" name="unitID" />
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-name">Your Name<em>*</em></label>
                                                            <input type="text" class="form-control" id="inquiry_name" name="inquiry_name" required {{Auth::check() ? 'value=' . Auth::user()->name . ' readonly=readonly' : ''}}>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-email">Your Email<em>*</em></label>
                                                            <input type="email" class="form-control" id="inquiry_email" name="inquiry_email" required {{Auth::check() ? 'value=' . Auth::user()->email . ' readonly=readonly' : ''}}>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <label for="form-contact-agent-message">Your Message<em>*</em></label>
                                                            <textarea class="form-control" id="inquiry_message" rows="2" name="inquiry_message" required></textarea>
                                                        </div><!-- /.form-group -->
                                                        <div class="form-group">
                                                            <button type="submit" class="btn pull-right btn-default" id="form-contact-agent-submit">Send a Message</button>
                                                        </div><!-- /.form-group -->
                                                        <div id="form-contact-agent-status"></div>
                                                    </form><!-- /#form-contact -->

{{-- end Email FROM                                                  --}}

                                                </div><!-- /.agent-form -->
                                            </div><!-- /.col-md-5 -->
                                        </section><!-- /.agent-form -->
                                    </div><!-- /.row -->
                                </section><!-- /#contact-agent -->


                                @isset($owner_units)


                                <hr class="thick">

                                <section id="similar-properties">
                                    <header><h2 class="no-border">Similar Properties</h2></header>
                                    <div class=" owl-carousel similarProperty">
                                    @foreach($owner_units as $similar_unit)

                                        <div class="col-md-12 ">
                                            <div class="property">
                                                <a href="{{route('Units.show',$similar_unit->slug ? $similar_unit->slug : $similar_unit->id)}}">
                                                    <div class="property-image">
                                                        <img alt="" src="{{$similar_unit->unitphoto->path ?? '../assets/img/properties/property-06.jpg'}}">
                                                    </div>
                                                    <div class="overlay">
                                                        <div class="info">
                                                            <div class="tag price">{{$similar_unit->price}}</div>
                                                            <h3>{{$similar_unit->Title}}</h3>
                                                            <figure>{{$similar_unit->Address}}</figure>
                                                        </div>
                                                        <ul class="additional-info">
                                                            <li>
                                                                <header>Area:</header>
                                                                <figure>{{$similar_unit->area}}m<sup>2</sup></figure>
                                                            </li>
                                                            <li>
                                                                <header>Beds:</header>
                                                                <figure>{{$similar_unit->beds}}</figure>
                                                            </li>
                                                            <li>
                                                                <header>Baths:</header>
                                                                <figure>{{$similar_unit->baths}}</figure>
                                                            </li>
                                                            <li>
                                                                <header>Garages:</header>
                                                                <figure>{{$similar_unit->garages}}</figure>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </a>
                                            </div><!-- /.property -->
                                        </div><!-- /.col-md-3 -->



                                    @endforeach





                                    </div><!-- /.row-->
                                </section><!-- /#similar-properties -->

                                @endisset


                                <hr class="thick">
                                <section id="comments">
                                    <header><h2 class="no-border">Comments</h2></header>
                                    <ul class="comments">
                                        <li class="comment">
                                            <figure>
                                                <div class="image">
                                                    <img alt="" src="assets/img/client-01.jpg">
                                                </div>
                                            </figure>
                                            <div class="comment-wrapper">
                                                <div class="name pull-left">Catherine Brown</div>
                                                <span class="date pull-right"><span class="fa fa-calendar"></span>12.05.2014</span>
                                                <div class="rating rating-individual" data-score="4"></div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur,
                                                    augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit
                                                    mauris imperdiet vel. Nulla et massa metus. Nam porttitor quam eget ante elementum consectetur. Aenean ac nisl
                                                    et nulla placerat suscipit eu a mauris. Curabitur quis augue condimentum, varius mi in, ultricies velit.
                                                    Suspendisse potenti.
                                                </p>
                                                <a href="#" class="reply"><span class="fa fa-reply"></span>Reply</a>
                                                <hr>
                                            </div>
                                        </li>
                                        <li>
                                            <ul class="comments-child">
                                                <li class="comment">
                                                    <figure>
                                                        <div class="image">
                                                            <img alt="" src="assets/img/agent-01.jpg">
                                                        </div>
                                                    </figure>
                                                    <div class="comment-wrapper">
                                                        <div class="name">John Doe</div>
                                                        <span class="date"><span class="fa fa-calendar"></span>24.06.2014</span>
                                                        <div class="rating rating-individual" data-score="3"></div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vestibulum, sem ut sollicitudin consectetur,
                                                            augue diam ornare massa, ac vehicula leo turpis eget purus. Nunc pellentesque vestibulum mauris, eget suscipit
                                                            mauris.
                                                        </p>
                                                        <a href="#" class="reply"><span class="fa fa-reply"></span>Reply</a>
                                                        <hr>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="comment">
                                            <figure>
                                                <div class="image">
                                                    <img alt="" src="assets/img/user-02.jpg">
                                                </div>
                                            </figure>
                                            <div class="comment-wrapper">
                                                <div class="name">John Doe</div>
                                                <span class="date"><span class="fa fa-calendar"></span>08.05.2014</span>
                                                <div class="rating rating-individual" data-score="5"></div>
                                                <p>Quisque iaculis neque at dui cursus posuere. Sed tristique pharetra orci, eu malesuada ante tempus nec.
                                                    Phasellus enim odio, facilisis et ante vel, tempor congue sapien. Praesent eget ligula
                                                    eu libero cursus facilisis vel non arcu. Sed vitae quam enim.
                                                </p>
                                                <a href="#" class="reply"><span class="fa fa-reply"></span>Reply</a>
                                                <hr>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </section><!-- /#property-detail -->
                </div><!-- /.col-md-9 -->
                <!-- end Property Detail Content -->

                <!-- sidebar -->
                <div class="col-md-3 col-sm-3">
                    <section id="sidebar">

{{--  MOIDIFCATION DESIGN MOVE THE QUICK SUMMARYinto top right most--}}

                        <section id="quick-summary" class="clearfix">
                            <header><h2>Quick Summary</h2></header>
                            <dl>
                                <dt>Location</dt>
                                <dd>{{$unit->Cities}}</dd>
                                <dt>Price</dt>
                                <dd><span class="tag price">Php {{$unit->price}}</span></dd>
                                <dt>Property Type:</dt>
                                <dd>{{$unit->property_type}}</dd>
                                <dt>Status:</dt>
                                <dd>{{$unit->status}}</dd>
                                <dt>Area:</dt>
                                <dd>{{$unit->area}} m<sup>2</sup></dd>
                                <dt>Beds:</dt>
                                <dd>{{$unit->beds}}</dd>
                                <dt>Baths:</dt>
                                <dd>{{$unit->baths}}</dd>
                                <dt>Garages:</dt>
                                <dd>{{$unit->garages}}</dd>

                                @if($unit->israting)
                                    <dt>Rating:</dt>
                                    <dd><div class="rating rating-overall" data-score="4"></div></dd>
                                @endif

                            </dl>
                        </section>

                        <!-- /#quick-summary -->


{{--  THIS IS THE END OF MODIFICATION FEB 26 2020 MOVING QUICK SUMMARY INTO TOP                       --}}


{{--                        <aside id="edit-search">--}}
{{--                            <header><h3>Search Properties</h3></header>--}}
{{--                            <form role="form" id="form-sidebar" class="form-search" action="properties-listing.html">--}}
{{--                                <div class="form-group">--}}
{{--                                    <select name="type">--}}
{{--                                        <option value="">Status</option>--}}
{{--                                        <option value="1">Rent</option>--}}
{{--                                        <option value="2">Sale</option>--}}
{{--                                    </select>--}}
{{--                                </div><!-- /.form-group -->--}}
{{--                                <div class="form-group">--}}
{{--                                    <select name="country">--}}
{{--                                        <option value="">Country</option>--}}
{{--                                        <option value="1">France</option>--}}
{{--                                        <option value="2">Great Britain</option>--}}
{{--                                        <option value="3">Spain</option>--}}
{{--                                        <option value="4">Russia</option>--}}
{{--                                        <option value="5">United States</option>--}}
{{--                                    </select>--}}
{{--                                </div><!-- /.form-group -->--}}
{{--                                <div class="form-group">--}}
{{--                                    <select name="city">--}}
{{--                                        <option value="">City</option>--}}
{{--                                        <option value="1">New York</option>--}}
{{--                                        <option value="2">Los Angeles</option>--}}
{{--                                        <option value="3">Chicago</option>--}}
{{--                                        <option value="4">Houston</option>--}}
{{--                                        <option value="5">Philadelphia</option>--}}
{{--                                    </select>--}}
{{--                                </div><!-- /.form-group -->--}}
{{--                                <div class="form-group">--}}
{{--                                    <select name="district">--}}
{{--                                        <option value="">District</option>--}}
{{--                                        <option value="1">Manhattan</option>--}}
{{--                                        <option value="2">The Bronx</option>--}}
{{--                                        <option value="3">Brooklyn</option>--}}
{{--                                        <option value="4">Queens</option>--}}
{{--                                        <option value="5">Staten Island</option>--}}
{{--                                    </select>--}}
{{--                                </div><!-- /.form-group -->--}}
{{--                                <div class="form-group">--}}
{{--                                    <select name="property-type">--}}
{{--                                        <option value="">Property Type</option>--}}
{{--                                        <option value="1">Apartment</option>--}}
{{--                                        <option value="2">Condominium</option>--}}
{{--                                        <option value="3">Cottage</option>--}}
{{--                                        <option value="4">Flat</option>--}}
{{--                                        <option value="5">House</option>--}}
{{--                                    </select>--}}
{{--                                </div><!-- /.form-group -->--}}
{{--                                <div class="form-group">--}}
{{--                                    <div class="price-range">--}}
{{--                                        <input id="price-input" type="text" name="price" value="1000;299000">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <button type="submit" class="btn btn-default">Search Now</button>--}}
{{--                                </div><!-- /.form-group -->--}}
{{--                            </form><!-- /#form-map -->--}}
{{--                        </aside>--}}



                        <!-- /#edit-search -->




                        <aside id="featured-properties">
                            <header><h3>Featured Properties</h3></header>
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-06.jpg">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>2186 Rinehart Road</h4></a>
                                    <figure>Doral, FL 33178 </figure>
                                    <div class="tag price">$ 72,000</div>
                                </div>
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-09.jpg">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>2479 Murphy Court</h4></a>
                                    <figure>Minneapolis, MN 55402</figure>
                                    <div class="tag price">$ 36,000</div>
                                </div>
                            </div><!-- /.property -->
                            <div class="property small">
                                <a href="property-detail.html">
                                    <div class="property-image">
                                        <img alt="" src="assets/img/properties/property-03.jpg">
                                    </div>
                                </a>
                                <div class="info">
                                    <a href="property-detail.html"><h4>1949 Tennessee Avenue</h4></a>
                                    <figure>Minneapolis, MN 55402</figure>
                                    <div class="tag price">$ 128,600</div>
                                </div>
                            </div><!-- /.property -->
                        </aside><!-- /#featured-properties -->
                        <aside id="our-guides">
                            <header><h3>Our Guides</h3></header>
                            <a href="#" class="universal-button">
                                <figure class="fa fa-home"></figure>
                                <span>Buying Guide</span>
                                <span class="arrow fa fa-angle-right"></span>
                            </a><!-- /.universal-button -->
                            <a href="#" class="universal-button">
                                <figure class="fa fa-umbrella"></figure>
                                <span>Right Insurance for You</span>
                                <span class="arrow fa fa-angle-right"></span>
                            </a><!-- /.universal-button -->
                        </aside><!-- /#our-guide -->
                    </section><!-- /#sidebar -->
                </div><!-- /.col-md-3 -->
                <!-- end Sidebar -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end Page Content -->
@endsection

@section('footer_script')
{{--    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>--}}
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAfyW_Jj9YpTxwDGfRe8FCbgohLb_321Yc&callback=initMap&sensor=false"
        type="text/javascript"></script>



    <script type="text/javascript" src="{{asset('assets/js/markerwithlabel_packed.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/infobox.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.raty.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.fitvids.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/custom-map.js')}}"></script>
    <!--[if gt IE 8]>
    <script type="text/javascript" src="{{asset('assets/js/ie.js')}}"></script>
    <![endif]-->


    <script type="text/javascript">


        var propertyId = document.getElementById("unitID");
        var map_lat = document.getElementById("map_lat").value;
        var map_lang = document.getElementById("map_lon").value;


        alert("{{$unit->propertyType->photo}}");

        // google.maps.event.addDomListener(window, 'load', initMap(propertyId));

        $(window).load(function(){
            initializeOwl(false);



            var subtractPosition = 0;
            var mapWrapper = $('#property-detail-map.float');


            if (document.documentElement.clientWidth > 1200) {
                subtractPosition = 0.13;
            }
            if (document.documentElement.clientWidth < 1199) {
                subtractPosition = 0.006;
            }
            if (document.documentElement.clientWidth < 979) {
                subtractPosition = 0.001;
            }
            if (document.documentElement.clientWidth < 767) {
                subtractPosition = 0;
            }


            // var mapCenter = new google.maps.LatLng(locations[propertyId][3],locations[propertyId][4]);
            var mapCenter = new google.maps.LatLng(map_lat,map_lang);

            if ( $("#property-detail-map").hasClass("float") ) {

                mapCenter = new google.maps.LatLng(map_lat,map_lang - subtractPosition);
                mapWrapper.css('width', mapWrapper.width() + mapWrapper.offset().left )
            }

            var mapOptions = {
                zoom: 15,
                center: mapCenter,
                disableDefaultUI: false,
                scrollwheel: false,
                styles: mapStyles
            };
            var mapElement = document.getElementById('property-detail-map');
            var map = new google.maps.Map(mapElement, mapOptions);

            var pictureLabel = document.createElement("img");
            // pictureLabel.src = locations[propertyId][7];
            pictureLabel.src = "../assets/img/property-types/{{$unit->propertyType->photo}}";

            var markerPosition = new google.maps.LatLng(map_lat,map_lang);
            var marker = new MarkerWithLabel({
                position: markerPosition,
                map: map,
                icon: '../assets/img/marker.png',
                labelContent: pictureLabel,
                labelAnchor: new google.maps.Point(50, 0),
                labelClass: "marker-style"
            });
        // });



    //    end of getting map




        });














    </script>

    <script>

        $(document).ready(function(){
            $(".similarProperty").owlCarousel({
                loop:true,
                margin:0,
                responsiveClass:true,
                responsive:{
                    // 0:{
                    //     items:1,
                    //     nav:false
                    // },
                    // 600:{
                    //     items:3,
                    //     nav:false
                    // },
                    // 1000:{
                    //     items:5,
                    //     nav:false,
                    //     loop:false
                    // }
                }
            });
        });

    </script>

@endsection