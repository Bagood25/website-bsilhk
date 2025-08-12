<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index', [
            'news' => News::all()
        ]);
    }

    /**
     * Menampilkan detail berita.
     * Kode ini secara manual mencari berita berdasarkan slug.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\View\View
     */
    public function show($slug): View
    {
        // 1. Cari berita secara manual berdasarkan slug dari URL.
        //    firstOrFail() akan secara otomatis menampilkan halaman 404 jika tidak ditemukan.
        $news = News::where('slug', $slug)->firstOrFail();

        // 2. Siapkan nama penulis dengan aman.
        $authorName = optional($news->user)->name ?? 'Penulis tidak diketahui';

        // 3. Kirim data yang sudah pasti ada ke view.
        return view('news.show', [
            'news' => $news,
            'authorName' => $authorName,
        ]);
    }
}
