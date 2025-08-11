<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->judul ?? 'Detail Berita' }} - BSILHK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .prose img { border-radius: 0.5rem; }
        .prose h2 { font-size: 1.5em; margin-top: 1.5em; }
        .prose p { line-height: 1.75; }
    </style>
</head>
<body class="bg-gray-100">

    @include('partials._header')

    <div class="container mx-auto max-w-4xl py-8 px-4">
        <article class="bg-white rounded-lg shadow-lg p-6 md:p-8">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">{{ $news->judul }}</h1>

            <div class="text-sm text-gray-600 mb-6">
                @if(isset($news) && $news->created_at)
                <span>Dipublikasikan pada {{ $news->created_at->format('d F Y') }}</span>
                @else
                <span>Tanggal tidak tersedia</span>
                @endif
            </div>

            @if(isset($news) && $news->gambar)
            <img src="{{ asset('storage/' . $news->gambar) }}" alt="{{ $news->judul }}" class="w-full h-auto object-cover rounded-lg shadow-md mb-8">
            @else
            <img src="https://placehold.co/1200x600/e2e8f0/adb5bd?text=Gambar+Tidak+Tersedia" alt="Gambar tidak tersedia" class="w-full h-auto object-cover rounded-lg shadow-md mb-8">
            @endif

            <div class="prose max-w-none text-gray-800">
                {!! $news->isi ?? 'Konten tidak tersedia.' !!}
            </div>
        </article>

        <div class="mt-8">
            <a href="{{ url('/') }}" class="text-green-600 hover:text-green-800 font-semibold">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </div>

    @include('partials._footer')

</body>
</html>
