@extends('layouts.app') {{-- Menggunakan layout utama --}}

@section('title', $pageTitle ?? 'Agenda') {{-- Mengisi judul halaman --}}

@section('content') {{-- Bagian konten utama --}}
    {{-- Hero Section Agenda --}}
    <div class="relative bg-cover bg-center h-64 md:h-80 flex items-center justify-center" style="background-image: url('https://placehold.co/1200x400/000000/FFFFFF?text=Background+Image+Agenda');">
        <div class="absolute inset-0 bg-black opacity-50"></div> {{-- Overlay gelap --}}
        <div class="relative z-10 text-center text-white p-4">
            <h1 class="text-3xl md:text-5xl font-bold mb-2">{{ $pageTitle ?? 'Agenda' }}</h1>
            <div class="text-sm md:text-base">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> 
                <span class="mx-2">&gt;</span> 
                <span>{{ $pageTitle ?? 'Agenda' }}</span>
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
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Daftar Agenda</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- Item Agenda 1 --}}
                <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <img src="https://placehold.co/400x250/E0E0E0/333333?text=Gambar+1" alt="Gambar Agenda 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Judul Agenda 1</h3>
                        <p class="text-gray-600 text-sm">
                            Keterangan singkat untuk agenda pertama. Ini adalah teks placeholder yang akan diganti dengan deskripsi agenda yang sebenarnya dari backend.
                        </p>
                        <p class="text-gray-500 text-xs mt-2">Tanggal: DD/MM/YYYY | Lokasi: Placeholder</p>
                        <a href="#" class="inline-block mt-4 text-blue-600 hover:underline text-sm">Baca Selengkapnya</a>
                    </div>
                </div>

                {{-- Item Agenda 2 --}}
                <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <img src="https://placehold.co/400x250/D0D0D0/333333?text=Gambar+2" alt="Gambar Agenda 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Judul Agenda 2</h3>
                        <p class="text-gray-600 text-sm">
                            Keterangan singkat untuk agenda kedua. Ini adalah teks placeholder yang akan diganti dengan deskripsi agenda yang sebenarnya dari backend.
                        </p>
                        <p class="text-gray-500 text-xs mt-2">Tanggal: DD/MM/YYYY | Lokasi: Placeholder</p>
                        <a href="#" class="inline-block mt-4 text-blue-600 hover:underline text-sm">Baca Selengkapnya</a>
                    </div>
                </div>

                {{-- Item Agenda 3 --}}
                <div class="border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-md transition-shadow duration-300">
                    <img src="https://placehold.co/400x250/C0C0C0/333333?text=Gambar+3" alt="Gambar Agenda 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Judul Agenda 3</h3>
                        <p class="text-gray-600 text-sm">
                            Keterangan singkat untuk agenda ketiga. Ini adalah teks placeholder yang akan diganti dengan deskripsi agenda yang sebenarnya dari backend.
                        </p>
                        <p class="text-gray-500 text-xs mt-2">Tanggal: DD/MM/YYYY | Lokasi: Placeholder</p>
                        <a href="#" class="inline-block mt-4 text-blue-600 hover:underline text-sm">Baca Selengkapnya</a>
                    </div>
                </div>
                
                {{-- Anda bisa menambahkan lebih banyak item agenda di sini --}}
            </div>
        </div>
    </div>
@endsection
