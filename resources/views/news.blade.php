@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<main class="container mx-auto my-8 px-4">
    <h1 class="text-4xl font-extrabold text-gray-900 mb-8">Berita Terbaru</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- News Card 1 -->
        <a href="article-pertikawan.blade.php" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <img src="https://placehold.co/600x400/0d9488/ffffff?text=Berita+Dummy" alt="Gambar Berita 1" class="w-full h-48 object-cover">
            <div class="p-6">
                <p class="text-sm text-gray-500 mb-2">15 September 2024</p>
                <h3 class="text-lg font-semibold text-gray-900 leading-tight mb-2">PERTIKAWAN Subcamp 3 BSILHK: Pengalaman Seru Belajar Seputar Standar Lingkungan Hidup dan Kehutanan</h3>
                <p class="text-gray-600 text-sm line-clamp-3">
                    Kegiatan PERTIKAWAN Subcamp 3 BSILHK di Pusat Konservasi Tumbuhan Kebun Raya Cibinong, merupakan ajang bagi Pramuka Penggalang dan Penegak untuk menguji kemampuan dan menambah wawasan di bidang lingkungan hidup dan kehutanan.
                </p>
                <span class="mt-4 inline-block text-green-600 font-semibold text-sm">Baca Selengkapnya >></span>
            </div>
        </a>
        <!-- News Card 2 -->
        <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <img src="https://placehold.co/600x400/0d9488/ffffff?text=Berita+Dummy" alt="Gambar Berita 2" class="w-full h-48 object-cover">
            <div class="p-6">
                <p class="text-sm text-gray-500 mb-2">10 September 2024</p>
                <h3 class="text-lg font-semibold text-gray-900 leading-tight mb-2">Judul Berita Kabar BSILHK Kedua</h3>
                <p class="text-gray-600 text-sm line-clamp-3">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                </p>
                <span class="mt-4 inline-block text-green-600 font-semibold text-sm">Baca Selengkapnya >></span>
            </div>
        </a>
        <!-- News Card 3 -->
        <a href="#" class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <img src="https://placehold.co/600x400/0d9488/ffffff?text=Berita+Dummy" alt="Gambar Berita 3" class="w-full h-48 object-cover">
            <div class="p-6">
                <p class="text-sm text-gray-500 mb-2">08 September 2024</p>
                <h3 class="text-lg font-semibold text-gray-900 leading-tight mb-2">Judul Berita Lainnya</h3>
                <p class="text-gray-600 text-sm line-clamp-3">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                </p>
                <span class="mt-4 inline-block text-green-600 font-semibold text-sm">Baca Selengkapnya >></span>
            </div>
        </a>
    </div>
</main>
@endsection
