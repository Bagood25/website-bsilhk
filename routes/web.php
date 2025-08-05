<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PublicServiceController;
use App\Http\Controllers\LocationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda bisa mendaftarkan rute web untuk aplikasi Anda.
| Rute-rute ini dimuat oleh RouteServiceProvider dan akan
| diberikan ke grup middleware "web".
|
*/

// Rute untuk halaman utama
Route::get('/', [HomeController::class, 'index']);

// Rute untuk berita
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Rute untuk daftar layanan publik
Route::get('/services', [PublicServiceController::class, 'index']);

// Rute untuk daftar lokasi
Route::get('/locations', [LocationController::class, 'index']);

Route::get('/profil', function () {
    return view('profil');
});
