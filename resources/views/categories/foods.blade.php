@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="{{ asset('css/categories/foods.css') }}">

    <title>Hawk | Foods</title>
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
    <a href="/cart" target="_blank" class="account"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart {{ $total }}</a>
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
<<<<<<< HEAD
            <h1 style="color: #ee3966">Bread & Bakery</h1>
            <div class="container-xl" id="breadBakery">
                <div class="row">
                    @foreach ($breadBakery->products as $item)
                    <div class="card">
                        <img src="{{ $item->image_url }}" class="card-img-top p-2" style="object-fit: contain" alt="placeholder">
=======
            <h1 style="color: #ee3966" class="ml-4 mt-4">Bread & Bakery</h1>
            <div class="container-xl" id="water">
                <div class="row">
                    @foreach ($breadBakery->products as $item)
                    <div class="card">
                        <img src="{{ $item->image_url }}" class="p-2 card-img-top" style="object-fit: contain" alt="placeholder">
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
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
<<<<<<< HEAD

=======
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
        <div class="border-container">
            <div class="boxLeft"></div>
            <div class="boxRight"></div>
        </div>
        <div class="container-lg">
            <h1 style="color: #ee3966">Cereal</h1>
<<<<<<< HEAD
            <div class="container-xl" id="cereal">
                <div class="row">
                    @foreach ($cereal->products as $item)
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
=======
            <div class="row container" id="cereal">
                @foreach ($cereal->products as $item)
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
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
            </div>
        </div>
        <div class="border-container">
            <div class="boxLeft"></div>
            <div class="boxRight"></div>
        </div>
        <div class="container-lg">
            <h1 style="color: #ee3966">Meats</h1>
<<<<<<< HEAD
            <div class="container-xl" id="meat">
                <div class="row">
                    @foreach ($meat->products as $item)
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
=======

            <div class="row container" id="meat">
                @foreach ($meat->products as $item)
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
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
            </div>
        </div>

        <div class="border-container">
            <div class="boxLeft"></div>
            <div class="boxRight"></div>
        </div>
        <div class="container-lg">
            <h1 style="color: #ee3966">Fish</h1>
<<<<<<< HEAD
            <div class="container-xl" id="fish">
                <div class="row">
                    @foreach ($fish->products as $item)
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
=======

            <div class="row container" id="fish">
                @foreach ($fish->products as $item)
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
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
            </div>
        </div>

        <div class="border-container">
            <div class="boxLeft"></div>
            <div class="boxRight"></div>
        </div>
        <div class="container-lg">
<<<<<<< HEAD
            <h1 style="color: #ee3966">Baking & Refrigeration</h1>
            <div class="container-xl" id="baking">
                <div class="row">
                    @foreach ($baking->products as $item)
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
=======
            <h1 style="color: #ee3966">Baking</h1>

            <div class="row container" id="baking">
                @foreach ($baking->products as $item)
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
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
            </div>
        </div>

        <div class="border-container">
            <div class="boxLeft"></div>
            <div class="boxRight"></div>
        </div>
        <div class="container-lg">
            <h1 style="color: #ee3966">Pasta & Rice</h1>
<<<<<<< HEAD
            <div class="container-xl" id="pastaRice">
                <div class="row">
                    @foreach ($pastaRice->products as $item)
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
=======

            <div class="row container" id="pastaRice">
                @foreach ($pastaRice->products as $item)
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
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
            </div>
        </div>

        <div class="border-container">
            <div class="boxLeft"></div>
            <div class="boxRight"></div>
        </div>
        <div class="container-lg">
            <h1 style="color: #ee3966">Sauce</h1>
<<<<<<< HEAD
            <div class="container-xl" id="sauce">
                <div class="row">
                    @foreach ($sauce->products as $item)
                    <div class="card">
                        <img src="{{ $item->image_url }}" class="card-img-top pt-4" style="object-fit: contain" alt="placeholder">
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
=======

            <div class="row container" id="sauce">
                @foreach ($sauce->products as $item)
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

        <div class="border-container">
            <div class="boxLeft"></div>
            <div class="boxRight"></div>
        </div>
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
    </div>
    <a href="#gradient-canvas" class="back-up"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
</div>
<canvas id="gradient-canvas" data-transition-in></canvas>
<script src="js/gradient.js"></script>

@endsection