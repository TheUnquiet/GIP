<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Hawk | Welcome</title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/welcome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Link to to little logo  -->
    <link rel="icon" href="img/logos/logo-top.png" type="x-icon">

    <style>
        @import url('https://fonts.cdnfonts.com/css/chirp-2');
    </style>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="text-white">
        <!--Content before waves-->
        <div class="top-link p-2">
            <div>
                <a href="/" class="top-logo">Hawk</a>
                <a href="/about" class="top-logo">About</a>
            </div>

            <div>
                @if (Route::has('login'))
                    @auth
                        <a href="/account"
                            class="top-logo">{{ isset(Auth::user()->name) ? Auth::user()->name : 'none' }}</a>
                    @endauth
                @endif

                @if (Auth::user() && Auth::user()->is_admin == 1)
                    <a href="/panel" class="top-logo" target="_blank">Panel</a>
                @endif
            </div>
        </div>

        <div class="inner-header text-center">

            <div class="pt-5 text">
                {{-- Hover over me. --}}
                <h1>Hawk</h1>

                @if (Route::has('login'))
                    @auth
                        <p class="pt-3">Welcome,
                            <span>{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }} </p>
                    @endauth
                @endif

                <blockquote class="blockquote">
                    <q>Rest easy</q>
                </blockquote>

                <div class="buttons">
                    <ul class="text-center flex nav p-0">
                        @if (Route::has('login'))
                            @auth
                                <li class="d-inline p-3">
                                    <a href="{{ url('/home') }}" class="btn btn-outline-light color">Home</a>
                                </li>

                                <li class="d-inline p-3">
                                    <a href="{{ url('/logout') }}" class="btn btn-outline-light color">Logout</a>
                                </li>
                            @else
                                <li class="d-inline p-3"><a href="{{ route('login') }}"
                                        class="btn btn-outline-light color">Log in</a></li>

                                @if (Route::has('register'))
                                    <li class="d-inline p-3"><a href="{{ route('register') }}"
                                            class="btn btn-outline-light color">Register</a></li>
                                @endif
                            @endauth
                        @endif

                        <li class="d-inline p-3">
                            <a href="/stock" class="btn btn-outline-light color">Discover</a>
                        </li>
                        <li class="d-inline p-3">
                            <a href="/about" class="btn btn-outline-light color">About</a>
                        </li>
                    </ul>
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
</body>

</html>
