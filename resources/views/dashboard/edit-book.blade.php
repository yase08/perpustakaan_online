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
        <form class="forms-sample" action="{{ route('updateBook', $book->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1">Title</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                    value="{{ $book->title }}" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail3">Author</label>
                <input type="string" class="form-control" id="exampleInputEmail3" placeholder="Email"
                    value="{{ $book->author }}" name="author">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">publisher</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                    value="{{ $book->publisher }}" name="publisher">
            </div>
            <div class="form-group">
                <label for="exampleInputName1">ISBN</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                    value="{{ $book->isbn }}" name="isbn">
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
                <label for="exampleTextarea1">Synopsis</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4" name="synopsis" value="{{ $book->synopsis }}"></textarea>
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
