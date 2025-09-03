@extends('layouts.admin')

@section('content')
<div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg max-w-2xl">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">
        Edit Berita: <span class="text-green-600">{{ $berita->judul }}</span>
    </h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
            <strong class="font-bold">Oops!</strong>
            <span class="block sm:inline">Ada beberapa masalah dengan input Anda.</span>
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="judul" class="block text-gray-700 font-bold mb-2">Judul:</label>
            <input type="text" id="judul" name="judul" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ old('judul', $berita->judul) }}" required>
        </div>

        {{-- ====================================================== --}}
        {{-- == PERUBAHAN UTAMA ADA DI SINI == --}}
        {{-- ====================================================== --}}
        <div class="mb-4">
            <label for="kategori" class="block text-gray-700 font-bold mb-2">Kategori:</label>
            <select name="kategori" id="kategori" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                <option value="" disabled>-- Pilih Kategori --</option>
                <option value="berita-kehutanan" {{ old('kategori', $berita->kategori) == 'berita-kehutanan' ? 'selected' : '' }}>
                    Berita Kehutanan
                </option>
                <option value="berita-p2semh" {{ old('kategori', $berita->kategori) == 'berita-p2semh' ? 'selected' : '' }}>
                    Berita P2SEMH
                </option>
            </select>
        </div>
        {{-- ====================================================== --}}
        {{-- == AKHIR DARI PERUBAHAN == --}}
        {{-- ====================================================== --}}

        <div class="mb-4">
            <label for="isi" class="block text-gray-700 font-bold mb-2">Isi Berita:</label>
            <textarea id="isi" name="isi" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('isi', $berita->isi) }}</textarea>
        </div>

        <div class="mb-6">
            <label for="gambar" class="block text-gray-700 font-bold mb-2">Gambar:</label>
            <input type="file" id="gambar" name="gambar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            @if($berita->gambar)
                <div class="mt-4">
                    <p class="text-sm text-gray-600">Gambar saat ini:</p>
                    <img src="{{ asset('storage/berita/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-32 h-32 object-cover rounded mt-2">
                </div>
            @endif
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update Berita
            </button>
            <a href="{{ route('admin.berita.index') }}" class="text-gray-600 hover:text-gray-800 font-semibold">Batal</a>
        </div>
    </form>
</div>
@endsection