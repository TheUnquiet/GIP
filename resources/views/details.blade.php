@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="{{ asset('css/details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Hawk | Drinks</title>
</head>

@section('content')
<div>
    <a href="/welcome" class="nav-el" style="font-size: 1.8em;"><i class="fa fa-home" aria-hidden="true"></i></a>

    <a href="/" class="nav-el">Hawk</a>
    <a href="/about" class="nav-el" target="_blank">About</a>
    <a href="/home" class="account ">{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</a>
</div>

<div class="content">
    <div class="head">
        <div>
            <h1 class="pb-0 text-center" style="color: white;">Beverage Oasis</h1>
            <p class="text-white text-center">
                Welcome to our store's liquid oasis, where you'll find a plethora of
                beverages to tantalize your taste buds. <br>
                From classic sodas to artisanal craft drinks, <br>
                our selection is sure to satisfy all your beverage desires.
            </p>    
        </div>
    </div>

    <div class="grid">
        <div class="circle shadow-box">
            <img src="img/icons/wine-glasses.png" alt="pop" width="200">
        </div>

        <div class="btn">
            <a href="#browse" class="browse-btn">Browse</a>
        </div>
    </div>

    <div id="browse" class="mt-3">
        <div class="border-container">
            <div class="boxLeft"></div>
            <div class="boxRight"></div>
        </div>
        <br><br><br>
        <div class="container w-intro">
            <p class="tiny-title">Water</p>
            <h2>Hydration</h2>
            <p class="mb-0 w-text">
                Staying hydrated is important for overall health, we've picked the best of the best just for you!
                Here, we offer a wide variety of bottled water options to meet all your hydration needs. 
            </p>
            <h4 class="mt-2" style="color: #ee3966;">We offer:</h4>

            <div class="row">
                @foreach ($water as $drink)
                <div class="card">
                    <img src="img/RuPaul.jpg" alt="placeholder">
                    <div class="card-body">
                        <h5 class="card-title">{{ $drink->name }} <span style="color: #ee3966;">{{ $drink->unit }}</span></h5>
                        <p class="card-text">Price: € {{ $drink->price }}</p>
                        <button type="submit" class="order-btn">Add to cart</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="border-container">
            <div class="boxLeft"></div>
            <div class="boxRight"></div>
        </div>
        <br><br><br>
        <div class="container w-intro">
            <p class="tiny-title">Pop</p>
            <h2>Carbonated beverages</h2>
            <p class="mb-0 w-text">
                Staying hydrated is important for overall health, we've picked the best of the best just for you!
                Here, we offer a wide variety of bottled water options to meet all your hydration needs. 
            </p>
            <h4 class="mt-2" style="color: #ee3966;">We offer:</h4>

            <div class="row">
                @foreach ($soda as $drink)
                <div class="card">
                    <img src="img/RuPaul.jpg" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $drink->name }} <span style="color: #ee3966;">{{ $drink->unit }}</span></h5>
                        <p class="card-text">Price: € {{ $drink->price }}</p>
                        <button type="submit" class="order-btn">Add to cart</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <a href="#gradient-canvas" class="back-up"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</div>


<canvas id="gradient-canvas" data-transition-in>
<script src="js/gradient.js"></script>
<script src="js/bubble-hover.js"></script>

@endsection