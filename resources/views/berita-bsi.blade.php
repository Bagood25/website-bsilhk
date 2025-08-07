@extends('layouts.app')

@section('content')
    <!-- Banner Halaman -->
    <div class="bg-gray-900 py-16 px-4 text-center relative">
        <div class="max-w-7xl mx-auto z-10 relative">
            <h1 class="text-4xl font-extrabold text-white sm:text-5xl">Berita BSI</h1>
            <p class="mt-2 text-sm text-gray-300">
                Beranda &gt; Berita &gt; Berita BSI
            </p>
        </div>
    </div>

    <!-- Konten Utama: Berita BSI -->
    <main class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Halaman -->
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-gray-900 text-center">Berita BSI</h1>
                <p class="mt-4 text-lg text-gray-600 text-center">Informasi dan berita terbaru dari BSI.</p>
            </div>

            <!-- Grid Berita 3x3 -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Item Berita 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+BSI+1" alt="Judul Berita BSI 1">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita BSI Pertama</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 12 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+BSI+2" alt="Judul Berita BSI 2">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita BSI Kedua yang Menarik</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 11 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+BSI+3" alt="Judul Berita BSI 3">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Ringkasan Kegiatan BSI</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 10 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                
                <!-- Item Berita 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+BSI+4" alt="Judul Berita BSI 4">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita BSI Keempat dengan Informasi Baru</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 9 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+BSI+5" alt="Judul Berita BSI 5">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Pengumuman Penting dari BSI</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 8 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+BSI+6" alt="Judul Berita BSI 6">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita BSI Keenam</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 7 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 7 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+BSI+7" alt="Judul Berita BSI 7">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita BSI Ketujuh yang Cukup Pendek</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 6 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 8 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+BSI+8" alt="Judul Berita BSI 8">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita BSI Kedelapan</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 5 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 9 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+BSI+9" alt="Judul Berita BSI 9">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita BSI Kesembilan yang Sedang Tren</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 4 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
