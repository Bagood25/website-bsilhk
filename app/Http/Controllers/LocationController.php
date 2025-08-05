<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Tampilkan daftar sumber daya.
     */
    public function index()
    {
        // Ambil semua data lokasi dari tabel
        $locations = Location::all();
        
        // Kirim data ke view locations.index
        return view('locations.index', compact('locations'));
    }
}
