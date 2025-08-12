@extends('layouts.app') {{-- Pastikan ini adalah layout publik utama Anda --}}

@section('title', 'Galeri Foto')

@section('content')
    <div class="bg-gray-900 py-16 px-4 text-center text-white">
        <h1 class="text-4xl font-extrabold sm:text-5xl">Galeri Foto</h1>
        <p class="mt-2 text-lg text-gray-300">Dokumentasi kegiatan dan momen penting BSILHK.</p>
    </div>

    <main class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if($photos->isNotEmpty())
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                    @foreach ($photos as $photo)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                            <div class="aspect-w-4 aspect-h-3">
                                <img src="{{ asset('storage/' . $photo->gambar) }}" alt="{{ $photo->judul }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                            </div>
                            <div class="p-4 bg-white text-center">
                                <h3 class="font-semibold text-gray-900 truncate" title="{{ $photo->judul }}">{{ $photo->judul }}</h3>
                            </div>
                        </div>
                    @endforeach

                </div>
            @else
                <div class="text-center py-16">
                    <p class="text-gray-500 text-xl">Galeri foto akan segera tersedia.</p>
                    <p class="text-gray-400 mt-2">Silakan coba lagi nanti.</p>
                </div>
            @endif

        </div>
    </main>
@endsection

@push('styles')
{{-- Ini adalah plugin TailwindCSS untuk rasio aspek, agar semua gambar sama tinggi --}}
<style>
    .aspect-w-4 { position: relative; padding-bottom: 75%; }
    .aspect-h-3 { }
    .aspect-w-4 > * { position: absolute; height: 100%; width: 100%; top: 0; right: 0; bottom: 0; left: 0; }
</style>
@endpush