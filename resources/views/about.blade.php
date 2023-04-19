<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hawk | About us</title>

    <!-- Link to to little logo  -->
    <link rel="icon" href="img/logos/logo-top.png" type="x-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
        use App\Http\Controllers\ProductController;
        $total = ProductController::cartItem();
    ?>
    <div class="wrapper">
        <div class="top-link p-2">
            <div>
                <a href="/welcome" class="top-logo" rel="noopener noreferrer"><i class="fa fa-home" aria-hidden="true"></i></a>
                <a href="/" class="top-logo">Hawk</a>
                <a href="/about" class="top-logo">About</a>
            </div>
            <div style="">
                @if (Route::has('login'))
                    @auth
                        <a href="/myorders" class="top-logo" target="_blank" rel="noopener noreferrer">Orders</a>

                    @endauth
                @endif

                <a href="/cart" target="_blank" class="top-logo"><i class="fa fa-cart-plus" aria-hidden="true"></i> Cart {{ $total }}</a>
                <a href="/account" class="top-logo">{{ isset(Auth::user()->name) ? Auth::user()->name : "" }}</a>
        
                @if (Auth::user() && Auth::user()->is_admin == 1)
                    <a href="/panel" class="top-logo" target="_blank">Panel</a>
                @endif
            </div>
        </div>
        <div class="container form mt-5">
            <h1 class="display-4">Discover the Story</h1>
            <p class="mb-0 h4">The creator herself</p>

            <div class="creator">
                <div class="text-left">
                    <img src="img/lina.jpg" width="220" style="float: left" class="rounded-circle mr-5" alt="">
                    <p class="mt-4">
                        Lina is a determined and ambitious 17-year-old girl who decided to create her own 
                        company called "Hawk". With her entrepreneurial spirit, she established an online 
                        store that sells fashionable and trendy clothing for teenagers. Lina worked tirelessly, using her creativity and business skills, 
                        to make her store stand out from the rest. She focused on every detail,     
                        from the website design to the quality of the products, 
                        o make sure her customers had a great shopping experience. 
                        Thanks to her hard work and dedication, Hawk 
                        became a successful and stylish online store, making Lina proud of her achievements.
                        <br>
                        <b>"She's an icon, she's a legend and she is the moment."</b> <br><br>
                        <div class="btns">
                            <div>
                                <a href="mailto:lisxaa@gmail.com" class="mailto"><i class="fa fa-address-book" aria-hidden="true"></i> Contact</a>
                                <a href="tel:+32489553270" class="mailto ml-1"><i class="fa fa-address-book" aria-hidden="true"></i> Phone</a>
                            </div>
    
                            <div>
                                <a href="/welcome" class="mailto ml-2"><i class="fa fa-home" aria-hidden="true"></i>Back</a>
                            </div>
                        </div>
                    </p>
                </div>
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
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,.7)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
    <!--Waves end-->
    <script src="js/bubble-hover.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>

</html>
