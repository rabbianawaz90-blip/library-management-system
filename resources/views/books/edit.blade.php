<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Book</h2>

    <form action="{{ route('books.update', $book->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Category</label>

            <select name="category_id" class="form-control">

                @foreach($categories as $category)

                    <option value="{{ $category->id }}"
                        {{ $book->category_id == $category->id ? 'selected' : '' }}>

                        {{ $category->name }}

                    </option>

                @endforeach

            </select>
        </div>

        <div class="mb-3">
            <label>Book Title</label>

            <input type="text"
                   name="title"
                   class="form-control"
                   value="{{ $book->title }}">
        </div>

        <div class="mb-3">
            <label>Author</label>

            <input type="text"
                   name="author"
                   class="form-control"
                   value="{{ $book->author }}">
        </div>

        <div class="mb-3">
            <label>Price</label>

            <input type="number"
                   step="0.01"
                   name="price"
                   class="form-control"
                   value="{{ $book->price }}">
        </div>

        <button class="btn btn-success">
            Update Book
        </button>

        <a href="{{ route('books.index') }}" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>