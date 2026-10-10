<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Add Book</h2>

    <form action="{{ route('books.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Category</label>

            <select name="category_id" class="form-control">

                <option value="">Select Category</option>

                @foreach($categories as $category)

                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>

                @endforeach

            </select>

        </div>

        <div class="mb-3">

            <label class="form-label">Book Title</label>

            <input
                type="text"
                name="title"
                class="form-control"
                value="{{ old('title') }}">

        </div>
@error('title')
<div class="text-danger">{{ $message }}</div>
@enderror
        <div class="mb-3">

            <label class="form-label">Author</label>

            <input
                type="text"
                name="author"
                class="form-control"
                value="{{ old('author') }}">

        </div>

        <div class="mb-3">

            <label class="form-label">Price</label>

            <input
                type="number"
                step="0.01"
                name="price"
                class="form-control"
                value="{{ old('price') }}">

        </div>

        <button type="submit" class="btn btn-success">
            Save Book
        </button>

        <a href="{{ route('books.index') }}" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>