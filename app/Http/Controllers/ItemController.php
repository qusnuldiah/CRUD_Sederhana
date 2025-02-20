<?php

namespace App\Http\Controllers;

use App\Models\Item; // Mengimpor model Item agar dapat digunakan dalam controller
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // Mengambil semua data dari tabel items
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    // Mengembalikan tampilan halaman tambah item
    public function create()
    {
        return view('items.create');
    }

    // Memvalidasi input agar name dan description wajib diisi
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        //Item::create($request->all());
        //return redirect()->route('items.index');

        // Menyimpan data item baru dengan hanya atribut yang diizinkan
         Item::create($request->only(['name', 'description']));
        return redirect()->route('items.index')->with('success', 'Item added successfully.');
    }

    // Menampilkan halaman detail item
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    // Menampilkan halaman formulir untuk mengedit item yang dipilih
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    // Memperbarui item yang dipilih dengan data baru dari formulir
    public function update(Request $request, Item $item)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
         
        //$item->update($request->all());
        //return redirect()->route('items.index');
        // Hanya masukkan atribut yang diizinkan
         $item->update($request->only(['name', 'description']));
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    // Menghapus item yang dipilih dari database
    public function destroy(Item $item)
    {
       // return redirect()->route('items.index');
       $item->delete();
       return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
}
