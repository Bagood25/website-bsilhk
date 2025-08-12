{{-- Mengasumsikan Anda punya layout utama bernama 'main.blade.php' --}}
@extends('layouts.main')

@section('container')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                {{-- Judul Berita --}}
                <h1 class="mb-3">{{ $news->judul }}</h1>

                {{-- PERBAIKAN FINAL ADA DI SINI --}}
                <p class="text-muted">
                    Oleh:
                    {{-- Menggunakan helper optional() untuk mencegah error jika user tidak ada --}}
                    <strong>{{ optional($news->user)->name ?? 'Penulis tidak diketahui' }}</strong>
                    | Kategori:
                    {{-- Menampilkan nama kategori langsung dari kolom 'kategori' dan memformatnya --}}
                    <span class="badge bg-primary">{{ ucwords(str_replace('_', ' ', $news->kategori)) }}</span>
                    | Diterbitkan: {{ $news->created_at->format('d F Y') }}
                </p>

                {{-- Gambar Berita --}}
                @if ($news->gambar)
                    <div style="max-height: 400px; overflow:hidden;" class="mb-4 rounded shadow-sm">
                        <img src="{{ asset('storage/' . $news->gambar) }}" alt="{{ $news->judul }}" class="img-fluid">
                    </div>
                @else
                    {{-- Placeholder jika tidak ada gambar --}}
                    <img src="https://placehold.co/1200x400/6c757d/ffffff?text=Gambar+Tidak+Tersedia" alt="{{ $news->judul }}" class="img-fluid rounded mb-4 shadow-sm">
                @endif

                {{-- Isi Berita --}}
                <article class="my-3 fs-5" style="line-height: 1.7;">
                    {!! $news->isi !!}
                </article>

                <hr class="my-4">
                <a href="/" class="btn btn-outline-secondary">&laquo; Kembali ke Halaman Utama</a>

            </div>
        </div>
    </div>
@endsection
