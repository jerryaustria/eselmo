@section('right-search')
    <div class="search-box-wrapper">
        <div class="search-box-inner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-md-offset-9 col-sm-4 col-sm-offset-8">
                        <div class="search-box map">
                            <form role="form" id="form-map" class="form-map form-search">
                                <h2>Search Your Property</h2>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="search-box-property-id" placeholder="Property ID">
                                </div>
                                <div class="form-group">
                                    <select name="type">
                                        <option value="">Status</option>
                                        <option value="1">Rent</option>
                                        <option value="2">Sale</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">

{{--                                    <select name="country">--}}
{{--                                        <option value="">Country</option>--}}
{{--                                        <option value="1">France</option>--}}
{{--                                        <option value="2">Great Britain</option>--}}
{{--                                        <option value="3">Spain</option>--}}
{{--                                        <option value="4">Russia</option>--}}
{{--                                        <option value="5">United States</option>--}}
{{--                                    </select>--}}

                                    <select name="country" id="country">
                                        <option value>Country</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->country_code}}">{{$country->country_name}}</option>
                                        @endforeach
                                    </select>

                                </div><!-- /.form-group -->
                                <div class="form-group" id="search_city">
                                    <select name="search_city">
                                        <option value>City</option>
                                        <option value="1">New York</option>
                                        <option value="2">Los Angeles</option>
                                        <option value="3">Chicago</option>
                                        <option value="4">Houston</option>
                                        <option value="5">Philadelphia</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group" id="search_district">
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
                                        @foreach($propertyType as $type)
                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
{{--                                        <option value="1">Apartment</option>--}}
{{--                                        <option value="2">Condominium</option>--}}
{{--                                        <option value="3">Cottage</option>--}}
{{--                                        <option value="4">Flat</option>--}}
{{--                                        <option value="5">House</option>--}}
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <div class="price-range">
                                        <input id="price-input" type="text" name="price" value="1000;{{$maxAmount}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Search Now</button>
                                </div><!-- /.form-group -->
                            </form><!-- /#form-map -->
                        </div><!-- /.search-box.map -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.search-box-inner -->
    </div>
@endsection



