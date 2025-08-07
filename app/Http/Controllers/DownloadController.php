<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DownloadController extends Controller
{
    /**
     * Menampilkan halaman unduhan berdasarkan judul generik.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $title Judul unduhan yang akan ditampilkan dari URL.
     * @return \Illuminate\View\View
     */
    public function show(Request $request, $title)
    {
        // Log judul yang diminta untuk tujuan debugging
        Log::info("DownloadController: show method called with title: {$title}");

        // Mengubah format title agar lebih mudah dibaca (misal: "katalog-sni-2020" menjadi "Katalog Sni 2020")
        $formattedTitle = str_replace('-', ' ', $title);
        $formattedTitle = ucwords($formattedTitle);

        // Anda bisa menambahkan logika di sini untuk mengambil data yang relevan
        // Misalnya, mengambil daftar dokumen yang terkait dengan judul ini dari database.
        // Untuk contoh ini, kita hanya akan mengembalikan view dengan judul yang diformat.

        // Pastikan nama view 'download' sudah ada di direktori 'resources/views/'
        // Dan view tersebut dapat menerima variabel 'pageTitle'.
        return view('download', ['pageTitle' => $formattedTitle]);
    }
}
