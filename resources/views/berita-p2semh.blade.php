@extends('layouts.app')

{{-- TAMBAHKAN BARIS DI BAWAH INI --}}
@section('title', $title)

@section('content')
<div class="bg-gray-100">
    <section class="relative text-white bg-cover bg-center" style="background-image: url('{{ asset('images/background hutan.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto px-6 py-12 text-center relative z-10">
    <h1 class="text-4xl font-bold text-white">Berita P2SEMH</h1>
    {{-- KODE PENGGANTI --}}
    <p class="mt-2 text-lg text-gray-300">
        <a href="{{ url('/') }}" class="hover:text-white transition-colors duration-200">Beranda</a>
        <span class="mx-2">></span>
        {{-- TAUTAN BARU DITAMBAHKAN --}}
        <a href="{{ route('berita-kehutanan') }}" class="hover:text-white transition-colors duration-200">Berita</a>
        <span class="mx-2">></span>
        <span>Berita P2SEMH</span>
    </p>
</div>
</section>

    <section class="container mx-auto px-6 py-16">
        @if($beritas->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($beritas as $berita)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 flex flex-col">
                        <a href="{{ route('news.detail', $berita->slug) }}">
                            <img src="{{ asset('storage/' . $berita->gambar) }}">
                        </a>
                        <div class="p-6 flex flex-col flex-grow">
                            <p class="text-sm text-gray-500 mb-2">{{ $berita->created_at->format('d F Y') }}</p>
                            <a href="{{ route('news.detail', $berita->slug) }}" class="hover:text-green-600">
                                <h3 class="text-xl font-bold text-gray-900 mb-3 leading-tight">{{ $berita->judul }}</h3>
                            </a>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-3 flex-grow">
                                {{ $berita->kutipan }}
                            </p>
                            <div class="mt-auto">
                                <a href="{{ route('news.detail', $berita->slug) }}" class="text-green-600 hover:text-green-800 font-semibold">
                                    Baca Selengkapnya &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $beritas->links() }}
            </div>
        @else
            <div class="text-center py-16">
                <p class="text-gray-500 text-xl">Belum ada berita yang tersedia di kategori ini.</p>
            </div>
        @endif
    </section>
</div>
@endsection