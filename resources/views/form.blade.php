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
    <div class="card shadow">
        <div class="card-header text-center">Add Item to Foods table</div>
        <div class="card-body">
            <form action="/panel" method="post" name="item-form" id="item-form">
                @csrf
                <div class="form-group">
                    <label for="type">Type:</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Enter type" required>
                </div>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" required>
                    <small class="text-muted form-text">No negative numbers</small>
                </div>
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-danger">Return</a>
                    </div>
                    <div>
                        <button type="reset" class="btn btn-outline-primary">Reset Form</button>
                        <button type="submit" class="btn btn-outline-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
