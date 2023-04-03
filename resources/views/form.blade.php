<!doctype html>
<html lang="en">

<head>
    <title>Admin | Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link to to little logo  -->
    <link rel="icon" href="img/logos/logo-top.png" type="x-icon">

    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- Chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script type="module"  src="js/myChart"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div id="holder">
        <div class="aside text-center">
            <div class="img-container"><img src="https://media.tenor.com/QT16_24NkpIAAAAM/nicki-minaj-meme.gif"
                    alt="nicki minaj"></div>
            <div>
                <h3 class="text-white p-2">{{ isset(Auth::user()->name) ? Auth::user()->name : 'none' }} | Admin</h3>
                <ul class="list">
                    <li class="list-item p-3">
                        <a href="/welcome">Home</a>
                    </li>
                    <li class="list-item p-3 border-top">
                        <a href="/foods">Foods</a>
                    </li>
                    <li class="list-item p-3 border-top">
                        <a href="/">Intro</a>
                    </li>
                    <li class="list-item p-3 border-top">
                        <a href="{{ url()->previous() }}">Retrun</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">
            <header>
                <h1 class="text-left pb-4 pt-3"><b>Dashboard</b></h1>
            </header>

            <div class="sections">
                <div class="section">
                    <i class="fas fa-clipboard"></i>
                    <br>
                    Item list. <br>
                    Name, price, type..
                </div>
                <div class="section">
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                    <br>
                    Item list. <br>
                    Name, price, type..
                </div>
                <div class="section">
                    <i class="fas fa-cookie"></i>
                    <br>
                    Item list. <br>
                    Name, price, type..
                </div>
                <div class="section">
                    <i class="fa fa-server" aria-hidden="true"></i>
                    <br>
                    Item list. <br>
                    Name, price, type..
                </div>
            </div>
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>
    </div>
</body>

</html>
