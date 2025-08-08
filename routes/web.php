<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PublicServiceController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\DownloadController;

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

// --- Rute PUBLIK (tidak memerlukan login) ---
// Rute untuk halaman utama
Route::get('/', [HomeController::class, 'index']);

// Rute untuk daftar berita halaman depan dan detail berita
Route::get('/news', [NewsController::class, 'publicIndex'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

// Rute untuk halaman "Profil BSILHK"
Route::get('/profil', function () {
    return view('profil');
});

// Rute untuk daftar layanan publik
Route::get('/services', [PublicServiceController::class, 'index']);

// Rute untuk daftar lokasi
Route::get('/locations', [LocationController::class, 'index']);

// Rute untuk halaman regulasi
Route::get('/regulasi/{title}', function ($title) {
    $formattedTitle = str_replace('-', ' ', $title);
    $formattedTitle = ucwords($formattedTitle);
    return view('regulasi', ['pageTitle' => $formattedTitle]);
})->name('regulasi.show');

// Rute untuk JDIH KLHK secara spesifik
Route::get('/jdih-klhk', function () {
    return view('regulasi', ['pageTitle' => 'JDIH KLHK']);
})->name('jdih.klhk');

// Rute untuk halaman "Berita KLHK"
Route::get('/berita-klhk', function () {
    return view('berita-klhk');
});

// Rute untuk halaman "Agenda BSILHK"
Route::get('/agenda', function () {
    // Asumsi Anda memiliki view bernama 'agenda.blade.php'
    return view('agenda');
})->name('agenda.index');

// Rute untuk halaman "Dasar Hukum"
Route::get('/dasar-hukum', function () {
    return view('dasar_hukum');
});

// Rute untuk halaman "Tugas dan Fungsi"
Route::get('/tugas-dan-fungsi', function () {
    return view('tugas_dan_fungsi');
});

// Rute untuk halaman "Struktur Organisasi"
Route::get('/struktur-organisasi', function () {
    return view('struktur_organisasi');
});

// Rute generik untuk Download
Route::get('/download/{title}', [DownloadController::class, 'show'])->name('download.show');

// Rute untuk ITTO
Route::get('/itto', function () {
    return view('itto');
});

// Rute untuk halaman "Galeri Foto"
Route::get('/galeri-foto', function () {
    return view('galeri_foto');
});

// Rute untuk halaman "Galeri Video"
Route::get('/galeri-video', function () {
    return view('galeri_video');
});

// Rute untuk halaman "Kontak"
Route::get('/kontak', function () {
    return view('kontak');
});

// Rute untuk halaman "FAQ"
Route::get('/faq', function () {
    return view('faq');
});

// Rute untuk halaman "Peta Situs"
Route::get('/peta-situs', function () {
    return view('peta_situs');
});

// Rute untuk halaman "Privacy Policy"
Route::get('/privacy-policy', function () {
    return view('privacy_policy');
});

// Rute untuk halaman "Terms of Service"
Route::get('/terms-of-service', function () {
    return view('terms_of_service');
});

// Rute untuk halaman "Sitemap XML"
Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});

// Rute untuk halaman "Search"
Route::get('/search', function () {
    return view('search');
});

// === Rute yang terproteksi oleh middleware 'auth' ===
Route::middleware(['auth'])->group(function () {

    // Rute CRUD untuk admin (News)
    Route::resource('admin/news', NewsController::class)->names([
        'index' => 'admin.news.index',
        'create' => 'admin.news.create',
        'store' => 'admin.news.store',
        'edit' => 'admin.news.edit',
        'update' => 'admin.news.update',
        'destroy' => 'admin.news.destroy',
    ]);

    // Rute untuk halaman "Dashboard"
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rute untuk halaman "Profile"
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    // Rute untuk halaman "Settings"
    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');

    // Rute untuk halaman "Admin Dashboard"
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Rute untuk halaman "User Management"
    Route::get('/admin/users', function () {
        return view('admin.users');
    })->name('admin.users');
    
    // Rute untuk halaman "Role Management"
    Route::get('/admin/roles', function () {
        return view('admin.roles');
    })->name('admin.roles');

    // Rute untuk halaman "Permission Management"
    Route::get('/admin/permissions', function () {
        return view('admin.permissions');
    })->name('admin.permissions');
    
    // Rute untuk halaman "Logs"
    Route::get('/admin/logs', function () {
        return view('admin.logs');
    })->name('admin.logs');

    // Rute untuk halaman "Backup"
    Route::get('/admin/backup', function () {
        return view('admin.backup');
    })->name('admin.backup');
    
    // Rute untuk halaman "Maintenance"
    Route::get('/admin/maintenance', function () {
        return view('admin.maintenance');
    })->name('admin.maintenance');
    
});
// ===============================================================

// Rute untuk halaman "Login"
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Rute untuk halaman "Register"
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Rute untuk halaman "Forgot Password"
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');

// Rute untuk halaman "Reset Password"
Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

// Rute untuk halaman "Verify Email"
Route::get('/verify-email', function () {
    return view('auth.verify-email');
})->name('verification.notice');

// Rute untuk halaman "Confirm Password"
Route::get('/confirm-password', function () {
    return view('auth.confirm-password');
})->name('password.confirm');

// Rute untuk halaman "Error 404"
Route::fallback(function () {
    return view('errors.404');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
