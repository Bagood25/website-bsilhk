@extends('layouts.app')

@section('title', 'Profil P2SEMH')

@section('content')
<main>
    <section class="relative text-white bg-cover bg-center" style="background-image: url('{{ asset('images/background hutan.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-6 py-16 text-center relative z-10">
            <h1 class="text-4xl font-bold text-white">Profil</h1>
            <p class="mt-2 text-lg text-gray-300">
                <a href="{{ url('/') }}" class="hover:text-white transition-colors duration-200">Beranda</a>
                <span class="mx-2">></span>
                <span>Profil</span>
            </p>
        </div>
    </section>

    <section class="py-16 lg:py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
                
                <div class="lg:col-span-1 flex justify-center">
                    <img src="{{ asset('images/logo-bsilhk.png') }}" alt="Logo BSILHK P2SEMH" class="w-64 h-auto object-contain rounded-lg">
                </div>

                <div class="lg:col-span-2">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Pusat Pengembangan Sosial Ekonomi Masyarakat Hutan (P2SEMH)</h2>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Selamat datang di profil resmi Pusat Pengembangan Sosial Ekonomi Masyarakat Hutan (P2SEMH), salah satu unit kerja strategis di bawah Balai Standardisasi Instrumen Lingkungan Hidup dan Kehutanan (BSILHK). Kami berdedikasi untuk memastikan bahwa setiap produk hasil hutan memenuhi standar kualitas tertinggi melalui pengembangan instrumen pengujian yang akurat dan terpercaya.
                    </p>
                    <p class="text-gray-600 leading-relaxed mb-4">
                        Berlokasi di Kawasan Hutan dengan Tujuan Khusus (KHDTK) Aek Nauli, kami berada di garis depan dalam inovasi standardisasi untuk mendukung pengelolaan hutan yang lestari dan berkelanjutan. Misi kami adalah untuk meningkatkan daya saing produk hasil hutan Indonesia di pasar global dengan menjamin mutu dan legalitasnya melalui metode pengujian yang terstandar dan diakui secara internasional.
                    </p>
                    <p class="text-gray-600 leading-relaxed">
                        Melalui website ini, kami berbagi informasi terkini, publikasi, serta layanan yang kami sediakan untuk para pemangku kepentingan di sektor kehutanan.
                    </p>
                </div>

            </div>
        </div>
    </section>
</main>
@endsection