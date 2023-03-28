@extends('layouts.layout')

<head>
    <link rel="stylesheet" href="{{ asset('css/frozen.css') }}">
</head>

@section('content')

<div class="holder">
    <h1 class="display-3">Hawk | Frozen</h1>
    <div class="container flex p-4">
        <br>
        <p>
            @foreach($frozen as $item)
                <span class="red">
                    {{ $item ->product_name }}
                    <br> 
                    {{ $item ->price }}€
                    <br>
                </span>
            @endforeach       
        </p>
    </div>
</div>

@endsection