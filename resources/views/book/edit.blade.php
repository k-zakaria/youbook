<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Books</title>
</head>
<body>

<div class="container h-100 mt-5">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-10 col-md-8 col-lg-6">
            <h3>Update Book</h3>
            <form action="{{ route('books.update', $book->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
                </div>
                <div class="form-group">
                    <label for="autor">Author</label>
                    <input type="text" class="form-control" id="autor" name="author" value="{{ $book->author }}" required>
                </div>
                <div class="form-group">
                    <label for="body">Description</label>
                    <textarea class="form-control" id="body" name="description" rows="3" required>{{ $book->description }}</textarea>
                </div>
                <button type="submit" class="btn mt-3 btn-primary">Update Book</button>
            </form>
        </div>
    </div>
</div>

<script src="./assets/validation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->

</body>

</html>
