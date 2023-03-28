@extends('layouts.layout')

<head>

    <title>Hawk | Success</title>

    <style>
        body {
            display: grid;
            background: linear-gradient(60deg, #d2325a 0%, rgb(253, 199, 208) 100%) !important;
        }

        .box {
            place-self: center;
            min-width: 70vh;
        }

        .box img {
            border-radius: 100%;
        }

        .flex {
            /*Flexbox for containers*/
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .waves {
            position: absolute;
            width: 100%;
            height: 15vh;
            min-height: 100px;
            max-height: 150px;

            bottom: 0;
        }

        /* Animation */

        .parallax>use {
            animation: move-forever 25s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
        }

        .parallax>use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .parallax>use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .parallax>use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .parallax>use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes move-forever {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /*Shrinking for mobile*/
        @media (max-width: 400px) {
            .waves {
                height: 40px;
                min-height: 40px;
            }

            .content {
                height: 30vh;
            }
        }
    </style>
</head>

@section('content')
    <div class="box container text-center">
        <img src="https://media.tenor.com/QT16_24NkpIAAAAM/nicki-minaj-meme.gif" alt="nicki" width="250">
        <h1 class="p-3 text-white">Item added successfully!</h1>

        <a href="{{ url()->previous() }}" class="btn btn-outline-light mr-2">Go back</a>
        <a href="/foods" class="btn btn-outline-light">To Foods!</a>
    </div>

    <!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28"
            preserveAspectRatio="none" shape-rendering="auto">
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
@endsection
