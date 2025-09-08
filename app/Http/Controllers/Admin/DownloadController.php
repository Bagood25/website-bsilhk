<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    /**
     * Menampilkan daftar unduhan berdasarkan kategori.
     */
    public function index($kategori = 'peraturan') // Jadikan 'peraturan' sebagai default
    {
        // Pastikan hanya kategori 'peraturan' yang diakses
        if ($kategori !== 'peraturan') {
            abort(404);
        }

        $downloads = Download::where('kategori', $kategori)->latest()->paginate(10);
        
        $title = 'Peraturan'; // Set judul secara statis
        return view('admin.downloads.index', compact('downloads', 'title', 'kategori'));
    }

    /**
     * Menampilkan formulir untuk membuat unduhan baru.
     */
    public function create($kategori = 'peraturan')
    {
        if ($kategori !== 'peraturan') {
            abort(404);
        }
        return view('admin.downloads.create', compact('kategori'));
    }

    /**
     * Menyimpan unduhan yang baru dibuat.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            // =======================================================
            // ==       UBAH ATURAN VALIDASI INI                    ==
            // =======================================================
            'kategori' => 'required|in:peraturan',
            'file' => 'required|file|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx,zip|max:10240',
        ]);

        $filePath = $request->file('file')->store('public/downloads');
        $fileName = basename($filePath);

        Download::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'nama_file' => $fileName,
        ]);

        return redirect()->route('admin.downloads.index', 'peraturan')->with('success', 'Data unduhan berhasil ditambahkan.');
    }

    /**
     * Menampilkan formulir untuk mengedit unduhan.
     */
    public function edit(Download $download)
    {
        return view('admin.downloads.edit', compact('download'));
    }

    /**
     * Memperbarui unduhan di database.
     */
    public function update(Request $request, Download $download)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            // =======================================================
            // ==       UBAH ATURAN VALIDASI INI                    ==
            // =======================================================
            'kategori' => 'required|in:peraturan',
            'file' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx,zip|max:10240',
        ]);

        $fileName = $download->nama_file;
        if ($request->hasFile('file')) {
            if ($download->nama_file) {
                Storage::delete('public/downloads/' . $download->nama_file);
            }
            $filePath = $request->file('file')->store('public/downloads');
            $fileName = basename($filePath);
        }

        $download->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'nama_file' => $fileName,
        ]);

        return redirect()->route('admin.downloads.index', 'peraturan')->with('success', 'Data unduhan berhasil diperbarui.');
    }

    /**
     * Menghapus unduhan dari database.
     */
    public function destroy(Download $download)
    {
        if ($download->nama_file) {
            Storage::delete('public/downloads/' . $download->nama_file);
        }
        $download->delete();
        
        return redirect()->route('admin.downloads.index', 'peraturan')->with('success', 'Data unduhan berhasil dihapus.');
    }
}