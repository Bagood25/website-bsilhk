<?php

namespace App\Http\Controllers;

// Gunakan semua model yang diperlukan
use App\Models\News;
use App\Models\Photo;
use App\Models\Agenda;
use App\Models\Video;
use App\Models\Partner; // 1. TAMBAHKAN: Panggil model Partner
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama dengan data yang diperlukan.
     */
    public function index()
    {
        // ... (kode untuk $beritaUtama)
        $beritaUtama = News::where('kategori', 'berita-p2semh')->latest()->take(5)->get();

        // Mengambil berita terbaru dari kategori 'berita-p2semh' untuk slider
        $beritaFokus = News::where('kategori', 'berita-p2semh')->latest()->take(15)->get();
        
        // ... (sisa kode tidak berubah)
        $beritaStandar = News::where('kategori', 'berita-kehutanan')->latest()->take(6)->get();
        
        // ... (Query lain tetap sama)
        $latestPhotos = Photo::latest()->take(12)->get();
        $latestAgendas = Agenda::latest()->take(3)->get();
        $latestVideos = Video::latest()->take(15)->get();

        // 2. TAMBAHKAN: Ambil data semua partner
        $partners = Partner::latest()->get();

        return view('home', compact(
            'beritaUtama',
            'beritaFokus',
            'beritaStandar',
            'latestPhotos',
            'latestAgendas',
            'latestVideos',
            'partners' // 3. TAMBAHKAN: Kirim data partner ke view
        ));
    }
    
    public function p2semh()
    {
        $title = 'Tautan Terkait P2SEMH';
        
        // 4. TAMBAHKAN: Ambil data semua partner untuk halaman p2semh
        $partners = Partner::latest()->get();

        // 5. TAMBAHKAN: Kirim data partner ke view p2semh
        return view('p2semh', compact('title', 'partners'));
    }
}