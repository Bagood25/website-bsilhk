<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\PublicService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama dengan data ringkasan.
     */
    public function index()
    {
        // Ambil 3 berita terbaru yang diurutkan berdasarkan tanggal publikasi
        $latestNews = News::orderBy('published_at', 'desc')->limit(3)->get();
        
        // Ambil semua layanan publik
        $publicServices = PublicService::all();
        
        // Kirim data ke view 'home'
        return view('home', compact('latestNews', 'publicServices'));
    }
}
