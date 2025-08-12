@extends('layouts.admin')

@section('title', 'Tambah Foto Baru')

@section('content')
<div class="container-fluid mx-auto px-6 py-4">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Foto Baru</h1>

    <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl">
        <form action="{{ route('admin.photos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-6">
                <label for="judul" class="block text-gray-700 font-bold mb-2">Judul Foto</label>
                <input type="text" id="judul" name="judul" value="{{ old('judul') }}"
                       class="shadow-sm appearance-none border rounded w-full py-3 px-4 text-gray-700 leading-tight focus:outline-none focus:ring-2 focus:ring-green-500 @error('judul') border-red-500 @enderror"
                       placeholder="Contoh: Kunjungan Menteri LHK" required>
                @error('judul')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="gambar" class="block text-gray-700 font-bold mb-2">File Gambar</label>
                <input type="file" id="gambar" name="gambar"
                       class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 @error('gambar') border-red-500 rounded-lg p-2 @enderror" required>
                <small class="form-text text-gray-500 mt-1">Format: JPG, PNG, WEBP. Maksimal 2MB.</small>
                @error('gambar')
                    <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-end space-x-4">
                <a href="{{ route('admin.photos.index') }}" class="px-4 py-2 bg-gray-200 text-gray-800 font-semibold rounded-lg hover:bg-gray-300 transition duration-300">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white font-bold rounded-lg shadow-md transition duration-300">
                    Simpan Foto
                </button>
            </div>
        </form>
    </div>
</div>
@endsection