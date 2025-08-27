<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PublicNewsController extends Controller
{
    /**
     * Menampilkan berita dengan kategori 'berita_fokus' DAN 'berita_utama'.
     */
    /**
     * Menampilkan berita P2SEMH (sebelumnya Fokus BSI).
     */
    public function showFokusBsiNews()
    {
        // Bagian ini tetap sama, hanya mengambil data
        $news = News::whereIn('kategori', ['berita_fokus', 'berita_utama'])
                      ->latest()
                      ->get();

        // GANTI DI SINI: Panggil file view dengan nama baru
        return view('berita-p2semh', ['news' => $news]);
    }

    /**
     * Menampilkan Berita Kehutanan (sebelumnya Berita BSI).
     */
    public function showBsiNews()
    {
        // Bagian ini juga tetap sama, hanya mengambil data
        $news = News::where('kategori', 'kabar_bsi')
                      ->latest()
                      ->get();

        // GANTI DI SINI: Panggil file view dengan nama baru
        return view('berita-kehutanan', ['news' => $news]);
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