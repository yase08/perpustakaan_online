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
        @include('../layouts/sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('../layouts/navbar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</button>
                                <div class="dropdown-menu">
                                    @foreach ($categories as $category)
                                        <a class="dropdown-item"
                                            href="/category/{{ $category->id }}">{{ $category->category }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (Auth::user()->role == 'member')
                        <div class="row">
                            @foreach ($books as $book)
                                <div class="card ml-5 mt-3" style="width: 18rem;">
                                    <img src="{{ asset('storage/images/' . $book->cover_book) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $book->title }}</h5>
                                        <p class="card-text ">Author : {{ $book->author }}</p>
                                        <p class="card-text">Category : {{ $book->category->category }}</p>
                                        <a href="/show-book/{{ $book->id }}" class="btn btn-primary">Read
                                            More</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <!-- main-panel ends -->
                </div>
            </div>
            <!-- page-body-wrapper ends -->
        </div>
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
