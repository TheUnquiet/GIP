@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="{{ asset('css/auth/account.css') }}">
    <title>Hawk | Account</title>
</head>

@section('content')
    <div class="wrapper p-0">
        <div class="container-sm">
            <h2>Account</h2>
            <p class="m-2">
                Email:
                <span class="red">{{ isset(Auth::user()->email) ? Auth::user()->email : "none" }}</span>
                <br>
                Name:
                <span class="red">{{ isset(Auth::user()->name) ? Auth::user()->name : "none" }}</span>
                <br><br>
                Joined in,
                <span class="time">{{ isset(Auth::user()->created_at) ? Auth::user()->created_at : "none" }}</span>
            </p>
            <div class="row">
                <a href="{{ url()->previous() }}" class="back-btn mr-2">Return</a>
                <a href="/logout" class="back-btn ml-2">Logout</a>
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
@endsection
