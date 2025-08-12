@extends('layouts.admin')

@section('title', 'Galeri Foto')

@section('content')
<div class="container-fluid mx-auto px-6 py-4">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Galeri Foto</h1>
            <p class="text-sm text-gray-600 mt-1">Kelola semua foto yang akan ditampilkan di halaman galeri publik.</p>
        </div>
        <a href="{{ route('admin.photos.create') }}" class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-bold rounded-lg shadow-md transition duration-300">
            <i class="fas fa-plus mr-2"></i>
            Tambah Foto Baru
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
            <p class="font-bold">Sukses</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @if($photos->isNotEmpty())
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($photos as $photo)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group flex flex-col">
                    <div class="relative">
                        <div class="aspect-w-4 aspect-h-3">
                            <img src="{{ asset('storage/' . $photo->gambar) }}" alt="{{ $photo->judul }}" class="w-full h-full object-cover">
                        </div>
                        <form action="{{ route('admin.photos.destroy', $photo->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="absolute top-2 right-2 bg-red-600 text-white h-10 w-10 flex items-center justify-center rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300" title="Hapus Foto">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                    <div class="p-4 flex-grow">
                        <h3 class="font-semibold text-gray-900 truncate" title="{{ $photo->judul }}">{{ $photo->judul }}</h3>
                        <p class="text-xs text-gray-500 mt-1">
                            Diunggah: {{ $photo->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="text-center bg-white p-12 rounded-lg shadow-md">
            <p class="text-gray-500 text-xl">Belum ada foto yang diunggah.</p>
            <p class="text-gray-400 mt-2">Klik tombol "+ Tambah Foto Baru" untuk memulai.</p>
        </div>
    @endif
</div>

{{-- Tambahan style untuk rasio aspek gambar --}}
@push('styles')
<style>
    .aspect-w-4 { position: relative; padding-bottom: 75%; }
    .aspect-h-3 { }
    .aspect-w-4 > * { position: absolute; height: 100%; width: 100%; top: 0; right: 0; bottom: 0; left: 0; }
</style>
@endpush
@endsection