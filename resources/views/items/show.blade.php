<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Item List</title> 
</head> 
<body> 
    <h1>Items</h1> 
    @if(session('success')) 
        <p>{{ session('success') }}</p> 
    @endif 
    <!-- Untuk menambahkan item baru -->
    <a href="{{ route('items.create') }}">Add Item</a> 
    <ul> 
        <!-- Melakukan looping untuk menampilkan daftar item -->
        @foreach ($items as $item) 
            <li> 
                <!-- Menampilkan nama item -->
                {{ $item->name }} -
                <!-- Link untuk mengedit item -->
                <a href="{{ route('items.edit', $item) }}">Edit</a>
                <!-- Form untuk menghapus item --> 
                <form action="{{ route('items.destroy', $item) }}" method="POST" style="display:inline;"> 
                    @csrf 
                    @method('DELETE') 
                    <button type="submit">Delete</button> 
                </form> 
            </li> 
        @endforeach 
    </ul> 
</body> 
</html>
