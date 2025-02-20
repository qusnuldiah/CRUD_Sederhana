<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController; // Mengimpor ItemController agar dapat digunakan dalam routing
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // Menampilkan halaman utama (welcome)
});

Route::resource('items', ItemController::class); // Membuat rute resource untuk CRUD item secara otomatis
