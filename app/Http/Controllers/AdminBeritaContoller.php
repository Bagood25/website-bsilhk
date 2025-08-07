<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Tambahkan ini untuk slug

class AdminBeritaController extends Controller
{
    /**
     * Menampilkan daftar semua berita di halaman admin.
     * READ (Admin)
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('admin.berita.index', compact('beritas'));
    }

    /**
     * Menampilkan form untuk membuat berita baru.
     * CREATE (Admin)
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Menyimpan berita baru ke database.
     * CREATE (Admin)
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:berita',
            'isi' => 'required',
            'kategori' => 'required', // Tambahkan validasi untuk kategori
        ]);

        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }

        Berita::create($validatedData);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Menampilkan form untuk mengedit berita.
     * EDIT (Admin)
     */
    public function edit(Berita $berita)
    {
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Memperbarui berita di database.
     * UPDATE (Admin)
     */
    public function update(Request $request, Berita $berita)
    {
        $rules = [
            'judul' => 'required|max:255',
            'isi' => 'required',
            'kategori' => 'required', // Tambahkan validasi untuk kategori
        ];

        // Validasi slug agar unik kecuali untuk berita yang sedang diedit
        if ($request->slug != $berita->slug) {
            $rules['slug'] = 'required|unique:berita';
        }

        $validatedData = $request->validate($rules);
        
        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('gambar')) {
             $validatedData['gambar'] = $request->file('gambar')->store('post-images');
        }

        $berita->update($validatedData);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diubah!');
    }

    /**
     * Menghapus berita dari database.
     * DELETE (Admin)
     */
    public function destroy(Berita $berita)
    {
        // Hapus gambar jika ada
        if ($berita->gambar) {
            \Illuminate\Support\Facades\Storage::delete($berita->gambar);
        }

        $berita->delete();
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus!');
    }
}