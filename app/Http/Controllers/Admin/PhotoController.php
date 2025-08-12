<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Menampilkan daftar semua foto yang ada di galeri.
     * Halaman ini akan menjadi halaman utama untuk pengelolaan galeri foto.
     */
    public function index()
    {
        $photos = Photo::latest()->get();
        return view('admin.photos.index', compact('photos'));
    }

    /**
     * Menampilkan halaman dengan formulir untuk menambah foto baru.
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Memproses dan menyimpan foto baru yang diunggah dari form.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Maksimal 2MB
        ]);

        // Proses upload gambar ke folder 'storage/app/public/gallery'
        $path = $request->file('gambar')->store('public/gallery');

        // Simpan informasi foto ke database
        Photo::create([
            'judul' => $request->judul,
            // Simpan path yang sudah bersih (tanpa 'public/') agar mudah dipanggil
            'gambar' => str_replace('public/', '', $path),
        ]);

        // Kembali ke halaman daftar foto dengan pesan sukses
        return redirect()->route('admin.photos.index')->with('success', 'Foto berhasil ditambahkan.');
    }

    /**
     * Menghapus foto dari database dan juga file fisiknya.
     */
    public function destroy(Photo $photo)
    {
        // Hapus file gambar dari folder storage
        Storage::delete('public/' . $photo->gambar);

        // Hapus data foto dari database
        $photo->delete();

        // Kembali ke halaman daftar foto dengan pesan sukses
        return redirect()->route('admin.photos.index')->with('success', 'Foto berhasil dihapus.');
    }
}