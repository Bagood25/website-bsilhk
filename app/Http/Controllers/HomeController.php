<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 4 berita terbaru dengan kategori 'berita_utama' untuk slider utama
        $beritaUtama = Berita::where('kategori', 'berita_utama')->latest()->take(4)->get();
        
        // Ambil 3 berita terbaru dengan kategori 'berita_fokus'
        $beritaFokus = Berita::where('kategori', 'berita_fokus')->latest()->take(3)->get();
        
        // Ambil 6 berita terbaru dengan kategori 'berita_standar'
        $beritaStandar = Berita::where('kategori', 'berita_standar')->latest()->take(6)->get();

        // Ambil 3 berita terbaru dengan kategori 'kabar_bsi'
        $kabarBsi = Berita::where('kategori', 'kabar_bsi')->latest()->take(3)->get();

        // Ambil 4 berita terbaru dengan kategori 'berita_klhk'
        $beritaKlhk = Berita::where('kategori', 'berita_klhk')->latest()->take(4)->get();

        // Kirim semua variabel ke view home
        return view('home', compact('beritaUtama', 'beritaFokus', 'beritaStandar', 'kabarBsi', 'beritaKlhk'));
    }
}