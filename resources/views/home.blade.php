@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

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
                            <a href="{{ route('news.show', $berita->slug) }}" class="text-green-600 font-medium hover:underline inline-block mt-4">Baca Selengkapnya →</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <button id="prev-slide" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button id="next-slide" class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </section>

    <section id="berita-fokus" class="my-16 container mx-auto px-6">
    <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Berita Fokus BSI</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($beritaFokus as $berita)
        {{-- Menambahkan class flexbox untuk alignment yang lebih baik --}}
        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300 flex flex-col">
            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar berita" class="w-full h-48 object-cover">
            {{-- Menambahkan class flexbox untuk alignment yang lebih baik --}}
            <div class="p-6 flex flex-col flex-grow">
                <p class="text-sm text-gray-500 mb-2">{{ \Carbon\Carbon::parse($berita->created_at)->format('d F Y') }}</p>
                <h3 class="text-xl font-semibold mb-2">{{ $berita->judul }}</h3>
                {{-- Menambahkan class flex-grow agar teks mengisi ruang yang tersedia --}}
                <p class="text-gray-600 text-sm mb-4 line-clamp-3 flex-grow">
                    {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 150) }}
                </p>
                
                {{-- INI BAGIAN YANG DIPERBAIKI --}}
                <a href="{{ route('news.show', $berita->slug) }}" class="text-green-600 font-semibold text-sm mt-4 self-start">
                    Baca Selengkapnya &rarr;
                </a>

            </div>
        </div>
        @endforeach
    </div>
</section>
    
   <section id="berita-standar" class="my-16 bg-gray-900 text-white py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold mb-12 text-center">Berita Standar</h2>
        
        @if ($beritaStandar->isNotEmpty())
            {{-- Berita Utama --}}
            <div class="md:flex md:space-x-8 mb-12">
                <div class="md:w-1/2">
                    <img src="{{ asset('storage/' . $beritaStandar->first()->gambar) }}" alt="Berita Standar Gambar" class="w-full rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 flex flex-col justify-center mt-8 md:mt-0">
                    <h3 class="text-3xl font-bold mb-4">{{ $beritaStandar->first()->judul }}</h3>
                    <p class="text-gray-300 mb-6">
                        {{ \Illuminate\Support\Str::limit(strip_tags($beritaStandar->first()->isi), 200) }}
                    </p>
                    {{-- Tombol ini sudah benar --}}
                    <a href="{{ route('news.show', $beritaStandar->first()->slug) }}" class="bg-green-600 text-white font-semibold py-3 px-8 rounded-full self-start hover:bg-green-700 transition duration-300">Baca Selengkapnya</a>
                </div>
            </div>

            {{-- Slider untuk Berita Lainnya --}}
            <div class="relative w-full overflow-hidden">
                <div id="berita-standar-slider" class="flex transition-transform duration-500 ease-in-out">
                    <div class="w-full flex-shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
                        @foreach($beritaStandar->skip(1) as $berita)
                        {{-- Menambahkan class flexbox untuk alignment --}}
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden flex flex-col">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-40 object-cover">
                            {{-- Menambahkan class flexbox untuk alignment --}}
                            <div class="p-4 flex flex-col flex-grow">
                                <h4 class="font-semibold text-lg">{{ $berita->judul }}</h4>
                                {{-- Menambahkan class flex-grow agar teks mengisi ruang --}}
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2 flex-grow">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($berita->isi), 100) }}
                                </p>
                                
                                {{-- INI BAGIAN YANG DITAMBAHKAN --}}
                                <a href="{{ route('news.show', $berita->slug) }}" class="text-green-600 font-semibold text-sm mt-4 self-start">
                                    Baca Selengkapnya &rarr;
                                </a>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @else
            <p class="text-center text-gray-300">Tidak ada berita standar yang tersedia.</p>
        @endif
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

    <section id="profil-kepala-bsi" class="my-16 bg-gray-900 text-white py-16">
    <div class="container mx-auto px-6">
        {{-- Bagian Profil Kepala (Tidak diubah) --}}
        <div class="md:flex md:space-x-8 mb-16">
            <div class="md:w-1/3">
                <img src="https://placehold.co/400x500/10b981/ffffff?text=Foto+Kepala" alt="Foto Kepala BSILHK" class="w-full rounded-lg shadow-lg">
            </div>
            <div class="md:w-2/3 flex flex-col justify-center mt-8 md:mt-0">
                <h3 class="text-3xl font-bold mb-4">Profil Kepala BSILHK</h3>
                <p class="text-gray-300 mb-6">
                    [Nama Kepala BSILHK] memiliki pengalaman bertahun-tahun dalam bidang lingkungan dan kehutanan. Dengan kepemimpinan yang visioner, ia mengarahkan BSILHK untuk menjadi garda terdepan dalam inovasi dan standarisasi.
                </p>
                <a href="#" class="bg-green-600 text-white font-semibold py-3 px-8 rounded-full self-start hover:bg-green-700 transition duration-300">Baca Selengkapnya</a>
            </div>
        </div>

        {{-- PERBAIKAN UNTUK BAGIAN KABAR BSI --}}
        <h2 class="text-3xl font-bold text-center mb-12">Kabar BSI</h2>
        <div class="relative w-full overflow-hidden">
            <div id="kabar-bsi-slider" class="flex transition-transform duration-500 ease-in-out">
                <div class="w-full flex-shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
                    @foreach($kabarBsi as $kabar)
                    <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden flex flex-col">
                        <img src="{{ asset('storage/' . $kabar->gambar) }}" alt="{{ $kabar->judul }}" class="w-full h-40 object-cover">
                        <div class="p-4 flex flex-col flex-grow">
                            <h4 class="font-semibold text-lg">{{ $kabar->judul }}</h4>
                            <p class="text-sm text-gray-600 line-clamp-3 mt-2 flex-grow">
                                {{ \Illuminate\Support\Str::limit(strip_tags($kabar->isi), 100) }}
                            </p>
                            {{-- INI BAGIAN YANG DITAMBAHKAN --}}
                            <a href="{{ route('news.show', $kabar->slug) }}" class="text-green-600 font-semibold text-sm mt-4 self-start">
                                Baca Selengkapnya &rarr;
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- Tombol navigasi slider (tidak diubah) --}}
            <button id="prev-kabar-bsi-slide" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button id="next-kabar-bsi-slide" class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </div>
</section>

<section id="testimoni-video" class="my-16 relative bg-cover bg-center py-24" style="background-image: url('{{ asset('images/background indonesia.png') }}');">
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="container mx-auto px-6 relative z-10 text-white">
        
        {{-- Bagian Testimoni (Tidak diubah) --}}
        <h2 class="text-3xl font-bold text-center mb-12">Testimoni</h2>
        <div class="flex flex-col md:flex-row justify-center space-y-8 md:space-y-0 md:space-x-8 mb-16">
            <div class="bg-gray-800 bg-opacity-70 p-6 rounded-lg shadow-lg max-w-lg">
                <p class="italic text-lg mb-4">
                    "BSILHK telah memberikan dampak nyata dalam mendukung standarisasi lingkungan. Layanan mereka sangat profesional dan membantu."
                </p>
                <p class="font-semibold">- Nama Pengguna 1</p>
            </div>
            <div class="bg-gray-800 bg-opacity-70 p-6 rounded-lg shadow-lg max-w-lg">
                <p class="italic text-lg mb-4">
                    "Informasi yang disediakan di website sangat lengkap dan mudah diakses. Sangat membantu pekerjaan kami."
                </p>
                <p class="font-semibold">- Nama Pengguna 2</p>
            </div>
        </div>

        {{-- ====================================================== --}}
        {{-- == BAGIAN GALERI VIDEO YANG SUDAH DIPERBAIKI == --}}
        {{-- ====================================================== --}}
        <h2 class="text-3xl font-bold text-center mb-12 mt-16">Galeri Video</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
    
            <a href="https://www.youtube.com/watch?v=X1DEmB91Zhg" target="_blank" class="block group relative overflow-hidden rounded-lg shadow-lg">
                <img src="https://img.youtube.com/vi/X1DEmB91Zhg/hqdefault.jpg" alt="Video Profil BSILHK" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8 5v14l11-7z"></path></svg>
                </div>
                <div class="absolute bottom-0 left-0 bg-gradient-to-t from-black via-black/70 to-transparent w-full p-4">
                    <h4 class="text-white font-semibold">Video Profil BSILHK</h4>
                </div>
            </a>

            <a href="https://www.youtube.com/watch?v=tI8P-4_N8GA" target="_blank" class="block group relative overflow-hidden rounded-lg shadow-lg">
                <img src="https://img.youtube.com/vi/tI8P-4_N8GA/hqdefault.jpg" alt="Inovasi Bambu Laminasi" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8 5v14l11-7z"></path></svg>
                </div>
                <div class="absolute bottom-0 left-0 bg-gradient-to-t from-black via-black/70 to-transparent w-full p-4">
                    <h4 class="text-white font-semibold">Inovasi Bambu Laminasi</h4>
                </div>
            </a>

            <a href="https://www.youtube.com/watch?v=r1LNTnLOh3A" target="_blank" class="block group relative overflow-hidden rounded-lg shadow-lg">
                <img src="https://img.youtube.com/vi/r1LNTnLOh3A/hqdefault.jpg" alt="Standar Ekowisata" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8 5v14l11-7z"></path></svg>
                </div>
                <div class="absolute bottom-0 left-0 bg-gradient-to-t from-black via-black/70 to-transparent w-full p-4">
                    <h4 class="text-white font-semibold">Standar Ekowisata</h4>
                </div>
            </a>

        </div>

    </div>
</section>

{{-- PERBAIKAN UNTUK BAGIAN BERITA KLHK --}}
<section id="berita-klhk" class="my-16 bg-gray-900 text-white py-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Berita KLHK</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
            @foreach ($beritaKlhk as $berita)
            <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden flex flex-col">
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Berita KLHK" class="w-full h-40 object-cover">
                <div class="p-4 flex flex-col flex-grow">
                    <h4 class="font-semibold text-lg mb-2">{{ $berita->judul }}</h4>
                    <p class="text-sm text-gray-300 line-clamp-3 flex-grow">{{ Str::limit(strip_tags($berita->isi), 100) }}</p>
                     {{-- INI BAGIAN YANG DITAMBAHKAN --}}
                    <a href="{{ route('news.show', $berita->slug) }}" class="text-green-500 font-semibold text-sm mt-4 self-start">
                        Baca Selengkapnya &rarr;
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mb-16">
            {{-- Mengarahkan tombol "Selengkapnya" ke halaman daftar berita KLHK --}}
            <a href="{{ route('news.klhk') }}" class="text-green-600 font-medium hover:underline text-lg">Lihat Semua Berita KLHK</a>
        </div>
        <h2 class="text-3xl font-bold text-center mb-8">Berita Lainnya</h2>
    </div>
</section>

    <section id="layanan-publik" class="my-16 container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Layanan Publik</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            @for ($i = 1; $i <= 4; $i++)
                <div class="p-6 rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                    <img src="https://placehold.co/200x200/10b981/ffffff?text=Gambar+{{ $i }}" alt="Layanan Publik {{ $i }}" class="mx-auto mb-4 w-32 h-32 object-cover rounded-full">
                    <h4 class="font-semibold text-xl">Layanan {{ $i }}</h4>
                    <p class="text-gray-600 mt-2">Keterangan singkat tentang layanan publik ke-{{ $i }}.</p>
                </div>
            @endfor
        </div>
    </section>

    <section id="footer-menu" class="my-16">
        <div id="ppid-menu" class="relative bg-cover bg-center py-24 mb-16" style="background-image: url('{{ asset('images/background indonesia.png') }}');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="container mx-auto px-6 relative z-10 text-white text-center">
                <h2 class="text-4xl font-bold">PPID Menu</h2>
                <p class="mt-4 text-lg">Informasi dan layanan PPID BSILHK.</p>
            </div>
        </div>

        <div id="agenda-bsilhk" class="bg-gray-900 text-white py-16 mb-16">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Agenda BSILHK</h2>
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

        <div id="partner" class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Partner</h2>
            <div class="text-center text-gray-600">
                Daftar logo partner akan ditampilkan di sini.
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-gray-300 py-8">
        <div class="container mx-auto text-center px-4">
            &copy; {{ date('Y') }} BSILHK. Hak Cipta Dilindungi.
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const heroSlider = document.getElementById('hero-slider');
            const prevHeroSlideButton = document.getElementById('prev-slide');
            const nextHeroSlideButton = document.getElementById('next-slide');
            let currentHeroIndex = 0;
            const heroSlides = heroSlider.children.length;
            function updateHeroSlider() {
                heroSlider.style.transform = `translateX(-${currentHeroIndex * 100}%)`;
            }
            if (prevHeroSlideButton && nextHeroSlideButton) {
                prevHeroSlideButton.addEventListener('click', () => {
                    currentHeroIndex = (currentHeroIndex - 1 + heroSlides) % heroSlides;
                    updateHeroSlider();
                });
                nextHeroSlideButton.addEventListener('click', () => {
                    currentHeroIndex = (currentHeroIndex + 1) % heroSlides;
                    updateHeroSlider();
                });
            }

            const beritaStandarSlider = document.getElementById('berita-standar-slider');
            const prevBeritaStandarSlideButton = document.getElementById('prev-berita-standar-slide');
            const nextBeritaStandarSlideButton = document.getElementById('next-berita-standar-slide');
            let currentBeritaStandarIndex = 0;
            const beritaStandarSlides = beritaStandarSlider ? beritaStandarSlider.children.length : 0;
            function updateBeritaStandarSlider() {
                if (beritaStandarSlider) {
                    beritaStandarSlider.style.transform = `translateX(-${currentBeritaStandarIndex * 100}%)`;
                }
            }
            if (prevBeritaStandarSlideButton && nextBeritaStandarSlideButton) {
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
            let currentKabarBsiIndex = 0;
            const kabarBsiSlides = kabarBsiSlider ? kabarBsiSlider.children.length : 0;
            function updateKabarBsiSlider() {
                if (kabarBsiSlider) {
                    kabarBsiSlider.style.transform = `translateX(-${currentKabarBsiIndex * 100}%)`;
                }
            }
            if (prevKabarBsiSlideButton && nextKabarBsiSlideButton) {
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