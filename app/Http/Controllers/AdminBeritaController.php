<?php

namespace App\Http\Controllers;

use App\Models\News; // Menggunakan model News yang benar
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Import Str facade untuk membuat slug

class AdminBeritaController extends Controller
{
    public function index()
    {
        $beritas = News::latest()->paginate(10);
        return view('admin.berita.index', compact('beritas'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except(['_token', '_method']);
        $data['user_id'] = auth()->id();
        $data['slug'] = Str::slug($request->judul);
        $data['kutipan'] = Str::limit(strip_tags($request->isi), 150);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $gambar->storeAs('public/berita', $nama_gambar);
            
            // ======================================================
            // == PERUBAHAN PENTING 1: Tambahkan path 'berita/' ==
            // ======================================================
            $data['gambar'] = 'berita/' . $nama_gambar;
        }

        News::create($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(News $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    public function update(Request $request, News $berita)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->except(['_token', '_method']);
        $data['slug'] = Str::slug($request->judul);
        $data['kutipan'] = Str::limit(strip_tags($request->isi), 150);

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && file_exists(storage_path('app/public/' . $berita->gambar))) {
                unlink(storage_path('app/public/' . $berita->gambar));
            }
            $gambar = $request->file('gambar');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $gambar->storeAs('public/berita', $nama_gambar);

            // ======================================================
            // == PERUBAHAN PENTING 2: Tambahkan path 'berita/' ==
            // ======================================================
            $data['gambar'] = 'berita/' . $nama_gambar;
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(News $berita)
    {
        if ($berita->gambar && file_exists(storage_path('app/public/' . $berita->gambar))) {
            unlink(storage_path('app/public/' . $berita->gambar));
        }
        $berita->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}