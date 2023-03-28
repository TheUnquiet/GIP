@extends('layouts.app')

<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>

@section('content')
<div class="inner-header flex">
    <div class="form">
        <h1 class="head">Register</h1>
        <div class="flex">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="inputBox">
                    <input id="name" type="text" placeholder="Name" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name">
                    <div class="borderleft"></div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="inputBox">
                    <input type="email" id="email" placeholder="Email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email">
                    <div class="borderleft"></div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="inputBox">
                    <input type="password" id="password" placeholder="Password" @error('password') is-invalid @enderror name="password" required autocomplete="new-password">
                    <div class="borderleft"></div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="inputBox">
                    <input type="password" id="password-confirm" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                    <div class="borderleft"></div>
                </div>
                <div class="buttons">
                    <input type="submit" class="submit-btn m-4" value="Register">
                    <a href="/welcome">
                        <input type="button" class="submit-btn m-4" value="back">
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection