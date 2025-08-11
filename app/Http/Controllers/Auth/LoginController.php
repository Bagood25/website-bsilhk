<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth; // <-- Pastikan ini ditambahkan

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // Properti ini tidak akan kita gunakan lagi, karena kita ganti dengan method redirectTo()
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Mengarahkan pengguna setelah login berdasarkan perannya.
     *
     * @return string
     */
    public function redirectTo()
    {
        // Periksa apakah pengguna yang login adalah admin (memiliki is_admin == true)
        if (Auth::user()->is_admin) {
            // Jika admin, arahkan ke dashboard berita admin
            return '/admin/berita';
        }

        // Jika bukan admin, arahkan ke halaman home
        return RouteServiceProvider::HOME;
    }
}