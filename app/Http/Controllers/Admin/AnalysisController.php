<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Analysis; // Pastikan model Analysis di-import
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response; // <-- TAMBAHKAN INI

class AnalysisController extends Controller
{
    public function index()
    {
        $analyses = Analysis::latest()->paginate(10);
        $colabLink = 'https://colab.research.google.com/drive/1Yl5yjHrWTX19T9hzILr6xSJ3EJPAslbR?usp=sharing'; // Link Anda sudah benar
        return view('admin.analysis.index', compact('analyses', 'colabLink'));
    }

    public function store(Request $request)
    {
        $request->validate(['file' => 'required|mimes:csv,txt']);
        $analysis = Analysis::create([
            'original_filename' => $request->file('file')->getClientOriginalName(),
        ]);
        $message = "Catatan analisis baru (ID: {$analysis->id}) telah dibuat. Sekarang, buka Colab, jalankan analisis, dan gunakan ID ini saat diminta di Colab.";
        return back()->with('success', $message)->with('new_analysis_id', $analysis->id);
    }

    // FUNGSI INI TETAP SAMA, TIDAK PERLU DIUBAH
    public function show(Analysis $analysis)
    {
        return view('admin.analysis.show', compact('analysis'));
    }
    
    // ==========================================================
    // == TAMBAHKAN FUNGSI BARU INI UNTUK MENANGANI GAMBAR
    // ==========================================================
    public function getImage(Analysis $analysis, $type)
    {
        $disk = Storage::disk('google');
        $filename = '';

        if ($type === 'sentiment') {
            $filename = "sentiment_{$analysis->id}.png";
        } elseif ($type === 'topic') {
            $filename = "topic_{$analysis->id}.png";
        }

        if (!$filename || !$disk->exists($filename)) {
            abort(404, 'File gambar tidak ditemukan.');
        }

        $fileContent = $disk->get($filename);

        return Response::make($fileContent, 200, [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}