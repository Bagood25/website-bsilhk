<?php

namespace App\Http\Controllers;

// Gunakan model News yang benar
use App\Models\News;
use App\Models\Photo;
use App\Models\Agenda;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama dengan data yang diperlukan.
     */
    public function index()
    {
        // ======================================================
        // == PERBAIKAN UTAMA ADA DI SINI ==
        // ======================================================

        // Mengambil 4 berita terbaru dari kategori 'berita-p2semh' untuk slider
        $beritaUtama = News::where('kategori', 'berita-p2semh')->latest()->take(4)->get();

        // Mengambil 3 berita terbaru dari kategori 'berita-p2semh' untuk grid "Berita P2SEMH"
        $beritaFokus = News::where('kategori', 'berita-p2semh')->latest()->take(3)->get();
        
        // Mengambil 6 berita terbaru dari kategori 'berita-kehutanan' untuk bagian "Berita Kehutanan"
        // (Meskipun tidak ada di potongan kode Anda, ini untuk jaga-jaga jika ada di bagian bawah halaman)
        $beritaStandar = News::where('kategori', 'berita-kehutanan')->latest()->take(6)->get();

        // ======================================================
        
        // Query lain tetap sama
        $latestPhotos = Photo::latest()->take(12)->get();
        $latestAgendas = Agenda::latest()->take(3)->get();
        $latestVideos = Video::latest()->take(15)->get();

        // Mengirim semua variabel yang dibutuhkan oleh view 'home.blade.php'
        return view('home', compact(
            'beritaUtama',
            'beritaFokus',
            'beritaStandar',
            'latestPhotos',
            'latestAgendas',
            'latestVideos'
        ));
    }
}