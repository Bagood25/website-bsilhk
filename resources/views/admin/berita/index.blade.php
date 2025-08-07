<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Daftar Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto mt-10 p-6 bg-white rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Daftar Berita</h1>
            <a href="{{ route('admin.berita.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">Tambah Berita Baru</a>
        </div>
        
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded-lg mb-6 text-center">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Gambar</th>
                        <th class="py-3 px-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Judul</th>
                        <th class="py-3 px-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Kategori</th>
                        <th class="py-3 px-4 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    @foreach($beritas as $berita)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-4 px-4">
                            @if ($berita->gambar)
                                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-20 h-16 object-cover rounded-md">
                            @else
                                <div class="w-20 h-16 bg-gray-300 rounded-md flex items-center justify-center text-xs text-gray-500">No Image</div>
                            @endif
                        </td>
                        <td class="py-4 px-4 font-medium">{{ \Illuminate\Support\Str::limit($berita->judul, 50) }}</td>
                        <td class="py-4 px-4">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                {{ ucfirst(str_replace('_', ' ', $berita->kategori)) }}
                            </span>
                        </td>
                        <td class="py-4 px-4">
                            <a href="{{ route('admin.berita.edit', $berita->id) }}" class="text-blue-600 hover:text-blue-900 transition duration-300 mr-2">Edit</a>
                            <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900 transition duration-300" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>