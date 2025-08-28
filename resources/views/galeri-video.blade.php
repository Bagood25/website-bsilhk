@extends('layouts.app')

@section('title', 'Galeri Video')

@section('content')
    {{-- Bagian ini sudah menggunakan background hutan --}}
    <div class="relative py-16 px-4 text-center text-white bg-cover bg-center" style="background-image: url('{{ asset('images/background hutan.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative z-10">
            <h1 class="text-4xl font-extrabold sm:text-5xl">Galeri Video</h1>
            <p class="mt-2 text-lg text-gray-300">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> &gt; 
                <a href="#" class="hover:underline">Media dan Informasi</a> &gt; 
                <span class="font-medium">Galeri Video</span>
            </p>
        </div>
    </div>

    {{-- Main Content --}}
    <main class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">
                    Koleksi Video P2SEMH
                </h2>

                @if($videos->count() > 0)
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($videos as $video)
                            @php
                                preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $video->youtube_url, $matches);
                                $youtubeId = $matches[1] ?? null;
                            @endphp

                            @if($youtubeId)
                            <a href="{{ $video->youtube_url }}" target="_blank" rel="noopener noreferrer" class="block group rounded-lg overflow-hidden shadow-md transform hover:scale-105 transition-transform duration-300">
                                <div class="relative">
                                    <img src="https://img.youtube.com/vi/{{ $youtubeId }}/hqdefault.jpg" alt="{{ $video->judul }}" class="w-full h-48 object-cover">
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></svg>
                                    </div>
                                </div>
                                <div class="p-4 bg-white">
                                    <h3 class="text-md font-semibold text-gray-800 truncate" title="{{ $video->judul }}">{{ $video->judul }}</h3>
                                </div>
                            </a>
                            @endif
                        @endforeach
                    </div>

                    <div class="mt-12">
                        {{ $videos->links() }}
                    </div>
                @else
                    <p class="text-center text-gray-500 py-10">Belum ada video yang tersedia.</p>
                @endif
            </div>
        </div>
    </main>
@endsection