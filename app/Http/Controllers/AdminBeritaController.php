<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.berita.index', [
            'beritas' => Berita::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255|unique:beritas',
            'kategori' => 'required',
            'gambar' => 'image|file|max:2048', // Ukuran gambar maksimal 2MB
            'isi' => 'required'
        ]);

        if ($request->file('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images', 'public');
        }

        // PERBAIKAN UTAMA: Menambahkan user_id dari user yang login
        $validatedData['user_id'] = auth()->id();
        $validatedData['kutipan'] = Str::limit(strip_tags($request->isi), 150);
        $validatedData['slug'] = Str::slug($request->judul, '-');

        Berita::create($validatedData);

        return redirect()->route('admin.berita.index')->with('success', 'Berita baru berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', [
            'berita' => $berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $rules = [
            'judul' => 'required|max:255|unique:beritas,judul,' . $berita->id,
            'kategori' => 'required',
            'gambar' => 'image|file|max:2048',
            'isi' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('gambar')) {
            // Hapus gambar lama jika ada
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }
        
        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}
