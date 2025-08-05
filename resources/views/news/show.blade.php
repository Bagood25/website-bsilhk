<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-4xl mx-auto p-8">
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h1 class="text-4xl font-bold mb-4">{{ $news->title }}</h1>
            <p class="text-sm text-gray-500 mb-6">
                Dipublikasikan pada {{ $news->published_at->format('d M Y') }} oleh {{ $news->author->name ?? 'Admin' }}
            </p>
            <img src="{{ $news->image_url ?? 'https://placehold.co/800x600' }}" alt="{{ $news->title }}" class="w-full rounded-lg mb-6">
            <div class="prose max-w-none">
                <p>{!! nl2br(e($news->content)) !!}</p>
            </div>
            <a href="{{ route('news.index') }}" class="mt-8 inline-block text-blue-600 font-medium hover:underline">← Kembali ke Daftar Berita</a>
        </div>
    </div>
</body>
</html>
