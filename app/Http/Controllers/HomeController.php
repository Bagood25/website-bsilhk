<?php

namespace App\Http\Controllers;

use App\Models\News; // Menggunakan model News yang sudah diperbaiki
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Query untuk Berita Utama (Tidak diubah)
        $beritaUtama = News::where('kategori', 'berita_utama')->latest()->take(4)->get();

        // ====================================================================
        // == PERUBAHAN DI SINI ==
        // Query untuk Berita Fokus diubah menggunakan whereIn.
        // Ini akan mengambil berita yang kategorinya 'berita_fokus' ATAU 'berita_utama'.
        // Kemudian diurutkan dari yang terbaru dan diambil 3 berita.
        $beritaFokus = News::whereIn('kategori', ['berita_fokus', 'berita_utama'])
                             ->latest()
                             ->take(3)
                             ->get();
        // ====================================================================

        // Query untuk section lain (Tidak diubah)
        $beritaStandar = News::where('kategori', 'berita_standar')->latest()->take(6)->get();
        $kabarBsi = News::where('kategori', 'kabar_bsi')->latest()->take(3)->get();
        $beritaKlhk = News::where('kategori', 'berita_klhk')->latest()->take(4)->get();

        // Mengirim semua data ke view 'home'
        return view('home', compact('beritaUtama', 'beritaFokus', 'beritaStandar', 'kabarBsi', 'beritaKlhk'));
    }
}