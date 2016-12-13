@extends('layouts.booking')


@section('title')
    <title>Bus Booking | Home</title>
    @endsection

    @section('header')
    @endsection
    @section('page-title')
    {{--<h1 class="page-title">Login</h1>--}}

            <!-- TOP AREA -->
    <div class="top-area show-onload">
        <div class="bg-holder full">
            <div class="bg-mask"></div>
            <div class="bg-parallax" style="background-image:url('public/assets/img/2048x1365.png');"></div>
            <div class="bg-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="search-tabs search-tabs-bg mt50">
                                <h1>Find Your Perfect Trip</h1>
                                <div class="tabbable">
                                    <ul class="nav nav-tabs" id="myTab">
                                        <li><a href="#tab-1" data-toggle="tab"><i
                                                        class="fa fa-car"></i> <span>Bus</span></a>
                                        </li>

                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="tab-1">
                                            <h2>Search for Cheap Rental Buss</h2>
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i
                                                                    class="fa fa-map-marker input-icon"></i>
                                                            <label>Pick-up Location</label>
                                                            <input class="typeahead form-control"
                                                                   placeholder="City, Airport, U.S. Zip" type="text"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i
                                                                    class="fa fa-map-marker input-icon"></i>
                                                            <label>Drop-off Location</label>
                                                            <input class="typeahead form-control"
                                                                   placeholder="City, Airport, U.S. Zip" type="text"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="input-daterange" data-date-format="M d, D">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Pick-up Date</label>
                                                                <input class="form-control" name="start" type="text"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                <i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                                                <label>Pick-up Time</label>
                                                                <input class="time-pick form-control" value="12:00 AM"
                                                                       type="text"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                <i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Drop-off Date</label>
                                                                <input class="form-control" name="end" type="text"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group form-group-lg form-group-icon-left">
                                                                <i class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                                                <label>Drop-off Time</label>
                                                                <input class="time-pick form-control" value="12:00 AM"
                                                                       type="text"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-lg" type="submit">Search for Rental
                                                    Buses
                                                </button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END TOP AREA  -->

    <div class="gap"></div>
@endsection

@section('content')


    <div class="container">
        <div class="row row-wrap" data-gutter="60">
            <div class="col-md-4">
                <div class="thumb">
                    <header class="thumb-header"><i
                                class="fa fa-briefcase box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                    </header>
                    <div class="thumb-caption">
                        <h5 class="thumb-title"><a class="text-darken" href="#">Combine & Save</a></h5>
                        <p class="thumb-desc">Sagittis non laoreet augue nulla lectus auctor accumsan cubilia
                            sollicitudin mattis leo</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumb">
                    <header class="thumb-header"><i
                                class="fa fa-thumbs-o-up box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                    </header>
                    <div class="thumb-caption">
                        <h5 class="thumb-title"><a class="text-darken" href="#">Best Travel Agent</a></h5>
                        <p class="thumb-desc">Vel morbi class sollicitudin cubilia quisque penatibus dictumst faucibus
                            dui natoque ultricies</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumb">
                    <header class="thumb-header"><i
                                class="fa fa-lock box-icon-md round box-icon-black animate-icon-top-to-bottom"></i>
                    </header>
                    <div class="thumb-caption">
                        <h5 class="thumb-title"><a class="text-darken" href="#">Trust & Safety</a></h5>
                        <p class="thumb-desc">Montes congue pellentesque aliquet lectus dictum est volutpat class odio
                            elementum quis</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
    </div>
    <div class="bg-holder">
        <div class="bg-mask"></div>
        <div class="bg-parallax" style="background-image:url(img/2048x1310.png);"></div>
        <div class="bg-content">
            <div class="container">
                <div class="gap gap-big text-center text-white">
                    <h2 class="text-uc mb20">Last Minute Deal</h2>
                    <ul class="icon-list list-inline-block mb0 last-minute-rating">
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                        <li><i class="fa fa-star"></i>
                        </li>
                    </ul>
                    <h5 class="last-minute-title">The Peninsula - New York</h5>
                    <p class="last-minute-date">Fri 14 Mar - Sun 16 Mar</p>
                    <p class="mb20"><b>$120</b> / person</p><a class="btn btn-lg btn-white btn-ghost" href="#">Book Now
                        <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="gap"></div>
        <h1 class="text-center mb20">Last Minute Deals</h1>
        <div class="row row-wrap">
            <div class="col-md-4">
                <div class="thumb">
                    <header class="thumb-header">
                        <a class="hover-img" href="#">
                            <img src="{{ asset('/assets/img/800x600.png') }}" alt="Image Alternative text"
                                 title="hotel PORTO BAY SERRA GOLF library"/>
                            <h5 class="hover-title-center">Book Now</h5>
                        </a>
                    </header>
                    <div class="thumb-caption">
                        <ul class="icon-group text-tiny text-color">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half-empty"></i>
                            </li>
                        </ul>
                        <h5 class="thumb-title"><a class="text-darken" href="#">The Benjamin</a></h5>
                        <p class="mb0">
                            <small><i class="fa fa-map-marker"></i> New York, NY (Chelsea)</small>
                        </p>
                        <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$394</span>
                            <small> avg/night</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumb">
                    <header class="thumb-header">
                        <a class="hover-img" href="#">
                            <img src="{{ asset('/assets/img/800x600.png') }}" alt="Image Alternative text"
                                 title="hotel PORTO BAY RIO INTERNACIONAL de luxe"/>
                            <h5 class="hover-title-center">Book Now</h5>
                        </a>
                    </header>
                    <div class="thumb-caption">
                        <ul class="icon-group text-tiny text-color">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <h5 class="thumb-title"><a class="text-darken" href="#">The London NYC</a></h5>
                        <p class="mb0">
                            <small><i class="fa fa-map-marker"></i> New York, NY (Chelsea)</small>
                        </p>
                        <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$355</span>
                            <small> avg/night</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumb">
                    <header class="thumb-header">
                        <a class="hover-img" href="#">
                            <img src="{{ asset('/assets/img/800x600.png') }}" alt="Image Alternative text"
                                 title="hotel 1"/>
                            <h5 class="hover-title-center">Book Now</h5>
                        </a>
                    </header>
                    <div class="thumb-caption">
                        <ul class="icon-group text-tiny text-color">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half-empty"></i>
                            </li>
                        </ul>
                        <h5 class="thumb-title"><a class="text-darken" href="#">InterContinental New York Barclay</a>
                        </h5>
                        <p class="mb0">
                            <small><i class="fa fa-map-marker"></i> Ozone Park, NY (Kennedy Airport (JFK))</small>
                        </p>
                        <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$213</span>
                            <small> avg/night</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumb">
                    <header class="thumb-header">
                        <a class="hover-img" href="#">
                            <img src="{{ asset('/assets/img/800x600.png') }}" alt="Image Alternative text"
                                 title="hotel PORTO BAY SERRA GOLF suite2"/>
                            <h5 class="hover-title-center">Book Now</h5>
                        </a>
                    </header>
                    <div class="thumb-caption">
                        <ul class="icon-group text-tiny text-color">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <h5 class="thumb-title"><a class="text-darken" href="#">Affinia Shelburne</a></h5>
                        <p class="mb0">
                            <small><i class="fa fa-map-marker"></i> Brooklyn, NY (Brooklyn)</small>
                        </p>
                        <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$238</span>
                            <small> avg/night</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumb">
                    <header class="thumb-header">
                        <a class="hover-img" href="#">
                            <img src="{{ asset('/assets/img/800x600.png') }}" alt="Image Alternative text"
                                 title="hotel 2"/>
                            <h5 class="hover-title-center">Book Now</h5>
                        </a>
                    </header>
                    <div class="thumb-caption">
                        <ul class="icon-group text-tiny text-color">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half-empty"></i>
                            </li>
                        </ul>
                        <h5 class="thumb-title"><a class="text-darken" href="#">New York Hilton Midtown</a></h5>
                        <p class="mb0">
                            <small><i class="fa fa-map-marker"></i> New York, NY (Midtown East)</small>
                        </p>
                        <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$438</span>
                            <small> avg/night</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumb">
                    <header class="thumb-header">
                        <a class="hover-img" href="#">
                            <img src="{{ asset('/assets/img/800x600.png') }}" alt="Image Alternative text"
                                 title="hotel THE CLIFF BAY spa suite"/>
                            <h5 class="hover-title-center">Book Now</h5>
                        </a>
                    </header>
                    <div class="thumb-caption">
                        <ul class="icon-group text-tiny text-color">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half-empty"></i>
                            </li>
                        </ul>
                        <h5 class="thumb-title"><a class="text-darken" href="#">Wellington Hotel</a></h5>
                        <p class="mb0">
                            <small><i class="fa fa-map-marker"></i> New York, NY (Downtown - Wall Street)</small>
                        </p>
                        <p class="mb0 text-darken"><span class="text-lg lh1em text-color">$210</span>
                            <small> avg/night</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
    </div>
@endsection
