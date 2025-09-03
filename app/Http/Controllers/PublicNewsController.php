<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PublicNewsController extends Controller
{
    /**
     * Menampilkan halaman "Berita Kehutanan".
     */
    public function showBsiNews()
    {
        $beritas = News::where('kategori', 'berita-kehutanan')->latest()->paginate(9);
        $title = 'Berita Kehutanan'; // <-- TAMBAHKAN INI
        return view('berita-kehutanan', compact('beritas', 'title')); // <-- TAMBAHKAN 'title'
    }

    /**
     * Menampilkan halaman "Berita P2SEMH".
     */
    public function showFokusBsiNews()
    {
        $beritas = News::where('kategori', 'berita-p2semh')->latest()->paginate(9);
        $title = 'Berita P2SEMH'; // <-- TAMBAHKAN INI
        return view('berita-p2semh', compact('beritas', 'title')); // <-- TAMBAHKAN 'title'
    }

    /**
     * Menampilkan halaman detail untuk satu berita.
     */
    public function showDetail(News $berita)
    {
        // Judul halaman detail akan diambil dari judul berita itu sendiri
        $title = $berita->judul; // <-- TAMBAHKAN INI
        return view('news.show', compact('berita', 'title')); // <-- TAMBAHKAN 'title'
    }
}