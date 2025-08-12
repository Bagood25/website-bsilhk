<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Menghubungkan model ini ke tabel 'beritas' di database.
     * Ini adalah baris yang sangat penting.
     */
    protected $table = 'beritas';

    /**
     * The attributes that aren't mass assignable.
     */
    protected $guarded = ['id'];

    /**
     * Mendefinisikan relasi ke model User.
     * Struktur ini sudah benar karena Anda memiliki kolom 'user_id'.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relasi 'category' sengaja DIHAPUS dari sini.
     * Kolom 'kategori' di database Anda berisi string (contoh: 'berita_utama'),
     * bukan ID yang bisa dihubungkan ke tabel lain, sehingga relasi Eloquent akan gagal.
     * Kita akan menanganinya langsung di view.
     */

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
