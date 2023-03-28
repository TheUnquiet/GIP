@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="css/search.css">

    <title>Hawk | Search</title>
</head>

@section('content')

<div class="holder">
    <h3 class="text-center">
        Looking for something in
        <br>
        particular?
    </h3>
    <form action="">
        <div class="search-box ">
            <input type="text" placeholder="Search..">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div class="flex">
            <a href="/" class="top-logo pl-2 pr-2" target="_blank">Hawk</a>
            <a href="/stock#footer" class="top-logo pl-2 pr-2" target="_blank">Links</a>
            <a href="{{ url()->previous() }}" class="top-logo pl-2 pr-2">Return</a>
        </div>
    </form>
</div>

<canvas id="gradient-canvas" data-transition-in>

<script src="js/gradient.js"></script>
@endsection