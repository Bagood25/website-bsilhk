<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function show($kategori)
    {
        $downloads = Download::where('kategori', $kategori)->get();
        $title = ucwords(str_replace('-', ' ', $kategori));

        return view('download', [
            'title' => $title,
            'downloads' => $downloads
        ]);
    }
}