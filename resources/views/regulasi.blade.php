@extends('layouts.app') {{-- Ini memberitahu Laravel untuk menggunakan layout 'layouts/app.blade.php' --}}

@section('title', $pageTitle ?? 'Regulasi') {{-- Mengisi bagian 'title' di layout --}}

@section('content') {{-- Mengisi bagian 'content' di layout --}}
    {{-- Hero Section --}}
    <div class="relative bg-cover bg-center h-64 md:h-80 flex items-center justify-center" style="background-image: url('https://placehold.co/1200x400/000000/FFFFFF?text=Background+Image+Regulasi');">
        <div class="absolute inset-0 bg-black opacity-50"></div> {{-- Overlay gelap --}}
        <div class="relative z-10 text-center text-white p-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-2">{{ $pageTitle ?? 'Regulasi' }}</h1>
            <div class="text-sm md:text-base">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> 
                <span class="mx-2">&gt;</span> 
                <a href="{{ route('regulasi.show', ['title' => 'peraturan-pemerintah']) }}" class="hover:underline">Regulasi</a> 
                <span class="mx-2">&gt;</span> 
                <span>{{ $pageTitle ?? 'Regulasi' }}</span>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-8">
        {{-- Tombol Download (jika diperlukan di sini) --}}
        <div class="text-center mb-8">
            <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                <svg class="-ml-1 mr-3 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L10 11.586l2.293-2.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                Download
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            @if ($pageTitle == 'JDIH KLHK')
                <h2 class="text-2xl font-bold text-gray-800 mb-4">JDIH KLHK:</h2>
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li><a href="#" class="text-blue-600 hover:underline">1. Undang Undang Nomor 1 Tahun 2022 Tentang...</a></li>
                    <li><a href="#" class="text-blue-600 hover:underline">2. Undang Undang Nomor 2 Tahun 2022 Tentang...</a></li>
                    {{-- Tambahkan item JDIH KLHK lainnya di sini --}}
                </ul>
            @else
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Konten {{ $pageTitle ?? 'Regulasi' }}</h2>
                <p class="text-gray-700">
                    Ini adalah halaman untuk menampilkan konten regulasi spesifik untuk **{{ $pageTitle ?? 'Regulasi' }}**.
                    Di sini Anda dapat menampilkan daftar dokumen, tabel, atau informasi detail terkait regulasi tersebut.
                </p>
                <p class="mt-4 text-gray-600">
                    Silakan tambahkan konten regulasi yang relevan di bagian ini.
                </p>
            @endif
        </div>
    </div>
@endsection
