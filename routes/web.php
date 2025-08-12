<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// --- Controller untuk Halaman Publik ---
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicNewsController; // Pastikan controller ini digunakan
use App\Http\Controllers\PublicServiceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\Auth\LoginController;

// --- Controller untuk Halaman Admin ---
use App\Http\Controllers\AdminBeritaController;


// =========================================================================
// == RUTE PUBLIK
// =========================================================================

Route::get('/', [HomeController::class, 'index'])->name('home');

// --- PERBAIKAN UNTUK SEMUA LINK BERITA ---
Route::get('/fokus-bsi', [PublicNewsController::class, 'showFokusBsiNews'])->name('news.fokus');
Route::get('/berita-bsi', [PublicNewsController::class, 'showBsiNews'])->name('news.bsi');
Route::get('/berita-klhk', [PublicNewsController::class, 'showKlhNews'])->name('news.klhk');
Route::get('/berita-standar', [PublicNewsController::class, 'showStandarNews'])->name('news.standar');
Route::get('/berita/{slug}', [PublicNewsController::class, 'showDetail'])->name('news.show');
// --- AKHIR DARI PERBAIKAN ---


// Rute Publik Lainnya (Tidak diubah)
Route::get('/profil', fn() => view('profil'));
Route::get('/services', [PublicServiceController::class, 'index']);
Route::get('/locations', [LocationController::class, 'index']);
Route::get('/regulasi/{title}', fn($title) => view('regulasi', ['pageTitle' => ucwords(str_replace('-', ' ', $title))]))->name('regulasi.show');
Route::get('/jdih-klhk', fn() => view('regulasi', ['pageTitle' => 'JDIH KLHK']))->name('jdih.klhk');
Route::get('/agenda', fn() => view('agenda'))->name('agenda.index');
Route::get('/dasar-hukum', fn() => view('dasar_hukum'));
Route::get('/tugas-dan-fungsi', fn() => view('tugas_dan_fungsi'));
Route::get('/struktur-organisasi', fn() => view('struktur_organisasi'));
Route::get('/download/{title}', [DownloadController::class, 'show'])->name('download.show');
Route::get('/itto', fn() => view('itto'));
Route::get('/galeri-foto', fn() => view('galeri_foto'));
Route::get('/galeri-video', fn() => view('galeri_video'));
Route::get('/kontak', fn() => view('kontak'));
Route::get('/faq', fn() => view('faq'));
Route::get('/peta-situs', fn() => view('peta_situs'));
Route::get('/privacy-policy', fn() => view('privacy_policy'));
Route::get('/terms-of-service', fn() => view('terms_of_service'));
Route::get('/sitemap.xml', fn() => response()->file(public_path('sitemap.xml')));
Route::get('/search', fn() => view('search'));


// --- Rute Autentikasi ---
Auth::routes();
Route::get('/logout', [LoginController::class, 'logout'])->name('logout.get');


// --- Rute ADMIN ---
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('berita', AdminBeritaController::class)->except(['show'])->parameters(['berita' => 'berita']);
});


// --- Rute Pengguna Login ---
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');


// --- Fallback ---
Route::fallback(function() {
    return view('errors.404');
});