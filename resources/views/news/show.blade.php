@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
<div class="container mx-auto px-6 py-12">
    <article class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8">
        
        {{-- ====================================================== --}}
        {{-- == PERUBAHAN UTAMA: MENGGANTI '$news' MENJADI '$berita' == --}}
        {{-- ====================================================== --}}

        <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $berita->judul }}</h1>
        
        <div class="text-gray-600 text-sm mb-6">
            <span>Ditulis oleh {{ $berita->user->name ?? 'Tim Redaksi' }}</span>
            <span class="mx-2">•</span>
            <span>{{ $berita->created_at->format('d F Y') }}</span>
            <span class="mx-2">•</span>
            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                @if($berita->kategori == 'berita-p2semh') bg-green-100 text-green-800 @else bg-blue-100 text-blue-800 @endif">
                {{ ucwords(str_replace('-', ' ', $berita->kategori)) }}
            </span>
        </div>

        @if($berita->gambar)
            <img class="w-full h-auto rounded-lg mb-8 object-cover" src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}">
        @endif
        
        {{-- INI KODE PERBAIKANNYA --}}
<div class="prose max-w-none text-gray-800">
    {!! nl2br(e($berita->isi)) !!}
</div>

    </article>
</div>
@endsection