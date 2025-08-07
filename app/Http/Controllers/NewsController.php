<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Tampilkan daftar semua berita di halaman admin.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua data berita, urutkan dari yang terbaru
        $news = News::latest()->get();
        // Kembalikan view admin untuk daftar berita
        return view('admin.news.index', compact('news'));
    }

    /**
     * Tampilkan formulir untuk membuat berita baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        // Kembalikan view untuk form tambah berita
        return view('admin.news.create');
    }

    /**
     * Simpan berita baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk dari form
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
            'content' => 'required',
        ]);

        $imagePath = null;
        // Proses unggah gambar jika ada
        if ($request->hasFile('image')) {
            // Simpan file gambar ke direktori 'public/images'
            $imagePath = $request->file('image')->store('public/images');
        }

        // Buat slug dari judul
        $slug = Str::slug($request->title);

        // Buat berita baru di database
        News::create([
            'title' => $request->title,
            'slug' => $slug,
            'image' => $imagePath,
            'content' => $request->content,
        ]);

        // Redirect kembali ke halaman daftar berita dengan pesan sukses
        return redirect()->route('admin.news.index')
                         ->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Tampilkan satu berita. Ini bisa digunakan di halaman depan.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\View\View
     */
    public function show(News $news)
    {
        // Kembalikan view untuk menampilkan satu berita
        return view('news.show', compact('news'));
    }

    /**
     * Tampilkan formulir untuk mengedit berita.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\View\View
     */
    public function edit(News $news)
    {
        // Kembalikan view untuk form edit berita
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Perbarui berita yang sudah ada di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, News $news)
    {
        // Validasi data yang masuk
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|nullable',
            'content' => 'required',
        ]);

        $imagePath = $news->image;
        // Proses unggah gambar baru jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($news->image) {
                Storage::delete($news->image);
            }
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('public/images');
        }

        // Buat slug dari judul
        $slug = Str::slug($request->title);

        // Perbarui data berita di database
        $news->update([
            'title' => $request->title,
            'slug' => $slug,
            'image' => $imagePath,
            'content' => $request->content,
        ]);

        // Redirect kembali ke halaman daftar berita dengan pesan sukses
        return redirect()->route('admin.news.index')
                         ->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Hapus berita dari database.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(News $news)
    {
        // Hapus gambar dari storage
        if ($news->image) {
            Storage::delete($news->image);
        }
        // Hapus data berita dari database
        $news->delete();

        // Redirect kembali ke halaman daftar berita dengan pesan sukses
        return redirect()->route('admin.news.index')
                         ->with('success', 'Berita berhasil dihapus.');
    }
}
