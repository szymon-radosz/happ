@extends('layouts.app')

@section('content')
    @guest
        <div class="row guestWelcome">
            <div class="col-sm-10 col-sm-offset-1">
                <img src="{{asset('images/logo.png')}}" alt="logo" id="welcomeLogo" />
                <h1>Daily Act</h1>
                <h3>Start to build your <span>habits</span> for free.</h3>
                <a href="{{ route('login') }}"><div class="btn btn-default login">Login</div></a>
                <a href="{{ route('register') }}"><div class="btn btn-default register">Register</div></a>
            </div>
        </div>
    @else
        <h1>Index page</h1>

    @endguest
@endsection