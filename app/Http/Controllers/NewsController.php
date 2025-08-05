<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Tampilkan daftar semua berita.
     */
    public function index()
    {
        // Ambil semua berita dan urutkan berdasarkan tanggal publikasi
        $allNews = News::orderBy('published_at', 'desc')->paginate(10);
        
        return view('news.index', compact('allNews'));
    }

    /**
     * Tampilkan detail berita berdasarkan slug.
     */
    public function show($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        
        return view('news.show', compact('news'));
    }
}
