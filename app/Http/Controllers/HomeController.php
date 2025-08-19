<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Photo;
use App\Models\Agenda; // Memanggil model Agenda
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
        // Query untuk Berita
        $beritaUtama = News::where('kategori', 'berita_utama')->latest()->take(4)->get();
        $beritaFokus = News::whereIn('kategori', ['berita_fokus', 'berita_utama'])
                             ->latest()
                             ->take(3)
                             ->get();
        $beritaStandar = News::where('kategori', 'berita_standar')->latest()->take(6)->get();
        $kabarBsi = News::where('kategori', 'kabar_bsi')->latest()->take(3)->get();
        $beritaKlhk = News::where('kategori', 'berita_klhk')->latest()->take(4)->get();

        // Query untuk Foto
        $latestPhotos = Photo::latest()->take(12)->get();

        // Query untuk mengambil 3 agenda terbaru
        $latestAgendas = Agenda::latest()->take(3)->get();

        // Mengirim semua data ke view 'home'
        return view('home', compact(
            'beritaUtama',
            'beritaFokus',
            'beritaStandar',
            'kabarBsi',
            'beritaKlhk',
            'latestPhotos',
            'latestAgendas' // Mengirim variabel agenda ke view
        ));
    }
}
