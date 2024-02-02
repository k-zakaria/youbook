<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <title>Books</title>
</head>
<div class="container m-5">
  <div class="table-responsive">
    <div class="mb-2"><a class="btn btn-outline-dark mt-auto" href="{{ route('books.create' ) }}">Add Category</a></div>
    <table class="table table-bordered table-striped text-center">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>Books</th>
          <th>Action</th>
        </tr>
      </thead>
      @foreach ($book as $books)
      <tbody>
        <tr>
          <td>{{$books->id}}</td>
          <td>
            <div>
              <img src="" alt="jsdkf">
            </div>
            <div class="co">
              <h5>{{$books->title}} </h5>
              <p>{{$books->autor}} </p>
              <p>{{$books->description}} </p>
            </div>
          </td>
          <td class="action-buttons">
            <div class="card-footer">
              <div class="row">
                <div class="col-sm">
                  <a href="{{ route('books.edit', $books->id) }}" class="btn btn-primary btn-sm">Edit</a>
                </div>
                <form action="{{ route('books.destroy', $books->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                      <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                    </svg></button>
                </form>
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>
  </div>
</div>
<script src="./assets/validation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->

</body>

</html>