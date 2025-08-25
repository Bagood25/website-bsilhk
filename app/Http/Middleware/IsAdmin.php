<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna sudah login DAN merupakan admin
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // --- UBAH BARIS DI BAWAH INI ---
        // Jika bukan admin, arahkan kembali ke halaman utama (/)
        return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman admin.');
    }
}