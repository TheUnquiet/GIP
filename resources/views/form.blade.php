<!doctype html>
<html lang="en">

<head>
    <title>Admin | Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Link to little logo  -->
    <link rel="icon" href="img/logos/logo-top.png" type="x-icon">

    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/auth/login.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="wrapper">

        <div class="side-panel list">
            @foreach ($categories as $category)
                <p><b>{{ $category->id }}</b>
                {{ $category->name }}</p>
            @endforeach
        </div>

        <div class="holder">
            <div class="form">
                <h1 class="head">Add Product</h1>
                <div class="center">
                    <form action="/panel" method="post" name="item-form" id="item-form">
                        @csrf
                        <div class="inputBox">
                            <input type="text" name="name" id="name" placeholder="name" required>
                            <div class="borderLeft"></div>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="description" id="description" placeholder="description" required>
                            <div class="borderLeft"></div>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="image_url" id="image_url" placeholder="image url" required>
                            <div class="borderLeft"></div>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="category_id" id="category_id" placeholder="category id" required>
                            <div class="borderLeft"></div>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="price" id="price" placeholder="price" required>
                            <div class="borderLeft"></div>
                        </div>
            
                        {{-- Buttons --}}
                        <div class="buttons">
                            <input type="submit" name="back" id="submit" value="Add" class="submit-btn m-2">
                            <input type="reset" class="submit-btn m-2 " value="Reset">
                        </div>
                    </form>
                </div>
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
</body>

</html>
