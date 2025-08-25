<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Photo;
use App\Models\Agenda;
use App\Models\Video; // 1. Panggil Model Video
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama dengan semua data yang diperlukan.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Query untuk Berita
        $beritaUtama = News::where('kategori', 'berita_utama')->latest()->take(4)->get();
        $beritaFokus = News::whereIn('kategori', ['berita_fokus', 'berita_utama'])
                             ->latest()
                             ->take(3)
                             ->get();
        $beritaStandar = News::where('kategori', 'berita_standar')->latest()->take(6)->get();
        $kabarBsi = News::where('kategori', 'kabar_bsi')->latest()->take(3)->get();
        $beritaKlhk = News::where('kategori', 'berita_klhk')->latest()->take(4)->get();

        // Query untuk Foto Galeri
        $latestPhotos = Photo::latest()->take(12)->get();

        // Query untuk Agenda
        $latestAgendas = Agenda::latest()->take(3)->get();

        // 2. Query untuk mengambil 3 video terbaru
        $latestVideos = Video::latest()->take(15)->get();

        // Mengirim semua data yang sudah diambil ke view 'home'
        return view('home', compact(
            'beritaUtama',
            'beritaFokus',
            'beritaStandar',
            'kabarBsi',
            'beritaKlhk',
            'latestPhotos',
            'latestAgendas',
            'latestVideos' // 3. Kirim variabel video ke view
        ));
    }
}