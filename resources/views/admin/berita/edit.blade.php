<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Edit Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg max-w-2xl">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Berita: <span class="text-green-600">{{ $berita->judul }}</span></h1>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6">
                <strong class="font-bold">Oops!</strong>
                <span class="block sm:inline">Ada beberapa masalah dengan input Anda.</span>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="judul" class="block text-gray-700 font-bold mb-2">Judul:</label>
                <input type="text" id="judul" name="judul" value="{{ old('judul', $berita->judul) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="slug" class="block text-gray-700 font-bold mb-2">Slug:</label>
                <input type="text" id="slug" name="slug" value="{{ old('slug', $berita->slug) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="kategori" class="block text-gray-700 font-bold mb-2">Kategori:</label>
                <select name="kategori" id="kategori" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="berita_utama" @selected(old('kategori', $berita->kategori) == 'berita_utama')>Berita Utama</option>
                    <option value="berita_fokus" @selected(old('kategori', $berita->kategori) == 'berita_fokus')>Berita Fokus</option>
                    <option value="berita_standar" @selected(old('kategori', $berita->kategori) == 'berita_standar')>Berita Standar</option>
                    <option value="kabar_bsi" @selected(old('kategori', $berita->kategori) == 'kabar_bsi')>Kabar BSI</option>
                    <option value="berita_klhk" @selected(old('kategori', $berita->kategori) == 'berita_klhk')>Berita KLHK</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="isi" class="block text-gray-700 font-bold mb-2">Isi Berita:</label>
                <textarea id="isi" name="isi" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('isi', $berita->isi) }}</textarea>
            </div>
            <div class="mb-6">
                <label for="gambar" class="block text-gray-700 font-bold mb-2">Gambar:</label>
                @if ($berita->gambar)
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar saat ini" class="w-40 h-32 object-cover rounded-md mb-2">
                @endif
                <input type="file" id="gambar" name="gambar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline transition duration-300">Update</button>
                <a href="{{ route('admin.berita.index') }}" class="inline-block align-baseline font-bold text-sm text-gray-500 hover:text-gray-800">Kembali</a>
            </div>
        </form>
    </div>

</body>
</html>