@extends('layouts.app')

@section('content')
    <!-- Banner Halaman -->
    <div class="bg-gray-900 py-16 px-4 text-center relative">
        <div class="max-w-7xl mx-auto z-10 relative">
            <h1 class="text-4xl font-extrabold text-white sm:text-5xl">Fokus BSI</h1>
            <p class="mt-2 text-sm text-gray-300">
                Beranda &gt; Berita &gt; Fokus BSI
            </p>
        </div>
    </div>

    <!-- Konten Utama: Fokus BSI -->
    <main class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header Halaman -->
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-gray-900 text-center">Fokus BSI</h1>
                <p class="mt-4 text-lg text-gray-600 text-center">Berita-berita terkini dan fokus utama dari BSI.</p>
            </div>

            <!-- Grid Berita 3x3 -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Item Berita 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+1" alt="Judul Berita 1">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita Pertama</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 12 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+2" alt="Judul Berita 2">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita Kedua yang Lebih Panjang</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 11 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+3" alt="Judul Berita 3">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Ringkasan Berita Terkini</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 10 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+4" alt="Judul Berita 4">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita Keempat yang Sangat Menarik</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 9 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+5" alt="Judul Berita 5">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Pembaruan Penting dari BSI</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 8 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+6" alt="Judul Berita 6">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita Keenam yang Paling Populer</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 7 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 7 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+7" alt="Judul Berita 7">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita Ketujuh yang Cukup Pendek</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 6 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 8 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+8" alt="Judul Berita 8">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita Kedelapan dengan Kata Kunci Menarik</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 5 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>

                <!-- Item Berita 9 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform transform hover:scale-105 duration-300">
                    <img class="w-full h-48 object-cover" src="https://placehold.co/600x400/D1FAE5/102030?text=Berita+9" alt="Judul Berita 9">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800">Judul Berita Kesembilan yang Sedang Tren</h2>
                        <p class="mt-2 text-gray-600 text-sm">Tanggal Publikasi: 4 Juli 2024</p>
                        <a href="#" class="mt-4 inline-block text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
