<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index(Request $request, $kategori)
    {
       $downloads = Download::where('kategori', $kategori)->latest()->get();

        // Mengubah format judul dari "laporan-tahunan" menjadi "Laporan Tahunan"
        $title = ucwords(str_replace('-', ' ', $kategori));

        return view('download', compact('downloads', 'title'));
    }
}