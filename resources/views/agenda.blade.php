@extends('layouts.app')

@section('title', 'Agenda - BSILHK')

@section('content')
<div class="py-16 px-4 text-center relative bg-cover bg-center" style="background-image: url('{{ asset('images/background hutan.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="max-w-7xl mx-auto z-10 relative">
        <h1 class="text-4xl font-extrabold text-white sm:text-5xl">Agenda</h1>
        <p class="mt-2 text-sm text-gray-300">Beranda &gt; Agenda</p>
    </div>
</div>

<div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($agendas as $item)
            <div class="bg-white border border-gray-200 rounded-lg overflow-hidden shadow-sm hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : 'https://placehold.co/600x400/E0E0E0/333333?text=Agenda' }}" alt="Gambar {{ $item->judul }}" class="w-full h-56 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $item->judul }}</h3>
                    <p class="text-gray-600 text-sm flex-grow">
                        {{ \Illuminate\Support\Str::limit($item->deskripsi, 120, '...') }}
                    </p>
                    <div class="mt-4 pt-4 border-t border-gray-200 text-xs text-gray-500">
                        <p class="mb-1"><i class="fas fa-calendar-alt mr-2"></i>{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y') }}</p>
                        <p><i class="fas fa-map-marker-alt mr-2"></i>{{ $item->lokasi }}</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-16">
                <i class="fas fa-calendar-times text-6xl text-gray-300 mb-4"></i>
                <h3 class="text-2xl font-semibold text-gray-700">Belum Ada Agenda</h3>
                <p class="text-gray-500 mt-2">Saat ini belum ada agenda yang dijadwalkan. Silakan periksa kembali nanti.</p>
            </div>
            @endforelse
        </div>

        <div class="mt-12">
            {{ $agendas->links() }}
        </div>
    </div>
</div>
@endsection