<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PublicServiceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DownloadController;

// --- Rute PUBLIK (tidak memerlukan login) ---
Route::get('/', [HomeController::class, 'index']);

// ✅ Route untuk daftar berita (publik) dan detail berita (slug)
Route::get('/news', [NewsController::class, 'publicIndex'])->name('news.index');
Route::get('/news/{news:slug}', [NewsController::class, 'show'])->name('news.show'); // ✅ pakai model binding berdasarkan slug

// Halaman profil
Route::get('/profil', function () {
    return view('profil');
});

// Layanan publik
Route::get('/services', [PublicServiceController::class, 'index']);

// Lokasi
Route::get('/locations', [LocationController::class, 'index']);

// Regulasi
Route::get('/regulasi/{title}', function ($title) {
    $formattedTitle = ucwords(str_replace('-', ' ', $title));
    return view('regulasi', ['pageTitle' => $formattedTitle]);
})->name('regulasi.show');

// Halaman khusus
Route::get('/jdih-klhk', fn() => view('regulasi', ['pageTitle' => 'JDIH KLHK']))->name('jdih.klhk');
Route::get('/berita-klhk', fn() => view('berita-klhk'));
Route::get('/agenda', fn() => view('agenda'))->name('agenda.index');
Route::get('/dasar-hukum', fn() => view('dasar_hukum'));
Route::get('/tugas-dan-fungsi', fn() => view('tugas_dan_fungsi'));
Route::get('/struktur-organisasi', fn() => view('struktur_organisasi'));

// Download
Route::get('/download/{title}', [DownloadController::class, 'show'])->name('download.show');

// Lain-lain
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

// === Rute yang memerlukan login (auth) ===
Route::middleware(['auth'])->group(function () {
    // ✅ Rute admin untuk berita (CRUD)
    Route::resource('admin/news', NewsController::class)->names([
        'index' => 'admin.news.index',
        'create' => 'admin.news.create',
        'store' => 'admin.news.store',
        'edit' => 'admin.news.edit',
        'update' => 'admin.news.update',
        'destroy' => 'admin.news.destroy',
    ]);

    // Halaman dashboard, profile, dan pengaturan admin
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('/profile', fn() => view('profile'))->name('profile');
    Route::get('/settings', fn() => view('settings'))->name('settings');

    // Admin panel lainnya
    Route::get('/admin', fn() => view('admin.dashboard'))->name('admin.dashboard');
    Route::get('/admin/users', fn() => view('admin.users'))->name('admin.users');
    Route::get('/admin/roles', fn() => view('admin.roles'))->name('admin.roles');
    Route::get('/admin/permissions', fn() => view('admin.permissions'))->name('admin.permissions');
    Route::get('/admin/logs', fn() => view('admin.logs'))->name('admin.logs');
    Route::get('/admin/backup', fn() => view('admin.backup'))->name('admin.backup');
    Route::get('/admin/maintenance', fn() => view('admin.maintenance'))->name('admin.maintenance');
});

// === Auth Routes ===
Route::get('/login', fn() => view('auth.login'))->name('login');
Route::get('/register', fn() => view('auth.register'))->name('register');
Route::get('/forgot-password', fn() => view('auth.forgot-password'))->name('password.request');
Route::get('/reset-password/{token}', fn($token) => view('auth.reset-password', ['token' => $token]))->name('password.reset');
Route::get('/verify-email', fn() => view('auth.verify-email'))->name('verification.notice');
Route::get('/confirm-password', fn() => view('auth.confirm-password'))->name('password.confirm');

// Fallback jika halaman tidak ditemukan
Route::fallback(fn() => view('errors.404'));

// Auth scaffolding default
Auth::routes();

// Redirect default home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
