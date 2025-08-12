<?php

namespace App\Http\Controllers;

use App\Models\News; // Menggunakan model News yang sudah diperbaiki
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminBeritaController extends Controller
{
    public function index()
    {
        return view('admin.berita.index', [
            'beritas' => News::latest()->paginate(10)
        ]);
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255|unique:beritas',
            'kategori' => 'required',
            'gambar' => 'image|file|max:2048',
            'isi' => 'required'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images', 'public');
        }

        $validatedData['user_id'] = auth()->id();
        $validatedData['kutipan'] = Str::limit(strip_tags($request->isi), 150);
        $validatedData['slug'] = Str::slug($request->judul, '-');

        News::create($validatedData);

        return redirect()->route('admin.berita.index')->with('success', 'Berita baru berhasil ditambahkan!');
    }

    public function edit(News $berita)
    {
        return view('admin.berita.edit', [
            'berita' => $berita
        ]);
    }

    public function update(Request $request, News $berita)
    {
        $rules = [
            'judul' => 'required|max:255|unique:beritas,judul,' . $berita->id,
            'kategori' => 'required',
            'gambar' => 'image|file|max:2048',
            'isi' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $validatedData['gambar'] = $request->file('gambar')->store('post-images', 'public');
        }

        $validatedData['slug'] = Str::slug($request->judul, '-');
        $validatedData['kutipan'] = Str::limit(strip_tags($request->isi), 150);

        $berita->update($validatedData);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diubah!');
    }

    public function destroy(News $berita)
    {
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }
        
        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}
