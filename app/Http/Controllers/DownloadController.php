<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    // UBAH FUNGSI INDEX MENJADI SEPERTI INI
    public function index($kategori)
    {
        // Ambil data berdasarkan kategori dari URL
        $peraturans = Download::where('kategori', $kategori)->latest()->paginate(10);
        
        // Kirim data ke view
        return view('download', compact('peraturans'));
    }
}