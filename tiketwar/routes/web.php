
<?php

use App\Http\Controllers\KonserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/tentang', 'about')->name('tentang');

// Route daftar konser
Route::get('/konser', [KonserController::class, 'index'])
    ->name('konser.index');

// Route tambah konser
Route::get('/konser/create', [KonserController::class, 'create'])
    ->name('konser.create');

// Route simpan konser
Route::post('/konser', [KonserController::class, 'store'])
    ->name('konser.store');

// Route detail konser
Route::get('/konser/{id}', [KonserController::class, 'show'])
    ->whereNumber('id')
    ->name('konser.detail');

// Route kontak
Route::view('/kontak', 'kontak')->name('kontak');
