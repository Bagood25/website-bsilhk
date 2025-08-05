@extends('layouts.app')

@section('title', 'Daftar Lokasi')

@section('content')
<div class="bg-gray-100 py-8">
    <div class="max-w-6xl mx-auto px-4">
        <h1 class="text-4xl font-bold text-gray-900 mb-8">Daftar Lokasi</h1>

        @if($locations->isEmpty())
            <div class="bg-white p-6 rounded-lg shadow-md text-gray-600 text-center">
                <p>Tidak ada data lokasi yang ditemukan.</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($locations as $location)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transition-transform duration-300 transform hover:scale-105">
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $location->name }}</h2>
                            <p class="text-gray-600 mb-4">{{ $location->description }}</p>
                            
                            <div class="text-sm text-gray-500 space-y-1">
                                <p><strong>Kategori:</strong> {{ $location->category }}</p>
                                <p><strong>Alamat:</strong> {{ $location->address }}</p>
                                <p><strong>Koordinat:</strong> {{ $location->latitude }}, {{ $location->longitude }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection
