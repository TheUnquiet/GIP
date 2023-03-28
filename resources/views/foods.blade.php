@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="{{ asset('css/foods.css') }}">

    <title>Hawk | Foods</title>
</head>

@section('content')
<div>
    <a href="/welcome" class="nav-el" style="font-size: 1.8em;"><i class="fa fa-home" aria-hidden="true"></i></a>

    <a href="/" class="nav-el">Hawk</a>
    <a href="/about" class="nav-el" target="_blank">About</a>
    <a href="/home" class="account">{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</a>
    <a href="/panel" target="_blank" class="account" rel="noopener noreferrer">Panel</a>
</div>

<div class="holder">
    <div class="head">
        <div>
            <h1 class="pb-0 text-center">Exquisite Foods</h1>
            <p class="text-center text-white">
                Welcome to our mouth-watering foods section! <br>
                Here, you'll find a diverse range of delectable recipes, food trends, and culinary adventures that will tantalize your <br>
                taste buds and satisfy your hunger. <br>
                From classic comfort foods to exotic dishes,
                we've got something for every foodie.
            </p>
        </div>
    </div>

    <div class="grid">
        <div class="circle shadow-box">
            <img src="img/icons/food-icon.png" alt="bagel">
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
        
        <div class="container-lg">
            <div class="row container">

                @foreach ($bakery as $item)
                <div class="card">
                    <img src="img/RuPaul.jpg" alt="placeholder">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #ee3966;">{{ $item->type }}</h5>
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">
                            Price: € {{ $item->price }} <br>
                            Type: {{ $item->type }}
                        </p>
                        <button type="submit" class="order-btn">Add to cart</button>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <a href="#gradient-canvas" class="back-up"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</div>
<canvas id="gradient-canvas" data-transition-in></canvas>
<script src="js/gradient.js"></script>

@endsection