<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <div class="holder">
        <div class="form">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
                <h1 class="head">Add Item to Food table</h1>
                <div class="inputs">
                    <form action="/panel" method="post" name="item-form" id="item-form">
                        @csrf
                        <div class="inputBox">
                            <input type="text" name="type" id="type" class="form-control" required placeholder="Type">
                            <div class="borderLeft"></div>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="name" id="name" class="form-control" required placeholder="Name">
                            <div class="borderLeft"></div>                   
                        </div>
                        <div class="inputBox">
                            <input type="text" name="price" id="price" class="form-control" required placeholder="Price €">
                            <div class="borderLeft"></div>
                        </div>
    
                        <div class="buttons">
                            <input type="submit" class="submit-btn" value="Submit" style="margin-right: 6px;">
                            <input type="reset" class="submit-btn" value="Reset">
                            <a href="{{ url()->previous() }}" style="margin-left: auto;">
                                <input type="button" class="submit-btn" value="Back">
                            </a>
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
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />                </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,.7)" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,.3)" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />                </g>
        </svg>
    </div>
    <!--Waves end-->
  </body>
</html>