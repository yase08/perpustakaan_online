<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DOcument</title>
    <style>
        body {
            font-family: Arial, sans-serif; 
        }
    </style>
</head>

<body>
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-title"></div>
                <div class="row">
                    <img src="storage/images/{{$book->cover_book}}" alt="{{ $book->cover_book }}">
                    <h6>{{ $book->synopsis }}</h6>
                </div>
            </div>
        </div>
    </div>
    </script>
</body>

</html>
