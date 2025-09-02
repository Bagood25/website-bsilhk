<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// --- Controller untuk Halaman Publik ---
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicNewsController;
use App\Http\Controllers\PublicServiceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AgendaController; // 1. TAMBAHKAN: Panggil AgendaController publik
use App\Http\Controllers\VideoController;

// --- Controller untuk Halaman Admin ---
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\DownloadController as AdminDownloadController;
use App\Http\Controllers\Admin\AgendaController as AdminAgendaController; // 2. TAMBAHKAN: Panggil AgendaController admin
use App\Http\Controllers\Admin\VideoController as AdminVideoController;

// =========================================================================
// == RUTE PUBLIK
// =========================================================================

Route::get('/', [HomeController::class, 'index'])->name('home');

// --- Rute Berita ---
// Rute untuk menampilkan berita publik
Route::get('/berita-p2semh', [PublicNewsController::class, 'showFokusBsiNews'])->name('berita-p2semh');
Route::get('/berita-kehutanan', [PublicNewsController::class, 'showBsiNews'])->name('berita-kehutanan');
Route::get('/berita/{slug}', [PublicNewsController::class, 'showDetail'])->name('news.show');

// Rute Publik Lainnya
Route::get('/profil', fn() => view('profil'));
Route::get('/services', [PublicServiceController::class, 'index']);
Route::get('/locations', [LocationController::class, 'index']);
Route::get('/regulasi/{title}', fn($title) => view('regulasi', ['pageTitle' => ucwords(str_replace('-', ' ', $title))]))->name('regulasi.show');
Route::get('/jdih-klhk', fn() => view('regulasi', ['pageTitle' => 'JDIH KLHK']))->name('jdih.klhk');

// 3. UBAH: Rute agenda dari statis menjadi dinamis
Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda.index');
Route::get('/dasar-hukum', fn() => view('dasar_hukum'));
Route::get('/tugas-dan-fungsi', fn() => view('tugas_dan_fungsi'));
Route::get('/struktur-organisasi', fn() => view('struktur_organisasi'));
Route::get('/download/{kategori}', [DownloadController::class, 'index'])->name('download.kategori');
Route::get('/itto', fn() => view('itto'));
Route::get('/galeri-foto', [GaleriController::class, 'index'])->name('gallery.index');
Route::get('/galeri-video', [VideoController::class, 'index'])->name('galeri.video');
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


// =========================================================================
// == RUTE ADMIN
// =========================================================================
Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('berita', AdminBeritaController::class)->except(['show'])->parameters(['berita' => 'berita']);
    Route::resource('photos', PhotoController::class)->except(['show', 'edit', 'update']);
    // Rute untuk Download yang sudah dimodifikasi
    Route::get('/downloads/{kategori}', [AdminDownloadController::class, 'index'])->name('downloads.index');
    Route::get('/downloads/{kategori}/create', [AdminDownloadController::class, 'create'])->name('downloads.create');
    Route::post('/downloads', [AdminDownloadController::class, 'store'])->name('downloads.store');
    Route::get('/downloads/{download}/edit', [AdminDownloadController::class, 'edit'])->name('downloads.edit');
    Route::put('/downloads/{download}', [AdminDownloadController::class, 'update'])->name('downloads.update');
    Route::delete('/downloads/{download}', [AdminDownloadController::class, 'destroy'])->name('downloads.destroy');

    // 4. TAMBAHKAN: Rute resource untuk manajemen agenda di panel admin
    Route::resource('agenda', AdminAgendaController::class)->except(['show']);
    Route::resource('videos', AdminVideoController::class)->except(['show']);
});


// --- Rute Pengguna Login ---
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.home');


// --- Fallback ---
Route::fallback(function() {
    return view('errors.404');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
