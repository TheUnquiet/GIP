<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/main.css">
        
        {{-- Font --}}
        <link href="https://fonts.cdnfonts.com/css/chirp-2" rel="stylesheet">

        <!-- Link to little logo  -->
        <link rel="icon" href="img/logos/logo-top.png" type="x-icon">
        <title>Hawk | Home</title>

        <style>
            @import url('https://fonts.cdnfonts.com/css/chirp-2');
        </style>
    </head>

    <body>
        <div class="inner-header flex">
            <div class="container-xl">
                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>
                        {{ __('You are logged in!')}}
                    </h1>
                    <br>
                    {{-- Check if variable is set, not NULL--}}
                    <p>Hi, {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</p>
                </div>

                <div class="button">
                    <a href="/welcome" class="back-btn">
                        home
                    </a>
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