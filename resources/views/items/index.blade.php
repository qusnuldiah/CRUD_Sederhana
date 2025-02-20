<!DOCTYPE html>
<html lang="en">
<head>
    <title>Item List</title>
</head>
<body>
    <h1>Items</h1>
    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <!-- Link untuk menambahkan item baru -->
    <a href="{{ route('items.create') }}">Add Item</a>
    <ul>
        <!-- Looping untuk menampilkan semua item dalam daftar -->
        @foreach ($items as $item)
            <li>
                {{ $item->name }} - 
                <!-- Link untuk mengedit item -->
                <a href="{{ route('items.edit', $item) }}">Edit</a>
                <!-- Formulir untuk menghapus item -->
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button> <!-- Menggunakan metode DELETE untuk penghapusan -->
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
