<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6 text-center">Daftar Berita</h1>
        @foreach ($beritaStandar as $berita)
            <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-semibold">{{ $berita->title }}</h2>
                <p class="text-sm text-gray-600 mb-4">
                    {{ $berita->published_at->format('d M Y') }}
                </p>
                <p class="text-gray-700 mb-4">
                    {{ Str::limit(strip_tags($berita->content), 150) }}
                </p>
                <a href="{{ route('news.show', $berita->slug) }}"
                   class="bg-blue-600 text-white font-medium py-2 px-4 rounded hover:bg-blue-700 transition">
                   Baca Selengkapnya
                </a>
            </div>
        @endforeach
    </div>
</body>
</html>
