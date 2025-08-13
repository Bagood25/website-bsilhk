<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    // READ: Menampilkan semua data
    public function index()
    {
        $downloads = Download::latest()->paginate(10);
        return view('admin.downloads.index', compact('downloads'));
    }

    // CREATE: Menampilkan form tambah data
    public function create()
    {
        return view('admin.downloads.create');
    }

    // CREATE: Menyimpan data baru
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

        return redirect()->route('admin.downloads.index')->with('success', 'Data unduhan berhasil ditambahkan.');
    }

    // UPDATE: Menampilkan form edit
    public function edit(Download $download)
    {
        return view('admin.downloads.edit', compact('download'));
    }

    // UPDATE: Memperbarui data
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

        return redirect()->route('admin.downloads.index')->with('success', 'Data unduhan berhasil diperbarui.');
    }

    // DELETE: Menghapus data
    public function destroy(Download $download)
    {
        Storage::delete('public/downloads/' . $download->nama_file);
        $download->delete();
        return redirect()->route('admin.downloads.index')->with('success', 'Data unduhan berhasil dihapus.');
    }
}