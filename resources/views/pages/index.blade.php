@extends('layouts.app')

@section('content')
    @guest
        <div class = "auth">
            <a href="{{ route('login') }}"><h4 id="login">Login</h4></a>
            <a href="{{ route('register') }}"><h4 id="register">Register</h4></a>
        </div>
        <div class="row guestWelcome">
            
            <div class="col-sm-10 col-sm-offset-1 header">
                <h1>DailyAct</h1>
                <h3>Start build your <span>habits</span> for free.</h3>
            </div>
        </div>

        <div class="row whatIsIt">
            <div class="col-sm-6">
                <h2>What <br> Is <br> It? </h2>
            </div>
            <div class="col-sm-6 description">
                <p>DailyAct is an app to build your habits.</p>
            </div>
        </div>

        <div class="row howItWorks">
            <div class="col-sm-6">
                <h2>How <br> It <br> Works? </h2>
            </div>
            <div class="col-sm-6">
                <div class="workSection">
                    <h2> 01. </h2>
                    <p>Sign Up for free and start build your habits.</p>
                </div>

                <div class="workSection">
                    <h2> 02. </h2>
                    <p>Add habit which you want to develop to your list.</p>
                </div>

                <div class="workSection">
                    <h2> 03. </h2>
                    <p>After you made your habit, click button to add point to your account.</p>
                </div>

                <div class="workSection">
                    <h2> 04. </h2>
                    <p>You will increase your level when you will reach some points.</p>
                </div>

                <div class="workSection">
                    <h2> 05. </h2>
                    <p>You can check ranking of users based on points.</p>
                </div>

                <div class="workSection">
                    <h2> 06. </h2>
                    <p>Use this app daily and You will be suprised how motivate you are.</p>
                </div>

                <div class="workSection">
                    <h2> 07. </h2>
                    <p>Let's start now. <a href="{{ route('register') }}">Sign Up</a> for free.</p>
                </div>
            </div>
        </div>

        <div class="row footer">
            <div class="col-sm-12">
                <h6>DailyAct 2018 All right reserved.</h6>
            </div>
        </div>
    @else
        {{ redirect('/habits')}}

    @endguest
@endsection