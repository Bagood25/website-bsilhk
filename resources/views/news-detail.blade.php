@extends('layouts.app')

@section('title', $item->judul)

@section('content')
<div class="container mx-auto px-6 py-12">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        
        {{-- Menampilkan gambar berita --}}
        @if($item->gambar)
            <img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Berita: {{ $item->judul }}" class="w-full h-auto object-cover">
        @endif
        
        <div class="p-8">
            {{-- Judul Berita --}}
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">{{ $item->judul }}</h1>
            
            {{-- Informasi Penulis, Tanggal, dan Kategori --}}
            <div class="text-sm text-gray-500 mb-6">
                <span>Oleh: {{ $item->user->name ?? 'Admin' }}</span> |
                <span>Diterbitkan pada: {{ $item->created_at->format('d F Y') }}</span>
                @if($item->kategori)
                    | Kategori: <span class="font-semibold">{{ ucwords(str_replace('_', ' ', $item->kategori)) }}</span>
                @endif
            </div>
            
            {{-- Konten Lengkap Berita --}}
            <div class="prose max-w-none text-gray-800 text-lg leading-relaxed">
                {!! $item->isi !!}
            </div>

            {{-- Tombol Kembali --}}
            <div class="mt-12 border-t pt-6">
                <a href="{{ url()->previous() }}" class="text-green-600 hover:text-green-800 font-semibold">&larr; Kembali</a>
            </div>
        </div>
        
    </div>
</div>
@endsection