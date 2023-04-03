@extends('layouts.layout')

@section('content')

@foreach ($categories as $category)
    <div class="bg-white text-primary m-4 shadow p-4">{{ $category->name }}</div>

    @foreach ($category->children as $child)
        <div class="bg-white text-primary m-4 shadow p-4">{{ $child->name }}</div>

        @foreach ($child->children as $child2)
            <div class="bg-white text-primary m-4 shadow p-4">{{ $child2->name }}</div>
        @endforeach

    @endforeach
    
@endforeach

@endsection