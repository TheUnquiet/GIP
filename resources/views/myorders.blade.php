@extends('layouts.layout')

<head>
<<<<<<< HEAD
    <link rel="stylesheet" href="css/myorders.css">

    <title>Hawk | Your Orders</title>
</head>

@section('content')
    <div class="wrapper">
        <?php
        use App\Http\Controllers\ProductController;
        $total = ProductController::cartItem();
        ?>
        <div class="top-link p-2">
            <div>
                <a href="/welcome" class="top-logo" rel="noopener noreferrer"><i class="fa fa-home" aria-hidden="true"></i></a>
                <a href="/" class="top-logo">Hawk</a>
                <a href="/about" class="top-logo">About</a>
            </div>
            <div>
                <a href="/cart" target="_blank" class="top-logo"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
                    {{ $total }}</a>
                <a href="/account" class="top-logo">{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}</a>

                @if (Auth::user() && Auth::user()->is_admin == 1)
                    <a href="/panel" class="top-logo" target="_blank">Panel</a>
                @endif
            </div>
        </div>
        <div class="inner-header flex text-left">
            <div class="container-xxl">

                <h2>My Orders</h2>
                @foreach ($orders as $order)
                    <div class="border-top-dark"></div>
                    <div class="row">
                        <div class="col-sm-3"><img src=" {{ $order->image_url }} "></div>
                        <div class="col-sm-3"><b>{{ $order->name }}</b></div>
                        <div class="col-sm-3"><b>{{ $order->description }}</b></div>
                        <div class="col-sm-3"><b>{{ $order->status }}</b></div>
                    </div>
                @endforeach
                <div class="border-top-dark"></div>
                <div class="button mt-5">
                    <a href="/welcome" class="back-btn"><i class="fa fa-home" aria-hidden="true"></i> Back</a>
                </div>
            </div>
        </div>


        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255, .7)" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255, .5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255, .3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->
    </div>
@endsection
=======
    <link rel="stylesheet" href="css/home.css">

    <title>Hawk | Your Orders</title>

    <style>
        body {
            min-height: 100vh;
        }
        .wrapper {
            min-width: 100vh;

            overflow-y: scroll !important;
        }

        .container-xxl {
            width: 90%;
            min-height: 50%;
        }

        .button {
            justify-content: flex-start;
            flex-direction: row;
            margin-left: 0;
        }

        b { font-size: 18px }

    </style>
</head>

@section('content')

<div class="wrapper">
    <div class="inner-header flex text-left">
        <div class="container-xxl">

            <h2>My Orders</h2>
            @foreach($orders as $order)

            <p><b>{{ $order->name }}</b> {{ $order->description }} {{ $order->status }}</p>

            @endforeach
            <div class="button">
                <a href="/welcome" class="back-btn"><i class="fa fa-home" aria-hidden="true"></i> Back</a>
            </div>
        </div>
    </div>

    
    <!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255, .7)" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255, .5)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255, .3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
        </svg>
    </div>
    <!--Waves end-->
</div>

@endsection
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
