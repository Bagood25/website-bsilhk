@extends('layouts.app')

@section('title', 'Berita Standar')

@section('content')
    <div class="bg-gray-900 py-16 px-4 text-center relative">
        <div class="max-w-7xl mx-auto z-10 relative">
            <h1 class="text-4xl font-extrabold text-white sm:text-5xl">Berita Standar</h1>
            <p class="mt-2 text-sm text-gray-300">Beranda &gt; Berita &gt; Berita Standar</p>
        </div>
    </div>

    <main class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse ($news as $item)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col transition-transform transform hover:-translate-y-2">
                        <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : 'https://placehold.co/600x400/A7F3D0/1E3A8A?text=Berita+Standar' }}" alt="Gambar Berita: {{ $item->judul }}" class="w-full h-48 object-cover">
                        <div class="p-6 flex flex-col flex-grow">
                            <h2 class="text-xl font-semibold mb-2 text-gray-900">{{ $item->judul }}</h2>
                            <p class="text-gray-600 mb-4 flex-grow line-clamp-3">{{ Str::limit(strip_tags($item->isi), 120) }}</p>
                            <a href="{{ route('news.show', $item->slug) }}" class="mt-auto inline-block text-green-600 hover:text-green-800 font-semibold">
                                Baca Selengkapnya &rarr;
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-16">
                        <p class="text-gray-500 text-xl">Belum ada berita dalam kategori ini.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </main>
@endsection