<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Kita akan mencari di dalam model Berita

class SearchController extends Controller
{
    /**
     * Menangani permintaan pencarian dari pengguna.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function search(Request $request)
    {
        // 1. Ambil kata kunci dari input form
        $query = $request->input('query');

        // 2. Validasi sederhana: pastikan ada kata kunci yang dicari
        if (!$query) {
            // Jika tidak ada kata kunci, kembali ke halaman sebelumnya
            return back();
        }

        // 3. Lakukan pencarian di database
        // Kita akan mencari di kolom 'judul' dan 'isi' pada tabel berita
        $results = News::where('judul', 'LIKE', "%{$query}%")
                         ->orWhere('isi', 'LIKE', "%{$query}%")
                         ->latest() // Urutkan dari yang terbaru
                         ->paginate(10); // Batasi hasil per halaman

        // 4. Kirim hasil pencarian ke halaman view
        return view('search', [
            'query' => $query,
            'results' => $results,
        ]);
    }
}