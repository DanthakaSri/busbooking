@extends('layouts.booking')


@section('title')
    <title>Bus Booking | Search </title>
@endsection

@section('header')
@endsection
@section('page-title')
    <div class="container">
        <h1 class="page-title">Search for Rental Busses</h1>
    </div>

@endsection

@section('content')


    <div class="container">

        <div class="mfp-with-anim mfp-hide mfp-dialog mfp-search-dialog" id="search-dialog">
            <h3>Search for Car</h3>
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group form-group-lg form-group-icon-left"><i
                                    class="fa fa-map-marker input-icon input-icon-highlight"></i>
                            <label>Pick-up From</label>
                            <input class="typeahead form-control" placeholder="City, Airport or U.S. Zip Code"
                                   type="text"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-lg form-group-icon-left"><i
                                    class="fa fa-map-marker input-icon input-icon-highlight"></i>
                            <label>Drop-off To</label>
                            <input class="typeahead form-control" placeholder="City, Airport or U.S. Zip Code"
                                   value="Same as Pick-up" type="text"/>
                        </div>
                    </div>
                </div>
                <div class="input-daterange" data-date-format="MM d, D">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>Pick-up Date</label>
                                <input class="form-control" name="start" type="text"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                <label>Drop-off Time</label>
                                <input class="time-pick form-control" value="12:00 AM" type="text"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-calendar input-icon input-icon-highlight"></i>
                                <label>Drop-off Date</label>
                                <input class="form-control" name="end" type="text"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group form-group-lg form-group-icon-left"><i
                                        class="fa fa-clock-o input-icon input-icon-highlight"></i>
                                <label>Pick-up Time</label>
                                <input class="time-pick form-control" value="12:00 AM" type="text"/>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-lg" type="submit">Search for Flights</button>
            </form>
        </div>
        <h3 class="booking-title">105 Rental Cars in New York on Mar 22 - Mar 27
            <small><a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Change search</a></small>
        </h3>
        <div class="row">
            <div class="col-md-3">
                <div class="booking-item-dates-change mb30">
                    <form class="input-daterange" data-date-format="MM, d">
                        <div class="form-group form-group-icon-left"><i
                                    class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                            <label>Pick Up Location</label>
                            <input class="typeahead form-control" value="USA, New York" placeholder="City or Airport"
                                   type="text"/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Check in</label>
                                    <input class="form-control" name="start" type="text"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Time</label>
                                    <input class="time-pick form-control" value="12:00 AM" type="text"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-icon-left"><i
                                    class="fa fa-map-marker input-icon input-icon-hightlight"></i>
                            <label>Drop Off Location</label>
                            <input class="typeahead form-control" value="Same as Pickup" placeholder="City or Airport"
                                   type="text"/>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Check out</label>
                                    <input class="form-control" name="end" type="text"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Time</label>
                                    <input class="time-pick form-control" value="12:00 AM" type="text"/>
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Update Search"/>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="nav-drop booking-sort">
                    <h5 class="booking-sort-title"><a href="#">Sort: Price (low to high)<i class="fa fa-angle-down"></i><i
                                    class="fa fa-angle-up"></i></a></h5>
                    <ul class="nav-drop-menu">
                        <li><a href="#">Price (high to low)</a>
                        </li>
                        <li><a href="#">Car Name (A-Z)</a>
                        </li>
                        <li><a href="#">Car Name (Z-A)</a>
                        </li>
                        <li><a href="#">Car Type</a>
                        </li>
                    </ul>
                </div>
                <ul class="booking-list">
                    <li>
                        <a class="booking-item" href="#">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="booking-item-car-img">
                                        <img src="img/Volkswagen-Touareg-Edition-X.png" alt="Image Alternative text"
                                             title="Image Title"/>
                                        <p class="booking-item-car-title">Volkswagen Touareg</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <ul class="booking-item-features booking-item-features-sign clearfix">
                                                <li rel="tooltip" data-placement="top" title="Passengers"><i
                                                            class="fa fa-male"></i><span
                                                            class="booking-item-feature-sign">x 3</span>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Doors"><i
                                                            class="im im-car-doors"></i><span
                                                            class="booking-item-feature-sign">x 2</span>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Baggage Quantity"><i
                                                            class="fa fa-briefcase"></i><span
                                                            class="booking-item-feature-sign">x 4</span>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Automatic Transmission"><i
                                                            class="im im-shift-auto"></i><span
                                                            class="booking-item-feature-sign">auto</span>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Electric Vehicle"><i
                                                            class="im im-electric"></i>
                                                </li>
                                            </ul>
                                            <ul class="booking-item-features booking-item-features-small clearfix">
                                                <li rel="tooltip" data-placement="top" title="FM Radio"><i
                                                            class="im im-fm"></i>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Power Windows"><i
                                                            class="im im-car-window"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="booking-item-features booking-item-features-dark">
                                                <li rel="tooltip" data-placement="top" title="Shuttle Bus to Car"><i
                                                            class="im im-bus"></i>
                                                </li>
                                                <li rel="tooltip" data-placement="top" title="Meet and Greet"><i
                                                            class="im im-meet"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3"><span class="booking-item-price">$52</span><span>/day</span>
                                    <p class="booking-item-flight-class">Crossover</p><span class="btn btn-primary">Select</span>
                                </div>
                            </div>
                        </a>
                    </li>
       
                </ul>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <small>108 rental cars in New York. &nbsp;&nbsp;Showing 1 – 15</small>
                        </p>
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">6</a>
                            </li>
                            <li><a href="#">7</a>
                            </li>
                            <li class="dots">...</li>
                            <li><a href="#">43</a>
                            </li>
                            <li class="next"><a href="#">Next Page</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 text-right">
                        <p>Not what you're looking for? <a class="popup-text" href="#search-dialog"
                                                           data-effect="mfp-zoom-out">Try your search again</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="gap"></div>
    </div>
@endsection
