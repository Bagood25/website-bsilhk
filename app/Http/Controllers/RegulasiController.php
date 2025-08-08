<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regulasi; // Asumsi Anda memiliki model bernama Regulasi
use Illuminate\Support\Facades\Storage; // Digunakan jika ada gambar yang disimpan

class RegulasiController extends Controller
{
    /**
     * Menampilkan halaman detail untuk sebuah regulasi.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        // Mencari regulasi berdasarkan slug. Jika tidak ditemukan, akan menampilkan halaman 404.
        $regulasi = Regulasi::where('slug', $slug)->firstOrFail();

        // Mengirimkan data regulasi ke view
        return view('regulasi', [
            'regulasi' => $regulasi
        ]);
    }
}