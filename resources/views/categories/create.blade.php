<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Add Category</h2>

    <form action="{{ route('categories.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Category Name</label>

            <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Enter Category Name">
@error('name')

<div class="text-danger">

    {{ $message }}

</div>

@enderror
        </div>

        <button type="submit" class="btn btn-success">
            Save Category
        </button>

        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>

</body>
</html>