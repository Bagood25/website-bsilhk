<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 text-gray-800 p-8">

    <div class="max-w-6xl mx-auto">
        <h1 class="text-4xl font-bold mb-8">Semua Berita</h1>

        @if($allNews->isEmpty())
            <p>Tidak ada berita yang ditemukan.</p>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                @foreach($allNews as $news)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col md:flex-row transition-transform duration-300 hover:scale-105">
                        <div class="md:w-1/3 flex-shrink-0">
                            <img src="{{ $news->image_url ?? 'https://placehold.co/600x400' }}" alt="{{ $news->title }}" class="w-full h-48 md:h-full object-cover">
                        </div>
                        <div class="p-6 md:w-2/3 flex flex-col justify-between">
                            <div>
                                <h2 class="text-xl font-semibold mb-2">{{ $news->title }}</h2>
                                <p class="text-sm text-gray-500 mb-4">Dipublikasikan pada {{ $news->published_at->format('d M Y') }}</p>
                                <p class="text-gray-600 mb-4">{{ \Illuminate\Support\Str::limit(strip_tags($news->content), 150) }}</p>
                            </div>
                            <a href="{{ route('news.show', $news->slug) }}" class="text-blue-600 font-medium hover:underline self-start mt-auto">Baca Selengkapnya →</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                {{ $allNews->links() }}
            </div>
        @endif
    </div>

</body>
</html>
