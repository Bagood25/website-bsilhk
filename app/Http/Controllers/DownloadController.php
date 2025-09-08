<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $peraturans = Download::where('kategori', 'peraturan')->latest()->paginate(10);
        return view('download', compact('peraturans'));
    }
}