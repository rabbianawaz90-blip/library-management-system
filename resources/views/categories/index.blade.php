<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
@if(session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Category List</h2>

        <a href="{{ route('categories.create') }}" class="btn btn-primary">
            Add Category
        </a>
    </div>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th width="220">Action</th>
            </tr>
        </thead>
<tbody>

@foreach($categories as $category)

<tr>

    <td>{{ $category->id }}</td>

    <td>{{ $category->name }}</td>

    <td>

<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">
    Edit
</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">

    @csrf
    @method('DELETE')

    <button type="submit" class="btn btn-danger btn-sm"
        onclick="return confirm('Are you sure you want to delete this category?')">
        Delete
    </button>

</form>

    </td>

</tr>

@endforeach

</tbody>

    </table>

</div>

</body>
</html>