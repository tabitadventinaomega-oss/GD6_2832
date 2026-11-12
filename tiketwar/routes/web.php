
<?php

use App\Http\Controllers\KonserController;
use Illuminate\Support\Facades\Route;
use App\Models\Konser;
use App\Models\Promotor;


Route::get('/', function () {
    $jumlahKonser = Konser::count();
    $jumlahPromotor = Promotor::count();
    $totalSisa = Konser::sum('sisa');

    return view('home', compact(
        'jumlahKonser',
        'jumlahPromotor',
        'totalSisa'
    ));
})->name('home');


Route::view('/tentang', 'about')->name('tentang');

Route::get('/konser', [KonserController::class, 'index'])->name('konser.index');

Route::get('/konser/{id}', [KonserController::class, 'show'])
    ->whereNumber('id')->name('konser.detail');

Route::view('/kontak', 'contact')->name('kontak');
