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
    public function index($kategori)
{
    // INI KODE YANG SUDAH DIPERBAIKI
    $downloads = Download::where('kategori', $kategori)->latest()->paginate(10);
    
    $title = ucwords(str_replace('-', ' ', $kategori));
    return view('admin.downloads.index', compact('downloads', 'title', 'kategori'));
}


    /**
     * Menampilkan formulir untuk membuat unduhan baru.
     */
    public function create($kategori)
    {
        // Kita teruskan variabel kategori ke view
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
            'kategori' => 'required|string|max:100',
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

        // Arahkan kembali ke halaman index kategori yang sesuai
        return redirect()->route('admin.downloads.index', $request->kategori)->with('success', 'Data unduhan berhasil ditambahkan.');
    }

    /**
     * Menampilkan formulir untuk mengedit unduhan.
     */
    public function edit(Download $download)
    {
        // Di sini kita tidak perlu $kategori karena sudah ada di $download
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
            'kategori' => 'required|string|max:100',
            'file' => 'nullable|file|mimes:pdf,doc,docx,ppt,pptx,xls,xlsx,zip|max:10240',
        ]);

        $fileName = $download->nama_file;
        if ($request->hasFile('file')) {
            Storage::delete('public/downloads/' . $download->nama_file);
            $filePath = $request->file('file')->store('public/downloads');
            $fileName = basename($filePath);
        }

        $download->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'nama_file' => $fileName,
        ]);

        // Arahkan kembali ke halaman index kategori yang sesuai
        return redirect()->route('admin.downloads.index', $download->kategori)->with('success', 'Data unduhan berhasil diperbarui.');
    }

    /**
     * Menghapus unduhan dari database.
     */
    public function destroy(Download $download)
    {
        $kategori = $download->kategori; // Simpan kategori sebelum dihapus
        Storage::delete('public/downloads/' . $download->nama_file);
        $download->delete();
        
        // Arahkan kembali ke halaman index kategori yang sesuai
        return redirect()->route('admin.downloads.index', $kategori)->with('success', 'Data unduhan berhasil dihapus.');
    }
}