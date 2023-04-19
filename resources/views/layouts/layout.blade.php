<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hawk</title>

        <!-- Link to little logo  -->
        <link rel="icon" href="{{ asset('img/logos/logo-top.png') }}" type="x-icon">

        {{-- link to main stylesheet --}}
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
        <!-- Fonts -->
        
        <link href= "{{ asset("https://fonts.cdnfonts.com/css/chirp-2") }}" rel="stylesheet">
        
        <style>
            @import url('https://fonts.cdnfonts.com/css/chirp-2');
        </style>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href= "{{ asset("https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css") }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         
    </head>
    <body style="background: #ececec;">
        @yield('content')
    </body>
</html>