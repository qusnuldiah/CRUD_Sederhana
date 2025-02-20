<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <!-- Form untuk mengedit item yang sudah ada -->
    <form action="{{ route('items.update', $item) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Input untuk nama item dengan nilai default dari data item -->
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $item->name }}" required>
        <br>
        <!-- Input untuk deskripsi item dengan nilai default dari data item -->
        <label for="description">Description:</label>
        <textarea name="description" required>{{ $item->description }}</textarea>
        <br>
        <!-- mengirim form pembaruan -->
        <button type="submit">Update Item</button>
    </form>
    <!-- Link untuk kembali ke daftar item -->
    <a href="{{ route('items.index') }}">Back to List</a>
</body>
</html>

