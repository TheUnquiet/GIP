<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/main.css">

    {{-- Font --}}
    <link href="https://fonts.cdnfonts.com/css/chirp-2" rel="stylesheet">
    <!-- Link to little logo  -->
    <link rel="icon" href="img/logos/logo-top.png" type="x-icon">

    {{-- Icons and all --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/cart.css">

    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hawk | Cart</title>

    <style>
        @import url('https://fonts.cdnfonts.com/css/chirp-2');
    </style>
</head>

<body>
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
