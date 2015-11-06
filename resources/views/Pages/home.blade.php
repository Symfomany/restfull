@extends('layout')

@section('content')

<div class="page-content">
    <div class="search collapse in" id="search-collapse">
        <div class="container">
            <form class="main-search" role="form" method="post" action="#">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="type">Property Type</label>
                            <select name="type" multiple title="All" id="type" class="animate" data-transition-parent=".dropdown-menu">
                                <option value="1">Apartment</option>
                                <option value="2">Condominium</option>
                                <option value="3">Cottage</option>
                                <option value="4">Flat</option>
                                <option value="5">House</option>
                                <option value="6">Construction Site</option>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!--/.col-md-6-->
                    <div class="col-md-3 col-sm-3">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="bedrooms">Bedrooms</label>
                                    <div class="input-group counter">
                                        <input type="text" class="form-control" id="bedrooms" name="bedrooms" placeholder="Any">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default minus" type="button"><i class="fa fa-minus"></i></button>
                                            </span>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default plus" type="button"><i class="fa fa-plus"></i></button>
                                            </span>
                                    </div><!-- /input-group -->
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!--/.col-md-3-->
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label for="bathrooms">Bathrooms</label>
                                    <div class="input-group counter">
                                        <input type="text" class="form-control" id="bathrooms" name="bathrooms" placeholder="Any">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default minus" type="button"><i class="fa fa-minus"></i></button>
                                            </span>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default plus" type="button"><i class="fa fa-plus"></i></button>
                                            </span>
                                    </div><!-- /input-group -->
                                </div>
                                <!-- /.form-group -->
                            </div>
                            <!--/.col-md-3-->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label for="location">Location</label>
                            <div class="input-group location">
                                <input type="text" class="form-control" id="location" placeholder="Enter Location">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default animate" type="button"><i class="fa fa-map-marker geolocation" data-toggle="tooltip" data-placement="bottom" title="Find my position"></i></button>
                                    </span>
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="form-group">
                            <label>Price</label>
                            <div class="ui-slider" id="price-slider" data-value-min="100" data-value-max="40000" data-value-type="price" data-currency="$" data-currency-placement="before">
                                <div class="values clearfix">
                                    <input class="value-min" name="value-min[]" readonly>
                                    <input class="value-max" name="value-max[]" readonly>
                                </div>
                                <div class="element"></div>
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!--/.col-md-6-->
                </div>
                <!--/.row-->
            </form>
            <!-- /.main-search -->
        </div>
        <!--end .container-->
    </div>
    <!--end .search-->

    <div class="content-inner">
        <div class="container" id="main-container">
            <div class="content-loader">
                <div class="content fade_in animate">
                    <a href="#" class="close" id="close"><img src="assets/img/close.png" alt=""></a>
                    <!--external content goes here-->
                </div>
            </div>
            <!--end Content Loader-->
        </div>
    </div>

    <div class="map-wrapper grid">
        <div class="map height-500" id="map"></div>
        <!--end .map-->
    </div>
    <!--end .map-wrapper-->

    <div class="masonry grid full-width animate">

        @forelse(\App\Model\AdsMongo::all() as $ad)
            <div class="item move_from_bottom">
                <a href="assets/pages/items/7_e.html" data-expand-width="col-9" data-transition-parent=".content-loader" data-external="true">
                    <div class="inner">
                        <div class="image">
                            <div class="price average-color"><span>{{ $ad['data']['prix'] }}</span></div>
                            <img src="{{ $ad['data']['image'] }}" alt="">
                        </div>
                        <div class="item-content">
                            <header class="average-color">
                                <h2>{{ $ad['data']['topic'] }}</h2>
                                <h3>{{ $ad['data']['description'] }}</h3>
                            </header>
                            <footer>
                                <dl>
                                    <dt>Bathrooms</dt>
                                    <dd>1</dd>
                                    <dt>Bedrooms</dt>
                                    <dd>2</dd>
                                    <dt>Area</dt>
                                    <dd>165m<sup>2</sup></dd>
                                    <dt>Garages</dt>
                                    <dd>1</dd>
                                </dl>
                            </footer>
                        </div>
                    </div>
                </a>
            </div>
            <!--end .item-->
        @empty
            <p>No ads</p>
        @endforelse



    </div>

</div>
<!--end Page Content-->


@stop
