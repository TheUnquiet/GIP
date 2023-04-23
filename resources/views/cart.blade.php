<!DOCTYPE html>
<html>

<head>
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="css/home.css">
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
    <link rel="stylesheet" href="css/main.css">

    {{-- Font --}}
    <link href="https://fonts.cdnfonts.com/css/chirp-2" rel="stylesheet">
<<<<<<< HEAD
    <!-- Link to little logo  -->
    <link rel="icon" href="img/logos/logo-top.png" type="x-icon">

    {{-- Icons and all --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/cart.css">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

=======
    <!-- Link to to little logo  -->
    <link rel="icon" href="img/logos/logo-top.png" type="x-icon">
    {{-- Icons and all --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
    <title>Hawk | Cart</title>

    <style>
        @import url('https://fonts.cdnfonts.com/css/chirp-2');
<<<<<<< HEAD
=======

        .red {
            float: right;
        }

        .dark {
            float: left;
        }

        .remove-btn { 
            border-radius: 100%;
            color: #ee3966;
            border: none;

            font-size: 26px;

            margin-right: 10px;
            transition: .15s;

            display: inline-block;
        }

        .remove-btn:hover {
            color: #ee3966;

            transform: translateY(-2px)
        }

        .container-xxl {
            max-width: 800px;
        }
        .container-xxl {
            background-color: rgba(236, 236, 236, 0.8);
            padding: 50px;
            box-shadow: 16px 16px 45px #888888;
            border-radius: 20px;

            width: 800px;
            height: auto;
        }

        .container-xxl h1 { margin: 6px; }

        .text-primary { color: rgb(0, 89, 255); }

        .bold { font-weight: 500; }

        .buttons a:hover { text-decoration: none; }
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
    </style>
</head>

<body>
<<<<<<< HEAD
    <?php
    use App\Http\Controllers\ProductController;
    $total = ProductController::cartItem();
    ?>
    <div class="top-link p-2">
        <div>
            <a href="/welcome" class="top-logo" rel="noopener noreferrer"><i class="fa fa-home"
                    aria-hidden="true"></i></a>
            <a href="/" class="top-logo">Hawk</a>
            <a href="/about" class="top-logo">About</a>
        </div>
        <div style="">
            @if (Route::has('login'))
                @auth
                    <a href="/myorders" class="top-logo" target="_blank" rel="noopener noreferrer">Orders</a>

                @endauth
            @endif
            
            <a href="/account" class="top-logo">{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}</a>

            @if (Auth::user() && Auth::user()->is_admin == 1)
                <a href="/panel" class="top-logo" target="_blank">Panel</a>
            @endif
        </div>
    </div>
    <div class="inner-container">
        <div class="container-xxl">
            <h1 class="pb-2"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Your cart</h1>
            @foreach ($products as $item)
                <div class="row">
                    <div class="col-sm-3"><img src="{{ $item->image_url }}" alt="product"></div>
                    <div class="col-sm-3">
                        <p class="h3 bold">{{ $item->name }} </p>
                    </div>
                    <div class="col-sm-3">
                        <p class="h4 bold">{{ $item->description }}</p>
                    </div>
                    <div class="col-sm-2">
                        <p class="h4 bold">€ {{ $item->price }}</p>
                    </div>
                    <div class="col-sm-1">
                        <a href="/remove-cart{{ $item->cart_id }}">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            @endforeach

            <div class="buttons mt-5">
=======
    <div class="inner-header flex">
        <div class="container-xxl text-left">
            <h1 class="pb-2"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Your cart</h1>

            @foreach ($products as $item)
                <p class="">
                    <span class="dark">
                        <a href="/remove-cart{{ $item->cart_id }}" class="remove-btn" value="Remove"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        <span class="mt-5">{{ $item->name }}</span> 
                        <span class="text-primary">{{ $item->description }}</span>
                    </span>
                    <span class="red bold">
                        €{{ $item->price }}
                    </span>
                    <br>
                </p>
            @endforeach

            <div class="buttons mt-">
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
                <a href="{{ url()->previous() }}" class="back-btn">Go Back</a>
                <a href="/ordernow" class="back-btn">Checkout!</a>
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
</body>

</html>
