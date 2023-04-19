@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="{{ asset('css/categories/drinks.css') }}">

    <title>Hawk | Drinks</title>
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

        <a href="/cart" target="_blank" class="account"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart
            {{ $total }}</a>
    </div>

    <div class="holder">
        <div class="head">
            <div>
                <h1 class="pb-0 text-center text-white">Liquid Opulence</h1>
                <p class="text-center text-white">
                    Our meticulously curated drink section boasts a tantalizing array of
                    beverages, from the finest wines to the most exotic teas. <br>
                    Savor the sensory experience as you peruse our shelves, where every <br>
                    bottle and can is a liquid masterpiece waiting to be savored.
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
                <h1 style="color: #ee3966" class="ml-4 mt-4">Water</h1>
                <div class="container-xl" id="water">
                    <div class="row">
                        @foreach ($water->products as $item)
                        <div class="card">
                            <img src="{{ $item->image_url }}" class="p-2 card-img-top" style="object-fit: contain" alt="placeholder">
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
            {{-- Soda's --}}
            <div class="border-container">
                <div class="boxLeft"></div>
                <div class="boxRight"></div>
            </div>
            <div class="container-lg">
                <h1 style="color: #ee3966">Soda's</h1>

                <div class="row container" id="soda">
                    <div class="row">
                        @foreach ($soda->products as $item)
                        <div class="card">
                            <img src="{{ $item->image_url }}" class="card-img-top p-2" style="object-fit: contain" alt="placeholder">
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
            {{-- Soda's --}}
            <div class="border-container">
                <div class="boxLeft"></div>
                <div class="boxRight"></div>
            </div>
            <div class="container-lg">
                <h1 style="color: #ee3966">Juice</h1>

                <div class="row container" id="juice">
                    @foreach ($juice->products as $item)
                        <div class="card">
                            <img src="{{ $item->image_url }}" class="card-img-top p-2" style="object-fit: contain" alt="placeholder">
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
                <h1 style="color: #ee3966">Dairy products</h1>

                <div class="row container" id="dairy">
                    @foreach ($dairy->products as $item)
                        <div class="card">
                            <img src="{{ $item->image_url }}" class="card-img-top p-2" style="object-fit: contain" alt="placeholder">
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
