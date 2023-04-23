@extends('layouts.app')

<head>
    <title>Login</title>
    {{-- Css --}}
    <link href="{{ asset('css/auth/login.css') }}" rel="stylesheet">
    {{-- Font --}}
    <link href="https://fonts.cdnfonts.com/css/chirp-2" rel="stylesheet">

    <style>
        @import url('https://fonts.cdnfonts.com/css/chirp-2');
    </style>

</head>

@section('content')

<div class="holder">
    <div class="form">
        <h1 class="head">Login</h1>
        <div class="center">
            <form action="{{ route('login') }}" method="post">
                {{-- Input Container --}}
                @csrf
                
                <div class="inputBox">
                    <input type="email" id="email" name="email" @error('email') is-invalid @enderror value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    <div class="borderLeft"></div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" id="password" name="password" @error('password') is-invamid @enderror value="{{ old('password') }}" required placeholder="Password">
                    <div class="borderLeft"></div>
                </div>
                <div class="a">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="a">
                            Forgot password?
                        </a>
                    @endif
                </div>
                
                
                {{-- Buttons --}}
                <div class="buttons">
                    <input type="submit" name="back" id="submit" value="Login" class="submit-btn m-2">
                    <a href="/welcome">
                        <input type="button" class="submit-btn m-2 " value="Back">
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

