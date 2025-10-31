@extends('layouts.app')

@section('title', $title)

@section('content')
<main class="py-16 lg:py-20">
    <div class="container mx-auto px-6">
        
        {{-- Judul Halaman --}}
        <div class="mb-12 text-center">
            <h2 class="text-4xl font-bold text-gray-800 tracking-tight">
                Tautan Terkait
            </h2>
            <p class="mt-2 text-lg text-gray-600">
                Lembaga dan Organisasi Mitra P2SEMH
            </p>
        </div>

        {{-- Konten Grid Logo (DIUBAH MENJADI DINAMIS) --}}
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-2 gap-8 md:gap-16 items-center">
                
                {{-- Perulangan untuk setiap partner dari database --}}
                @forelse($partners as $partner)
                <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <a href="{{ $partner->url }}" target="_blank" rel="noopener noreferrer" title="{{ $partner->name }}">
                        <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="mx-auto h-40 object-contain transition-transform duration-300 hover:scale-110">
                        <p class="text-center text-gray-700 font-semibold mt-4">{{ $partner->name }}</p>
                    </a>
                </div>
                @empty
                {{-- Pesan ini akan muncul jika tidak ada data partner di database --}}
                <p class="col-span-2 text-center text-gray-500 py-12">
                    Belum ada tautan terkait yang ditambahkan.
                </p>
                @endforelse
                
            </div>
        </div>

    </div>
</main>
@endsection