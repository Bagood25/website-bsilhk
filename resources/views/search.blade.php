@extends('layouts.main')

@section('title', 'Hasil Pencarian untuk "' . e($query) . '"')

@section('content')
<main class="py-16 lg:py-20">
    <div class="container mx-auto px-6">

        {{-- Judul Halaman Hasil Pencarian --}}
        <div class="mb-12">
            <h1 class="text-3xl font-bold text-gray-800">Hasil Pencarian</h1>
            <p class="mt-2 text-lg text-gray-600">
                Menampilkan hasil untuk: <span class="font-semibold">"{{ e($query) }}"</span>
            </p>
        </div>

        {{-- Daftar Hasil Pencarian --}}
        <div class="space-y-8">
            @if($results->count() > 0)
                @foreach($results as $result)
                    <div class="p-6 bg-white rounded-lg shadow-md hover:shadow-xl transition-shadow duration-300">
                        <h2 class="text-2xl font-bold text-gray-900 mb-2">
                            <a href="{{ route('news.detail', $result->slug) }}" class="hover:text-green-600">
                                {{ $result->judul }}
                            </a>
                        </h2>
                        <p class="text-gray-600">
                            {{-- Tampilkan potongan isi berita, batasi 150 karakter --}}
                            {{ \Illuminate\Support\Str::limit(strip_tags($result->isi), 150) }}
                        </p>
                        <a href="{{ route('news.detail', $result->slug) }}" class="text-green-600 font-semibold hover:underline inline-block mt-4">
                            Baca Selengkapnya →
                        </a>
                    </div>
                @endforeach

                {{-- Tombol Navigasi Halaman (Pagination) --}}
                <div class="mt-12">
                    {{ $results->appends(request()->query())->links() }}
                </div>

            @else
                {{-- Pesan Jika Tidak Ada Hasil --}}
                <div class="text-center py-12">
                    <p class="text-xl text-gray-500">
                        Maaf, tidak ada hasil yang ditemukan untuk pencarian Anda.
                    </p>
                </div>
            @endif
        </div>

    </div>
</main>
@endsection