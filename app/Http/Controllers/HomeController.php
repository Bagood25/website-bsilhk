<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Photo; // 1. TAMBAHKAN INI untuk memanggil model Photo
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
        // Query untuk Berita (Tidak diubah)
        $beritaUtama = News::where('kategori', 'berita_utama')->latest()->take(4)->get();
        $beritaFokus = News::whereIn('kategori', ['berita_fokus', 'berita_utama'])
                             ->latest()
                             ->take(3)
                             ->get();
        $beritaStandar = News::where('kategori', 'berita_standar')->latest()->take(6)->get();
        $kabarBsi = News::where('kategori', 'kabar_bsi')->latest()->take(3)->get();
        $beritaKlhk = News::where('kategori', 'berita_klhk')->latest()->take(4)->get();

        // ====================================================================
        // == 2. TAMBAHKAN BARIS INI ==
        //    Mengambil 9 foto terbaru untuk ditampilkan di halaman utama.
        // ====================================================================
        $latestPhotos = Photo::latest()->take(12)->get();


        // Mengirim semua data ke view 'home'
        return view('home', compact(
            'beritaUtama',
            'beritaFokus',
            'beritaStandar',
            'kabarBsi',
            'beritaKlhk',
            'latestPhotos' // <-- 3. Tambahkan variabel baru di sini
        ));
    }
}