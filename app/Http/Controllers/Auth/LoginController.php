<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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

        // Jika bukan admin, arahkan ke halaman utama
        return '/';
    }
}