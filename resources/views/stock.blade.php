@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/stock.css') }}">

    <title>Hawk | Discover</title>
</head>

@section('content')

<div class="top-link">
    <div>
        <a href="/welcome" class="top-logo" style="font-size: 1.2em; margin-top: 13.5px;" rel="noopener noreferrer"><i class="fa fa-home" aria-hidden="true"></i></a>
        <a href="/" class="top-logo">Hawk</a>
        <a href="/about" class="top-logo">About</a>

        <a href="/account" class="account">{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</a>

        @if (Auth::user() && Auth::user()->is_admin == 1)
            <a href="/panel" class="account" target="_blank">Panel</a>
        @endif
    </div>
</div>

<div class="content">
    <div class="text">
        <h1 class="h1">
            This is Hawk. <br>
            A place where you can get <br>
            groceries delivered, <br>
            right to your doorstep!
        </h1>

        <p>
            Save time and multiple grocery trips <br>
            by ordering online. <br>
            We offer a wide selection, anything from <br>
            fresh fruits to delicious desserts. Save even more time by ordering in
            <span style="color: #EA3D53;" data-title="A large quantity">bulk</span>.
        </p>

        <footer>
            <div class="btn-container">
                <a href="/register" class="register-btn">Sign Up</a>
                <a href="#browse" class="browse-btn">Browse</a>
            </div>
        </footer>
        
    </div> 
    <div class="img">
        <img src="img/logos/logo-top.png" alt="" id="logo">
    </div>
</div>

<div class="browse-section">
    <div id="drinks" class="container-xl">
        
        <div id="browse">

            <div class="container p-4">
                <p class="drink-p">Refreshments</p>

                <h1>
                    A fully stocked section with a <br>
                    wide variety of drinks.
                </h1>

                
                <p class="pl-0 pt-2 pb-2">
                    Our drinks selection is dedicated to serve every occasion, <br>
                    we offer a variety of beverages including alcoholic and non-alcoholic options <br>
                    alongside vegan and non-vegan options. <br>
                    This section is always well-stocked with multiple brands and flavors.
                </p>

                <a href="/drinks" class="algolia-btn" target="_blank">Browse Drinks</a>
            </div>

            <div class="container">
                <img src="img/icons/champagne.png" alt="champagne bottle"  class="m-3 p-4 shadow-box img">
                <img src="img/icons/warm-drink.png" alt="warm drink" class="m-3 p-4 shadow-box img">
                <img src="img/icons/soda-can.png" alt="soda can" class="m-3 p-4 shadow-box img">
                <img src="img/icons/juice-carton.png" alt="carton of orange juice" class="m-3 p-4 shadow-box img">
            </div>
        </div>

        <div id="foods">
            <div class="food-text">
                <p class="foods-p">Culinary Delights</p>

                <h1>
                    A wide selection of Delicious Foods <br>
                    For all to enjoy.
                </h1>

                <p>
                    Welcome to our foods section, here we offer a <br>
                    diverse selection of high-quality foods to suit all your culinary needs. <br>
                    We are sure we have something that will satisfy your appetite. <br>
                    Our store is filled with an array of fresh produce, meats, dairy products, snacks and more. <br>
                    <br>
                    Beside foods, we also have a <a href="/stock/frozen" target="_blank">Frozen</a> section, <br>
                    full of frozen veggies and fruits to heat-dinners and desserts.
                </p>
            </div>

            <div class="food-icon shadow-box">
                <img src="img/icons/food-icon.png" alt="" class="img"><br>
                <a href="/foods" target="_blank" class="foods-btn">Browse Foods</a>
            </div>
        </div>
    </div>

    <div class="produce">
        <div class="container p-4 ">
            <p class="drink-p">Produce and Harvest</p>

            <h1>
                Freshest Produce, <br>
                Our Delicious Produce Section. <br>
            </h1>

            
            <p class="pl-0 pt-2 pb-2">
                We are proud to offer a wide selection of fresh, <br>
                hight-quality fruits and veggies to meet all your needs. <br>
                Our selection may differ from season to season, this way <br>
                we ensure to always have the freshest of fruits. <br>
            </p>

            <a href="/produce" class="algolia-btn" target="_blank">Browse Produce</a>
        </div>

        <div class="container">
            <img src="img/icons/strawberry.png" alt="champagne bottle"  class="m-3 p-4 shadow-box img">
            <img src="img/icons/bagel.png" alt="warm drink" class="m-3 p-4 shadow-box img">
            <img src="img/icons/brocoli.png" alt="soda can" class="m-3 p-4 shadow-box img">
            <img src="img/icons/olives.png" alt="carton of orange juice" class="m-3 p-4 shadow-box img">
        </div>
    </div>


    <a href="#gradient-canvas" class="back-up"><i class="fa fa-arrow-up"  aria-hidden="true"></i></a>
    
</div>

<footer class="stock-footer" id="footer">
    <div class="logo">
        <h2 class="name">Hawk</h2>
        <div class="country">
            <p>
                <img src="img/icons/globe-icon.png" alt="">
                Belgium

                <div>
                    Lina Ben Cheikh<br>
                    &copy; Copyright 2023
                </div>
            </p>

            <div class="bottom-logo">
                <img src="img/logos/logo-top.png" alt="" class="shadow-box p-2">
            </div>
        </div>
        
    </div>
    <div class="links">
        <p>Recourses</p>
        <a href="#" target="_blank">FAQ</a>
        <a href="#" target="_blank">Home</a>
        <a href="#" target="_blank">Login</a>
        <a href="#" target="_blank">Logout</a>
        <a href="#" target="_blank">Register</a>
    </div>

    <div class="links">
        <p>Products</p>
        <a href="/drinks" target="_blank">Beverages</a>
        <a href="/foods" target="_blank">Foods</a>
        <a href="/frozen" target="_blank">Frozen</a>
        <a href="/fruits" target="_blank">Fruits</a>
        <a href="/veggies" target="_blank">Veggies</a>
    </div>

    <div class="links">
        <p>Overview</p>
        <a href="/about" target="_blank">About</a>
        <a href="/home" target="_blank">Account</a>
        <a href="/" target="_blank">Intro</a>
    </div>
</footer>

<canvas id="gradient-canvas" data-transition-in>

<script src="js/gradient.js"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection