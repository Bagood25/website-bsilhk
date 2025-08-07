@extends('layouts.app')

@section('content')
    @include('partials._header')

    <!-- Konten Utama: Berita KLHK -->
    <main class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Halaman -->
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-gray-900 text-center">Berita KLHK</h1>
                <p class="mt-4 text-lg text-gray-600 text-center">Berita-berita terbaru dari KLHK yang relevan.</p>
            </div>

            <!-- Grid Berita 3x3 -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Item Berita 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+KLHK+1" alt="Judul Berita KLHK 1">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita KLHK Pertama</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 12 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+KLHK+2" alt="Judul Berita KLHK 2">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita KLHK Kedua dengan Informasi Terbaru</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 11 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+KLHK+3" alt="Judul Berita KLHK 3">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Ringkasan Kegiatan KLHK</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 10 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
                
                <!-- Item Berita 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+KLHK+4" alt="Judul Berita KLHK 4">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita KLHK Keempat yang Paling Penting</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 9 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+KLHK+5" alt="Judul Berita KLHK 5">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Pengumuman Terbaru dari KLHK</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 8 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+KLHK+6" alt="Judul Berita KLHK 6">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita KLHK Keenam</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 7 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 7 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+KLHK+7" alt="Judul Berita KLHK 7">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita KLHK Ketujuh</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 6 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 8 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+KLHK+8" alt="Judul Berita KLHK 8">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita KLHK Kedelapan dengan Kata Kunci Menarik</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 5 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 9 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+KLHK+9" alt="Judul Berita KLHK 9">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita KLHK Kesembilan</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 4 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('partials._footer')
@endsection
