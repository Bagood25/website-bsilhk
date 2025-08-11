<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = News::latest()->paginate(9);
        return view('news.index', compact('beritas'));
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        // PERBAIKAN: Kembali menggunakan view 'show' yang standar
        return view('news.show', [
            'news' => $news
        ]);
    }
}
