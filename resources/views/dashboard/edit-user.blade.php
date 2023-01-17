<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller d-flex">
        <form class="forms-sample" action="{{ route('updateStore', $users->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                    value="{{ $users->name }}" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Email</label>
                <input type="string" class="form-control" id="exampleInputEmail3" placeholder="Email"
                    value="{{ $users->email }}" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Address</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                    value="{{ $users->address }}" name="address">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                    value="{{ $users->phone }}" name="phone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail3" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
    </div>
    </div>
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>
