<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <div class="container-scroller d-flex">
        <!-- partial:./partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item sidebar-category">
                    <p>WIKBOOK</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <i class="mdi mdi-view-quilt menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/users">
                            <i class="mdi mdi-account menu-icon"></i>
                            <span class="menu-title">User</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/books">
                            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                            <span class="menu-title">Book</span>
                        </a>
                    </li>
                @endif
                @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">
                            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                            <span class="menu-title">Categories</span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
        <form class="forms-sample" action="{{ route('create-book') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $user->name }}" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Email</label>
                <input type="string" class="form-control" id="exampleInputEmail3" placeholder="Email" value="{{ $user->email }}" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">Address</label>
                <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Publisher" value="{{ $user->address }}"
                    name="address">
            </div>
            <div class="form-group">
                <label for="exampleSelectGender">Category Book</label>
                <select class="form-control" id="exampleSelectGender" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword4">No ISBN</label>
                <input type="text" class="form-control" id="exampleInputPassword4" placeholder="No ISBN"
                    name="isbn">
            </div>
            <div class="form-group">
                <label for="exampleTextarea1">Synopsis</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4" name="synopsis"></textarea>
            </div>
            <div class="form-group">
                <label>File upload</label>
                <input type="file" name="cover_book" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="js/off-canvas.js"></script>
        <script src="js/hoverable-collapse.js"></script>
        <script src="js/template.js"></script>
        <!-- endinject -->
        <!-- plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- Custom js for this page-->
        <script src="js/dashboard.js"></script>
        <!-- End custom js for this page-->
