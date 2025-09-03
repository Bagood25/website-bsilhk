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

        {{-- Konten Grid Logo (SUDAH DIPERBAIKI) --}}
        {{-- 1. Dibuat jadi grid 2x2 --}}
        {{-- 2. Ukuran logo diperbesar (h-40) --}}
        {{-- 3. Efek abu-abu (grayscale) dihilangkan --}}
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-2 gap-8 md:gap-16 items-center">
                
                <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/logo-kemenhut.png') }}" alt="Logo Kemenhut" class="mx-auto h-40 object-contain transition-transform duration-300 hover:scale-110">
                    </a>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                     <a href="#" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/logo-bsn.png') }}" alt="Logo BSN" class="mx-auto h-40 object-contain transition-transform duration-300 hover:scale-110">
                     </a>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                     <a href="#" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/logo-arkn.png') }}" alt="Logo ARKN" class="mx-auto h-40 object-contain transition-transform duration-300 hover:scale-110">
                     </a>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                     <a href="#" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('images/logo-tkmh.png') }}" alt="Logo TKMH" class="mx-auto h-40 object-contain transition-transform duration-300 hover:scale-110">
                     </a>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection