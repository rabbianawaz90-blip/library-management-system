<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2>Books List</h2>

        <a href="{{ route('books.create') }}" class="btn btn-primary">
            Add Book
        </a>

    </div>

    @if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>

                <th>ID</th>

                <th>Category</th>

                <th>Title</th>

                <th>Author</th>

                <th>Price</th>

                <th width="220">Action</th>

            </tr>

        </thead>

        <tbody>

            @foreach($books as $book)

            <tr>

                <td>{{ $book->id }}</td>

                <td>{{ $book->category->name }}</td>

                <td>{{ $book->title }}</td>

                <td>{{ $book->author }}</td>

                <td>{{ $book->price }}</td>

                <td>

                    <a href="{{ route('books.edit',$book->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('books.destroy',$book->id) }}" method="POST" style="display:inline;">

                        @csrf
                        @method('DELETE')

                  <form action="{{ route('books.destroy', $book->id) }}"
      method="POST"
      style="display:inline;">

    @csrf
    @method('DELETE')

    <button class="btn btn-danger btn-sm"
            onclick="return confirm('Are you sure you want to delete this book?')">

        Delete

    </button>

</form>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

</body>
</html>