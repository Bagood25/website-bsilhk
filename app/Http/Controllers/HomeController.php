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
        // Semua query sekarang akan berjalan dengan benar
        $beritaUtama = News::where('kategori', 'berita_utama')->latest()->take(4)->get();
        $beritaFokus = News::where('kategori', 'berita_fokus')->latest()->take(3)->get();
        $beritaStandar = News::where('kategori', 'berita_standar')->latest()->take(6)->get();
        $kabarBsi = News::where('kategori', 'kabar_bsi')->latest()->take(3)->get();
        $beritaKlhk = News::where('kategori', 'berita_klhk')->latest()->take(4)->get();

        return view('home', compact('beritaUtama', 'beritaFokus', 'beritaStandar', 'kabarBsi', 'beritaKlhk'));
    }
}
