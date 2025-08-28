<?php

namespace App\Http\Controllers;

use App\Models\Video; // Menggunakan model Video untuk mengambil data
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Fungsi ini untuk menampilkan semua video ke halaman galeri publik.
     */
    public function index()
    {
        // Mengambil semua data video, diurutkan dari yang terbaru,
        // dan ditampilkan 9 video per halaman.
        $videos = Video::latest()->paginate(9); 
        
        // Mengirim data video ke view 'galeri-video.blade.php'
        return view('galeri-video', compact('videos'));
    }
}