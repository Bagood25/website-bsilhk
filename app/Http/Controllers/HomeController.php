<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
    /**
     * Tampilkan halaman dashboard aplikasi.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Mengambil 6 data berita terbaru untuk slider utama
        $beritaUtama = Berita::latest()->take(6)->get();

        // Mengambil 3 data berita fokus terbaru
        $beritaFokus = Berita::latest()->skip(6)->take(3)->get();

        // Mengambil 4 data berita standar terbaru
        $beritaStandar = Berita::latest()->skip(9)->take(4)->get();

        // Mengirimkan semua data berita ke view
        return view('home', compact('beritaUtama', 'beritaFokus', 'beritaStandar'));
    }
}
