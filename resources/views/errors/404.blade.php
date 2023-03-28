<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not found</title>

    {{-- Css --}}
    <link rel="stylesheet" href="css/errors/404.css">

            <!-- Link to to little logo  -->
            <link rel="icon" href="{{ asset('img/logo-top.png') }}" type="x-icon">

            {{-- link to main stylesheet --}}
            <link rel="stylesheet" href="{{ asset('css/main.css') }}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
            <!-- Fonts -->
            
            <link href= "{{ asset("https://fonts.cdnfonts.com/css/chirp-2") }}" rel="stylesheet">
            
            <style>
                @import url('https://fonts.cdnfonts.com/css/chirp-2');
            </style>
                
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href= "{{ asset("https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css") }}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-main">
    <div class="text container text-center text-white">
        <h1>Uh oh!</h1>
        <p>
            Looks like you've reached the wrong page. <br>
            I suggest you check the link you've typed,
            see here all working <a href="/stock#footer">links</a>.
        </p>
    </div>
    <div class="holder text-center">

        <div class="moon">
            <div class="crater crater1"></div>
            <div class="crater crater2"></div>
            <div class="crater crater3"></div>
            <div class="crater crater4"></div>
            <div class="crater crater5"></div>
            <div class="shadow"></div>
            <div class="eye eye-l"></div>
            <div class="eye eye-r"></div>
            <div class="mouth"></div>
            <div class="blush blush1"></div>
            <div class="blush blush2"></div>
        </div>

        <div class="orbit">
            <div class="rocket">
                <div class="window"></div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>