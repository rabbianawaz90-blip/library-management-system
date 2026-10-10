<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Category</h2>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Category Name</label>

            <input
                type="text"
                name="name"
                class="form-control"
                value="{{ $category->name }}">
@error('name')

<div class="text-danger">

    {{ $message }}

</div>

@enderror
        </div>

        <button class="btn btn-success">
            Update
        </button>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>