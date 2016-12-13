<!DOCTYPE HTML>
<html>

<head>

    @section('title')
    @show


    @section('header')
    @show

    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest"/>
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet'
          type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/mystyles.css') }}">
    <script src="{{ asset('assets/js/modernizr.js') }}"></script>


</head>

<body>


<div class="global-wrap">
    <header id="main-header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a class="logo" href="{{ url('/') }}">
                            <img src="{{ asset('assets/img/logo-invert.png') }}"
                                 alt="Image Alternative text"
                                 title="Image Title"/>
                        </a>
                    </div>
                    <div class="col-md-3 col-md-offset-2">

                    </div>

                    @if(!Auth::guest())
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-avatar">
                                        <a href="user-profile.html">
                                            <img class="origin round" src="{{asset('assets/img/40x40.png')}}"
                                                 alt="Image Alternative text"
                                                 title="AMaze"/>Hi, {{ Auth::user()->username }}</a>
                                    </li>
                                    <li><a href="{{ url('/logout') }}">Sign Out</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    @else
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">

                                    <li><a href="{{ url('/register') }}">Register</a>
                                    </li>
                                    <li><a href="{{ url('/login') }}">Login</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    @endif
                </div>
            </div>
        </div>

    </header>

    @section('page-title')

    @show


    @yield('content')

    <div class="gap"></div>
    <footer id="main-footer">
        <div class="container">
            <div class="row row-wrap">
                <div class="col-md-3">
                    <a class="logo" href="index.html">
                        <img src="{{ asset('/assets/img/logo-invert.png') }}" alt="Image Alternative text"
                             title="Image Title"/>
                    </a>
                    <p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel
                        packages, and lots more!</p>
                    <ul class="list list-horizontal list-space">
                        <li>
                            <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h4>Newsletter</h4>
                    <form>
                        <label>Enter your E-mail Address</label>
                        <input type="text" class="form-control">
                        <p class="mt5">
                            <small>*We Never Send Spam</small>
                        </p>
                        <input type="submit" class="btn btn-primary" value="Subscribe">
                    </form>
                </div>
                <div class="col-md-2">
                    <ul class="list list-footer">
                        <li><a href="#">About US</a>
                        </li>
                        <li><a href="#">Press Centre</a>
                        </li>
                        <li><a href="#">Best Price Guarantee</a>
                        </li>
                        <li><a href="#">Travel News</a>
                        </li>
                        <li><a href="#">Jobs</a>
                        </li>
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                        <li><a href="#">Feedback</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Have Questions?</h4>
                    <h4 class="text-color">+1-202-555-0173</h4>
                    <h4><a href="#" class="text-color">support@traveler.com</a></h4>
                    <p>24/7 Dedicated Customer Support</p>
                </div>

            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/slimmenu.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-timepicker.js') }}"></script>
    <script src="{{ asset('assets/js/nicescroll.js') }}"></script>
    <script src="{{ asset('assets/js/dropit.js') }}"></script>
    <script src="{{ asset('assets/js/ionrangeslider.js') }}"></script>
    <script src="{{ asset('assets/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/fotorama.js') }}"></script>
    <script src="{{ asset('assets/https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false') }}"></script>
    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
    <script src="{{ asset('assets/js/card-payment.js') }}js/card-payment.js"></script>
    <script src="{{ asset('assets/js/magnific.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/fitvids.js') }}"></script>
    <script src="{{ asset('assets/js/tweet.js') }}"></script>
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/gridrotator.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @section('footer')
    @show
</div>
</body>

</html>


