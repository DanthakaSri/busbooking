@extends('layouts.booking')



@section('title')
    <title>Bus Booking | login</title>
@endsection

@section('header')
@endsection
@section('page-title')
    <div class="container">
        <h1 class="page-title">Login</h1>
    </div>
@endsection

@section('content')

    <div class="container">
        <div class="row" data-gutter="60">
            <div class="col-md-4">
                <h3>Welcome to BusBooking</h3>
                <p>Euismod nunc porta magna elementum penatibus amet gravida sit ligula odio id nunc proin sem augue
                    quis
                    posuere interdum in sapien congue rutrum scelerisque sociosqu cubilia ridiculus et luctus mollis</p>
                <p>Praesent est semper massa lobortis quisque lectus ridiculus hac eget</p>
            </div>

            <!--Login form-->
            <div class="col-md-4">
                <h3>Login</h3>
                <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                            <!--email field-->
                    <div class="form-group form-group-icon-left {{ $errors->has('email') ? ' has-error' : '' }}"><i
                                class="fa fa-user input-icon input-icon-show"></i>
                        <label>Username or email</label>
                        <input id="email" name="email" class="form-control" value="{{ old('email') }}"
                               placeholder="e.g. johndoe@gmail.com" type="email"/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <!--password field-->
                    <div class="form-group form-group-icon-left" {{ $errors->has('password') ? ' has-error' : '' }}><i
                                class="fa fa-lock input-icon input-icon-show"></i>
                        <label>Password</label>
                        <input id="password" name="password" class="form-control" type="password"
                               placeholder="my secret password"/>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <input class="btn btn-primary" type="submit" value="Sign in"/>
                </form>
            </div>

            <!--Register form -->
            <div class="col-md-4">
                <h3>New To BusBooking?</h3>
                <form role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="userCode" value="{{ str_random(4)}}{{mt_rand(00000,99999) }}">

                    <div class="form-group form-group-icon-left {{ $errors->has('username') ? ' has-error' : '' }}"><i
                                class="fa fa-user input-icon input-icon-show"></i>
                        <label>Username</label>
                        <input class="form-control" placeholder="e.g. John Doe" name="username" id="username"
                               value="{{ old('username') }}" type="text"/>
                        @if ($errors->has('username'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group form-group-icon-left {{ $errors->has('email') ? ' has-error' : '' }}"><i
                                class="fa fa-envelope input-icon input-icon-show"></i>
                        <label>Emai</label>
                        <input class="form-control" name="email" id="email" placeholder="" value="{{ old('email') }}"
                               type="text"/>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group form-group-icon-left {{ $errors->has('password') ? ' has-error' : '' }}"><i
                                class="fa fa-lock input-icon input-icon-show"></i>
                        <label>Password</label>
                        <input class="form-control" name="password" id="password" value="{{ old('password') }}"
                               type="password" placeholder="my secret password"/>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group form-group-icon-left {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <i class="fa fa-lock input-icon input-icon-show"></i>
                        <label>Password</label>
                        <input class="form-control" name="password_confirmation" id="password_confirmation"
                               value="{{ old('password_confirmation') }}" type="password"
                               placeholder="confirm password"/>

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <input class="btn btn-primary" type="submit" value="Sign up for BusBooking"/>
                </form>
            </div>


        </div>
    </div>

@endsection