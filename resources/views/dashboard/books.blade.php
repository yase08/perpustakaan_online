<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - Book</title>
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
        @include('../layouts/sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('../layouts/navbar')
            <div class="main-panel">
                <div class="content-wrapper">
                    <h3>Create Book</h3>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Form Create Book</h4>
                                    <form class="forms-sample" action="{{ route('create-book') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">Title</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                placeholder="Title" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Author</label>
                                            <input type="string" class="form-control" id="exampleInputEmail3"
                                                placeholder="Author" name="author">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword4">Publisher</label>
                                            <input type="text" class="form-control" id="exampleInputPassword4"
                                                placeholder="Publisher" name="publisher">
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
                                                placeholder="No ISBN" name="isbn">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea1">Synopsis</label>
                                            <textarea class="form-control" id="exampleTextarea1" rows="4" name="synopsis"></textarea>
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
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card mt-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Table Book</h4>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        No
                                                    </th>
                                                    <th>
                                                        Title
                                                    </th>
                                                    <th>
                                                        Author
                                                    </th>
                                                    <th>
                                                        Publisher
                                                    </th>
                                                    <th>
                                                        ISBN
                                                    </th>
                                                    <th>
                                                        Synopsis
                                                    </th>
                                                    <th>
                                                        Cover Book
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($books as $book)
                                                    <tr>
                                                        <td>
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td>
                                                            {{ $book->title }}
                                                        </td>
                                                        <td>
                                                            {{ $book->author }}
                                                        </td>
                                                        <td>
                                                            {{ $book->publisher }}
                                                        </td>
                                                        <td>
                                                            {{ $book->isbn }}
                                                        </td>
                                                        <td>
                                                            {{ $book->synopsis }}
                                                        </td>
                                                        <td>
                                                            <img src="storage/images/{{ $book->cover_book }}"
                                                                width="480px" height="480px">
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('editBook', $book->id) }}"
                                                                method="get">
                                                                <button
                                                                    class="btn btn-success btn-rounded btn-fw">Edit</button>
                                                            </form>
                                                            <form class="d-inline"
                                                                action="{{ route('deleteStore', $book->id) }}"
                                                                method="post">
                                                                @csrf
                                                                <button
                                                                    class="btn btn-danger btn-rounded btn-fw">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
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
</body>

</html>
