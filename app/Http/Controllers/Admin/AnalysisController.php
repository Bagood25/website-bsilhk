<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use League\Csv\Reader;

class AnalysisController extends Controller
{
    /**
     * Menampilkan halaman utama untuk memulai analisis.
     */
    public function index()
    {
        $colabLink = 'https://colab.research.google.com/drive/1Yl5yjHrWTX19T9hzILr6xSJ3EJPAslbR?usp=sharing';
        return view('admin.analysis.index', compact('colabLink'));
    }

    /**
     * Mengunggah file CSV, membaca headernya, dan menampilkannya.
     */
    public function store(Request $request)
    {
        // ==========================================================
        // == TAMBAHKAN BARIS INI UNTUK MENINGKATKAN BATAS WAKTU ==
        // ==========================================================
        set_time_limit(300); // Batas waktu menjadi 5 menit (300 detik)

        $request->validate([
            'file' => 'required|mimes:csv,txt|max:20480', // Meningkatkan batas ukuran file ke 20MB
        ]);

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        $colabLink = 'https://colab.research.google.com/drive/1Yl5yjHrWTX19T9hzILr6xSJ3EJPAslbR?usp=sharing';

        try {
            // Membaca header (nama kolom) dari file CSV
            $csv = Reader::createFromPath($file->getPathname(), 'r');
            $csv->setHeaderOffset(0);
            $headers = $csv->getHeader();

            return view('admin.analysis.index', [
                'successMessage' => "File '{$fileName}' berhasil diunggah. Berikut adalah kolom yang terdeteksi.",
                'csvHeaders' => $headers,
                'colabLink' => $colabLink
            ]);

        } catch (\Exception $e) {
            return back()->with('error', 'Gagal memproses file CSV. Pastikan formatnya benar. Error: ' . $e->getMessage());
        }
    }
}