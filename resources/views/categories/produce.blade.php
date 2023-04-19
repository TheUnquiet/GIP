@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="{{ asset('css/categories/produce.css') }}">

    <title>Hawk | Produce</title>
</head>

@section('content')
<div>
    <?php
        use App\Http\Controllers\ProductController;
        $total = ProductController::cartItem();
    ?>
    <a href="/welcome" class="nav-el" style="font-size: 1.8em;"><i class="fa fa-home" aria-hidden="true"></i></a>

    <a href="/" class="nav-el">Hawk</a>
    <a href="/about" class="nav-el" target="_blank">About</a>
    <a href="/home" class="account">{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</a>
    <a href="/panel" target="_blank" class="account" rel="noopener noreferrer">Panel</a>

    <a href="/cart" class="account"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart {{ $total }}</a>
</div>

<div class="holder">
    <div class="head">
        <div>
            <h1 class="pb-0 text-center text-white">Nature's Splendor</h1>
            <p class="text-center text-white">
                Our meticulous curation and sourcing of the finest fruits and vegetables is evident in the vibrant colors and
                intoxicating aromas that permeate the air. <br>
                Savor the sensory experience as you peruse our lush displays, <br>
                where every leaf and berry is a natural masterpiece waiting to be discovered.
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
        {{-- Water --}}
        <div class="container-lg">
            <h1 id="fruit" style="color: #ee3966">Fruits</h1>

            <div class="row container">
                @foreach ($fruit->products as $item)
                <div class="card">
                    <img src="{{ $item->image_url }}" alt="placeholder">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #ee3966;">{{ $item->category->name }}</h5>
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">
                            {{ $item->description }} <br>
                            <b> Price: € {{ $item->price }} </b>
                        </p>
                        <form action="/add_to_cart" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value={{ $item->id }}>
                            <button type="submit" class="order-btn">Add to cart</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- Soda's --}}
        <div class="border-container">
            <div class="boxLeft"></div>
            <div class="boxRight"></div>
        </div>
        <div class="container-lg">
            <h1 id="veg" style="color: #ee3966">Veggies</h1>

            <div class="row container">
                @foreach ($veggies->products as $item)
                <div class="card">
                    <img src="{{ $item->image_url }}" alt="placeholder">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #ee3966;">{{ $item->category->name }}</h5>
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">
                            {{ $item->description }} <br>
                            <b> Price: € {{ $item->price }} </b>
                        </p>
                        <form action="/add_to_cart" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value={{ $item->id }}>
                            <button type="submit" class="order-btn">Add to cart</button>
                        </form>
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