<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Regulasi extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'slug', 'isi', 'file'];
    // Jika nama tabel Anda bukan 'regulasis', Anda bisa menentukannya di sini
    // protected $table = 'nama_tabel_anda';
}