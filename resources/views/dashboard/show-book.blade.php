<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - Book</title>
    <!-- base:css -->
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller d-flex">
        @include('../layouts/sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('../layouts/navbar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <section class="section">
                            <div class="container text-center">
                                <div class="row justify-content-center">
                                    <div class="col">
                                        <div class="card m-5">
                                            <div class="card-body">
                                                <img src="{{ asset('storage/images/' . $book->cover_book) }}"
                                                    class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $book->title }}</h5>
                                                    <p class="card-text ">Author : {{ $book->author }}</p>
                                                    <p class="card-text">Category : {{ $book->category->category }}</p>
                                                    <p class="card-text">Publisher : {{ $book->publisher }}</p>
                                                    <p class="card-text">No ISBN : {{ $book->isbn }}</p>
                                                    <p class="card-text">Synopsis : {{ $book->synopsis }}</p>
                                                    <a href="/pdf/{{ $book->id }}" class="btn btn-warning">Download Book</a>
                                                    <a href="/dashboard" class="btn btn-danger">Back</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/file-upload.js"></script>
</body>

</html>
