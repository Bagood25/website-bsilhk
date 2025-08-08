<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image_url',
        'published_at',
        'author_id',
    ];

    // Gunakan slug sebagai route binding key
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Relasi ke penulis (jika ada)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
