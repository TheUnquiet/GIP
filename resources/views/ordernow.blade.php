@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="{{ asset ("css/home.css") }}">
    <link rel="stylesheet" href="{{ asset ("css/ordernow.css") }}">
    <!-- Link to to little logo  -->
    <link rel="icon" type="image/png" href="{{ asset("img/logos/logo-top.png") }}">

    <title>Hawk | Your Order</title>
</head>

@section('content')

<div class="wrapper">
    <div class="inner-header flex text-left">
        <div class="container-xxl">
            <h1>Order details</h1>
            <p>Amount: <span class="red bold">€ {{ $total }}</span></p>
            <p>Delivery cost: <span class="red bold">€ 5</span></p>

            <h5>Total Amount: <span class="red">€ {{ $total + 5 }}</span></h5>
            <form action="/placeorder" method="post">
                @csrf
                <div class="address">
                    <input name="address" required id="address" placeholder="Address"></input>
                </div>

                <div class="mb-2">
                    <h3 for="pwd" class="">Payment Method</h3>
                    <input type="radio" value="cash" name="payment" required> <span>Payment on Delivery</span><br>
                </div>

                <div class="btn">
                    <button type="submit" class="back-btn">Order!</button>
                </div>
            </form>
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