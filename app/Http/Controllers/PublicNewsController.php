<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PublicNewsController extends Controller
{
    /**
     * Menampilkan berita dengan kategori 'berita_fokus' DAN 'berita_utama'.
     */
    public function showFokusBsiNews()
    {
        // PERBAIKAN: Menggunakan whereIn untuk menggabungkan dua kategori
        $news = News::whereIn('kategori', ['berita_fokus', 'berita_utama'])
                      ->latest()
                      ->get();

        return view('fokus-bsi', ['news' => $news]);
    }


    /**
     * Menampilkan berita dengan kategori 'berita_bsi' DAN 'berita_utama'.
     */
    public function showBsiNews()
    {
        // PERBAIKAN: Menggunakan whereIn untuk menggabungkan dua kategori
        $news = News::whereIn('kategori', ['berita_bsi', 'berita_utama'])
                      ->latest()
                      ->get();

        return view('berita-bsi', ['news' => $news]);
    }

    /**
     * Menampilkan berita dengan kategori 'berita_klhk'. (Tidak diubah)
     */
    public function showKlhNews()
    {
        $news = News::where('kategori', 'berita_klhk')->latest()->get();
        return view('berita-klhk', ['news' => $news]);
    }

    /**
     * Menampilkan berita dengan kategori 'berita_standar'. (Tidak diubah)
     */
    public function showStandarNews()
    {
        $news = News::where('kategori', 'berita_standar')->latest()->get();
        return view('berita-standar', ['news' => $news]);
    }

    /**
     * Menampilkan halaman detail dari satu berita berdasarkan slug-nya. (Tidak diubah)
     */
    public function showDetail($slug)
    {
        $newsItem = News::where('slug', 'like', $slug)->firstOrFail();
        return view('news-detail', ['item' => $newsItem]);
    }
}