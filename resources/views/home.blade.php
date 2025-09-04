@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    {{-- Slider Berita Utama (P2SEMH) --}}
    <section id="berita-slider" class="my-16 container mx-auto px-6">
        <div class="relative w-full overflow-hidden rounded-lg shadow-lg">
            <div id="hero-slider" class="flex transition-transform duration-500 ease-in-out">
                @foreach($beritaUtama as $berita)
                <div class="w-full flex-shrink-0">
                    <div class="relative bg-cover bg-center h-[500px] flex items-center justify-center" 
                         style="background-image: url('{{ asset('storage/' . $berita->gambar) }}');">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="relative text-center text-white px-4">
                            <h2 class="text-4xl font-bold mb-2">{{ $berita->judul }}</h2>
                            <p class="text-lg">{{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100) }}</p>
                            
                            {{-- ====================================================== --}}
                            {{-- == PERBAIKAN 1: Mengganti nama rute --}}
                            {{-- ====================================================== --}}
                            <a href="{{ route('news.detail', $berita->slug) }}" class="text-green-600 font-medium hover:underline inline-block mt-4">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- Tombol Navigasi Slider (Tidak ada perubahan) --}}
            <button id="prev-slide" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button id="next-slide" class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </section>

    {{-- Grid Berita P2SEMH --}}
    <section id="berita-fokus" class="py-16 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-2">Berita P2SEMH</h2>
        <p class="text-gray-600 mb-8">Informasi terkini seputar P2SEMH.</p>

        <div class="relative w-full overflow-hidden">
            <button id="prev-fokus-slide" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 rounded-full p-2 z-10">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            
            <div id="berita-fokus-slider" class="flex transition-transform duration-500 ease-in-out">
                @foreach($beritaFokus as $berita)
                <div class="w-full md:w-1/3 flex-shrink-0 px-4">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col h-full text-left">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar berita" class="w-full h-48 object-cover">
                        <div class="p-6 flex-grow flex flex-col">
                            <p class="text-sm text-gray-500 mb-2">{{ $berita->created_at->format('d M Y') }}</p>
                            <a href="{{ route('news.detail', $berita->slug) }}" class="hover:text-green-600">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $berita->judul }}</h3>
                            </a>
                            <div class="mt-auto pt-4">
                                <a href="{{ route('news.detail', $berita->slug) }}" class="text-green-600 hover:text-green-800 font-semibold text-sm">Baca Selengkapnya &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <button id="next-fokus-slide" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-white bg-opacity-50 hover:bg-opacity-75 rounded-full p-2 z-10">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </div>
</section>

<section id="galeri-foto" class="my-16 container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Galeri Foto</h2>

    @if($latestPhotos->isNotEmpty())
        <div class="swiper photo-slider relative">
            <div class="swiper-wrapper">

                @foreach($latestPhotos as $photo)
                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                        <div class="aspect-w-4 aspect-h-3">
                            <img src="{{ asset('storage/' . $photo->gambar) }}" alt="{{ $photo->judul }}" class="w-full h-full object-cover">
                        </div>
                        <div class="p-3 bg-white text-center">
                            <h3 class="font-semibold text-gray-900 text-sm truncate" title="{{ $photo->judul }}">{{ $photo->judul }}</h3>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="swiper-button-prev text-green-600"></div>
            <div class="swiper-button-next text-green-600"></div>
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('gallery.index') }}" class="bg-green-600 text-white font-semibold py-3 px-8 rounded-full hover:bg-green-700 transition duration-300">
                Lihat Semua Foto
            </a>
        </div>
    @else
        <div class="text-center py-8">
            <p class="text-gray-500">Galeri foto akan segera tersedia.</p>
        </div>
    @endif
</section>

   {{-- Slider Berita Kehutanan --}}
    <section id="berita-kehutanan-slider" class="my-16 bg-gray-900 text-white py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Berita Kehutanan</h2>
            <div class="relative w-full overflow-hidden">
                <div id="kabar-bsi-slider" class="flex transition-transform duration-500 ease-in-out">
                    @if($beritaStandar->count() > 0)
                        <div class="w-full flex-shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
                            @foreach($beritaStandar->take(3) as $berita)
                            <div class="bg-gray-800 text-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                                <a href="{{ route('news.detail', $berita->slug) }}">
                                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-40 object-cover">
                                </a>
                                <div class="p-4 flex flex-col flex-grow">
                                    <a href="{{ route('news.detail', $berita->slug) }}" class="hover:text-green-400">
                                        <h4 class="font-semibold text-lg">{{ $berita->judul }}</h4>
                                    </a>
                                    <p class="text-sm text-gray-400 line-clamp-3 mt-2 flex-grow">
                                        {{ $berita->kutipan }}
                                    </p>
                                    <a href="{{ route('news.detail', $berita->slug) }}" class="text-green-400 font-semibold text-sm mt-auto self-start">
                                        Baca Selengkapnya &rarr;
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    @endif
                    
                    @if($beritaStandar->count() > 3)
                        <div class="w-full flex-shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
                             @foreach($beritaStandar->skip(3)->take(3) as $berita)
                             <div class="bg-gray-800 text-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                                 <a href="{{ route('news.detail', $berita->slug) }}">
                                     <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-40 object-cover">>
                                 </a>
                                 <div class="p-4 flex flex-col flex-grow">
                                     <a href="{{ route('news.detail', $berita->slug) }}" class="hover:text-green-400">
                                         <h4 class="font-semibold text-lg">{{ $berita->judul }}</h4>
                                     </a>
                                     <p class="text-sm text-gray-400 line-clamp-3 mt-2 flex-grow">
                                         {{ $berita->kutipan }}
                                     </p>
                                     <a href="{{ route('news.detail', $berita->slug) }}" class="text-green-400 font-semibold text-sm mt-auto self-start">
                                         Baca Selengkapnya &rarr;
                                     </a>
                                 </div>
                             </div>
                             @endforeach
                        </div>
                    @endif
                </div>
                @if($beritaStandar->count() > 3)
                <button id="prev-kabar-bsi-slide" class="absolute top-1/2 left-0 md:left-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button id="next-kabar-bsi-slide" class="absolute top-1/2 right-0 md:right-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75 z-10">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
                @endif
            </div>
        </div>
    </section>

<section id="testimoni-video" class="my-16 relative bg-cover bg-center py-24" style="background-image: url('{{ asset('images/background indonesia.png') }}');">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="container mx-auto px-6 relative z-10 text-white">
        
        <h2 class="text-3xl font-bold text-center mb-12 mt-16">Galeri Video</h2>
        
        @if($latestVideos->isNotEmpty())
        <div class="swiper video-slider relative">
            <div class="swiper-wrapper">
                @foreach($latestVideos as $video)
                    @php
                        preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $video->youtube_url, $matches);
                        $youtubeId = $matches[1] ?? null;
                    @endphp
                    @if($youtubeId)
                    <div class="swiper-slide">
                        {{-- ====================================================== --}}
                        {{-- ==           PERUBAHAN UTAMA ADA DI SINI            == --}}
                        {{-- ====================================================== --}}
                        <a href="{{ $video->youtube_url }}" target="_blank" rel="noopener noreferrer" 
                           class="block group relative overflow-hidden rounded-lg shadow-lg h-full aspect-video">
                            {{-- Class 'h-48' dihapus dan diganti 'h-full' agar mengisi wadah --}}
                            <img src="https://img.youtube.com/vi/{{ $youtubeId }}/hqdefault.jpg" alt="{{ $video->judul }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-300">
                        {{-- ====================================================== --}}
                            
                            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></svg>
                            </div>
                            <div class="absolute bottom-0 left-0 bg-gradient-to-t from-black via-black/70 to-transparent w-full p-4">
                                <h4 class="text-white font-semibold text-lg">{{ $video->judul }}</h4>
                            </div>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
            <div class="swiper-button-prev text-white"></div>
            <div class="swiper-button-next text-white"></div>
        </div>
        @else
        <div class="text-center text-gray-200">
            <p>Belum ada video yang ditambahkan.</p>
        </div>
        @endif

    </div>
</section>

    <section id="footer-menu" class="my-16">
        

        <div id="agenda-bsilhk" class="bg-gray-900 text-white py-16 mb-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Agenda </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            
            @forelse($latestAgendas as $agenda)
                <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden flex flex-col">
                    <img src="{{ $agenda->gambar ? asset('storage/' . $agenda->gambar) : 'https://placehold.co/600x400/10b981/ffffff?text=Agenda' }}" alt="Gambar {{ $agenda->judul }}" class="w-full h-48 object-cover">
                    <div class="p-4 flex flex-col flex-grow text-left">
                        <h4 class="font-semibold text-lg leading-tight">{{ $agenda->judul }}</h4>
                        <p class="text-xs text-gray-400 mt-1">{{ \Carbon\Carbon::parse($agenda->tanggal)->translatedFormat('d F Y') }}</p>
                        <p class="text-sm text-gray-300 mt-2 flex-grow line-clamp-2">{{ $agenda->deskripsi }}</p>
                    </div>
                </div>
            @empty
                <div class="col-span-full text-center py-10">
                    <p class="text-gray-400">Belum ada agenda yang dijadwalkan.</p>
                </div>
            @endforelse

        </div>
        <div class="text-center mt-12">
            <a href="{{ route('agenda.index') }}" class="text-green-500 font-semibold hover:underline text-lg transition-colors duration-300">
                Lihat Semua Agenda &rarr;
            </a>
        </div>
    </div>
</div>

        {{-- KODE PENGGANTI DENGAN BINGKAI PERSEGI YANG LEBIH BESAR --}}

    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Tautan Terkait</h2>

        {{-- Menggunakan flexbox untuk menampilkan logo secara berjajar dan wrapping --}}
        <div class="flex flex-wrap justify-center items-center gap-8">

            @forelse($partners as $partner)
                <a href="{{ $partner->url }}" target="_blank" rel="noopener noreferrer" title="{{ $partner->name }}"
                   class="block bg-white p-6 rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 flex items-center justify-center w-64 h-64">
                    {{-- Ukuran diubah menjadi w-64 h-64 (lebih besar) --}}
                    <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="max-h-full max-w-full object-contain">
                </a>
            @empty
                <p class="text-center text-gray-500">
                    Belum ada tautan terkait yang ditambahkan.
                </p>
            @endforelse

        </div>
    </div>

    </section>

    <footer class="bg-gray-800 text-gray-300 py-8">
        <div class="container mx-auto text-center px-4">
            &copy; {{ date('Y') }} P2SEMH. Hak Cipta Dilindungi.
        </div>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // ======================================================
        // == SCRIPT LAMA ANDA UNTUK HERO SLIDER (TIDAK DIUBAH) ==
        // ======================================================
        const heroSlider = document.getElementById('hero-slider');
        const prevHeroSlideButton = document.getElementById('prev-slide');
        const nextHeroSlideButton = document.getElementById('next-slide');
        if (heroSlider && prevHeroSlideButton && nextHeroSlideButton) {
            let currentHeroIndex = 0;
            const heroSlides = heroSlider.children.length;
            function updateHeroSlider() {
                heroSlider.style.transform = `translateX(-${currentHeroIndex * 100}%)`;
            }
            prevHeroSlideButton.addEventListener('click', () => {
                currentHeroIndex = (currentHeroIndex - 1 + heroSlides) % heroSlides;
                updateHeroSlider();
            });
            nextHeroSlideButton.addEventListener('click', () => {
                currentHeroIndex = (currentHeroIndex + 1) % heroSlides;
                updateHeroSlider();
            });
        }

        // =================================================================
        // == SCRIPT BARU UNTUK BERITA P2SEMH (DITAMBAHKAN DI SINI) ==
        // =================================================================
        const beritaFokusSlider = document.getElementById('berita-fokus-slider');
        const prevFokusButton = document.getElementById('prev-fokus-slide');
        const nextFokusButton = document.getElementById('next-fokus-slide');
        if (beritaFokusSlider && prevFokusButton && nextFokusButton) {
            let currentFokusIndex = 0;
            // Kita ingin menampilkan 3 berita per slide, jadi total "halaman" slider adalah jumlah berita dibagi 3
            const fokusSlidesCount = Math.ceil(beritaFokusSlider.children.length / 3); 
            
            function updateFokusSlider() {
                // Setiap kali pindah, kita geser sejauh 100% (lebar kontainer)
                beritaFokusSlider.style.transform = `translateX(-${currentFokusIndex * 100}%)`;
            }

            prevFokusButton.addEventListener('click', () => {
                currentFokusIndex = (currentFokusIndex - 1 + fokusSlidesCount) % fokusSlidesCount;
                updateFokusSlider();
            });

            nextFokusButton.addEventListener('click', () => {
                currentFokusIndex = (currentFokusIndex + 1) % fokusSlidesCount;
                updateFokusSlider();
            });
        }

        // ======================================================
        // == SCRIPT LAMA LAINNYA (TIDAK DIUBAH) ==
        // ======================================================
        const beritaStandarSlider = document.getElementById('berita-standar-slider');
        const prevBeritaStandarSlideButton = document.getElementById('prev-berita-standar-slide');
        const nextBeritaStandarSlideButton = document.getElementById('next-berita-standar-slide');
        if (beritaStandarSlider && prevBeritaStandarSlideButton && nextBeritaStandarSlideButton) {
            let currentBeritaStandarIndex = 0;
            const beritaStandarSlides = beritaStandarSlider.children.length;
            function updateBeritaStandarSlider() {
                beritaStandarSlider.style.transform = `translateX(-${currentBeritaStandarIndex * 100}%)`;
            }
            prevBeritaStandarSlideButton.addEventListener('click', () => {
                currentBeritaStandarIndex = (currentBeritaStandarIndex - 1 + beritaStandarSlides) % beritaStandarSlides;
                updateBeritaStandarSlider();
            });
            nextBeritaStandarSlideButton.addEventListener('click', () => {
                currentBeritaStandarIndex = (currentBeritaStandarIndex + 1) % beritaStandarSlides;
                updateBeritaStandarSlider();
            });
        }
        
        const kabarBsiSlider = document.getElementById('kabar-bsi-slider');
        const prevKabarBsiSlideButton = document.getElementById('prev-kabar-bsi-slide');
        const nextKabarBsiSlideButton = document.getElementById('next-kabar-bsi-slide');
        if (kabarBsiSlider && prevKabarBsiSlideButton && nextKabarBsiSlideButton) {
            let currentKabarBsiIndex = 0;
            const kabarBsiSlides = kabarBsiSlider.children.length;
            function updateKabarBsiSlider() {
                kabarBsiSlider.style.transform = `translateX(-${currentKabarBsiIndex * 100}%)`;
            }
            prevKabarBsiSlideButton.addEventListener('click', () => {
                currentKabarBsiIndex = (currentKabarBsiIndex - 1 + kabarBsiSlides) % kabarBsiSlides;
                updateKabarBsiSlider();
            });
            nextKabarBsiSlideButton.addEventListener('click', () => {
                currentKabarBsiIndex = (currentKabarBsiIndex + 1) % kabarBsiSlides;
                updateKabarBsiSlider();
            });
        }
    });

    
</script>
@endsection