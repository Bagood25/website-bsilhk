@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Edit Berita</h1>
        <a href="{{ route('admin.news.index') }}" class="px-6 py-2 text-sm font-semibold text-gray-700 bg-gray-200 rounded-lg shadow-md hover:bg-gray-300 transition duration-300">
            Kembali
        </a>
    </div>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white shadow-lg rounded-xl p-8">
        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Judul Berita</label>
                <input type="text" name="title" id="title" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('title', $news->title) }}" required>
            </div>
            <div class="mb-6">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Gambar Saat Ini</label>
                @if ($news->image)
                    <img src="{{ Storage::url($news->image) }}" alt="{{ $news->title }}" class="h-48 w-full object-cover rounded-md mb-4">
                @else
                    <div class="h-48 w-full bg-gray-200 rounded-md flex items-center justify-center text-gray-500 mb-4">Tidak ada gambar</div>
                @endif
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Unggah Gambar Baru (opsional)</label>
                <input type="file" name="image" id="image" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-6">
                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Konten</label>
                <textarea name="content" id="content" rows="10" class="shadow appearance-none border rounded-lg w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('content', $news->content) }}</textarea>
            </div>
            <div class="flex items-center justify-end">
                <button type="submit" class="px-6 py-2 text-sm font-semibold text-white bg-orange-600 rounded-lg shadow-md hover:bg-orange-700 transition duration-300">
                    Perbarui
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
