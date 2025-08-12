<?php

namespace App\Http\Controllers;

use App\Models\Photo; // <-- 1. Tambahkan baris ini untuk memberitahu alamat yang benar
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        // 2. Menggunakan nama 'Photo' yang sudah benar
        $photos = Photo::latest()->get(); 
        return view('galeri-foto', compact('photos'));
    }
}