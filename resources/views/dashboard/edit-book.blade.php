<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Spica Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
    <div class="container-scroller d-flex">
        <!-- partial:../../partials/_sidebar.html -->

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
                <li class="nav-item">
                    <a class="nav-link" href="/users">
                        <i class="mdi mdi-account menu-icon"></i>
                        <span class="menu-title">Data</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/books">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Book</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/categories">
                        <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                        <span class="menu-title">Categories</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item">
                            <h4 class="mb-0 font-weight-bold d-none d-xl-block">Mar 12, 2019 - Apr 10, 2019</h4>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
                <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <input type="text" class="form-control" disabled placeholder="Check Menu In Sidebar"
                                    aria-label="search" aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Form Update Book</h4>
                                    <form class="forms-sample" action="{{ route('updateBook', $book->id) }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">Title</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Title" name="title" value="{{ $book->title }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Author</label>
                                            <input type="string" class="form-control" id="exampleInputEmail3"
                                                placeholder="Author" name="author" value="{{ $book->author }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Publisher</label>
                                            <input type="text" class="form-control" id="exampleInputPassword4"
                                                placeholder="Publisher" name="publisher" value="{{ $book->publisher }}">
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
                                            <input type="text" class="form-control" id="exampleInputPassword4"
                                                placeholder="No ISBN" name="isbn" value="{{ $book->isbn }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Synopsis</label>
                                            <textarea class="form-control" id="exampleTextarea1" rows="4" name="synopsis" value="{{ $book->synopsis }}"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>File upload</label>
                                            <input type="file" name="cover_book" class="file-upload-default">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info" disabled
                                                    placeholder="Upload Image">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary"
                                                        type="button">Upload</button>
                                                </span>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                        <!-- partial -->
                                    </form>
                                </div>
                                <!-- main-panel ends -->
                            </div>
                            <!-- page-body-wrapper ends -->
                        </div>
                        <!-- partial -->
                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
            <!-- container-scroller -->
            <!-- base:js -->
            <script src="../../vendors/js/vendor.bundle.base.js"></script>
            <!-- endinject -->
            <!-- inject:js -->
            <script src="../../js/off-canvas.js"></script>
            <script src="../../js/hoverable-collapse.js"></script>
            <script src="../../js/template.js"></script>
            <!-- endinject -->
            <!-- plugin js for this page -->
            <!-- End plugin js for this page -->
            <!-- Custom js for this page-->
            <script src="../../js/file-upload.js"></script>
            <!-- End custom js for this page-->
</body>

</html>
