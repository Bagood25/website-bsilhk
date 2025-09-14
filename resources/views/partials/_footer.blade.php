<footer class="bg-gray-900 text-gray-300 py-12 relative">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8 border-b border-gray-700 pb-8">
            
            {{-- Kolom 1: Kontak (SUDAH DIPERBAIKI SESUAI HEADER) --}}
            <div>
                <h3 class="text-xl font-bold mb-4 text-white">Kontak</h3>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-3 text-green-500 flex-shrink-0 mt-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        <a href="https://www.google.com/maps/search/?api=1&query=Pusat+Penelitian+Dan+Pengembangan+Hutan+Bogor" target="_blank" class="hover:text-green-500">
                           Jalan Gunung Batu Nomor 5, Kota Bogor, 1168
                        </a>
                    </li>
                    <li class="flex items-center">
                         <svg class="w-5 h-5 mr-3 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                        <a href="mailto:p2semh.kehutanan@gmail.com" class="hover:text-green-500">
                            p2semh.kehutanan@gmail.com
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Kolom 2: Tentang --}}
            <div>
                <h3 class="text-xl font-bold mb-4 text-white">Tentang</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('profil') }}" class="hover:text-green-500 transition duration-300">Profil</a></li>
                    <li><a href="{{ url('/dasar-hukum') }}" class="hover:text-green-500 transition duration-300">Dasar Hukum</a></li>
                    <li><a href="{{ url('/tugas-dan-fungsi') }}" class="hover:text-green-500 transition duration-300">Tugas dan Fungsi</a></li>
                    <li><a href="{{ url('/struktur-organisasi') }}" class="hover:text-green-500 transition duration-300">Struktur Organisasi</a></li>
                </ul>
            </div>

            {{-- Kolom 3: Publikasi --}}
            <div>
                <h3 class="text-xl font-bold mb-4 text-white">Publikasi</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('berita-p2semh') }}" class="hover:text-green-500 transition duration-300">Berita P2SEMH</a></li>
                    <li><a href="{{ route('berita-kehutanan') }}" class="hover:text-green-500 transition duration-300">Berita Kehutanan</a></li>
                </ul>
            </div>
            
            {{-- Kolom 4: Navigasi --}}
            <div>
                <h3 class="text-xl font-bold mb-4 text-white">Navigasi</h3>
                 <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('gallery.index') }}" class="hover:text-green-500 transition duration-300">Galeri Foto</a></li>
                    <li><a href="{{ route('galeri.video') }}" class="hover:text-green-500 transition duration-300">Galeri Video</a></li>
                    <li><a href="{{ route('agenda.index') }}" class="hover:text-green-500 transition duration-300">Agenda</a></li>
                </ul>
            </div>

            {{-- Kolom 5: Download & Sosial Media (SUDAH DIPERBAIKI) --}}
            <div>
                <h3 class="text-xl font-bold mb-4 text-white">Download</h3>
                <div class="space-y-4">
                    <a href="{{ route('download.kategori', 'peraturan') }}" class="w-full block text-center bg-orange-500 text-white font-semibold py-3 px-6 rounded-md hover:bg-orange-600 transition-colors duration-300 shadow-lg">
                        Peraturan
                    </a>
                </div>
                <div class="flex space-x-4 mt-6 justify-center md:justify-start">
                    {{-- <a href="https://www.facebook.com/pusfaster" target="_blank" class="hover:opacity-75">
                        <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="h-8 w-8">
                    </a> --}}
                    <a href="https://www.instagram.com/p2semh.kemenhut?utm_source=ig_web_button_share_sheet&igsh=MWdrNDFqazE0NXk=" target="_blank" class="hover:opacity-75">
                        <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="h-8 w-8">
                    </a>
                    {{-- <a href="https://www.youtube.com/@PusfasterBSILHK" target="_blank" class="hover:opacity-75">
                        <img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="h-8 w-8">
                    </a> --}}
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center pt-8 text-sm">
            <div class="text-gray-500 text-center md:text-left">
                © {{ date('Y') }} Pusat Pengembangan Sosial Ekonomi Masyarakat. All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

{{-- Bagian tombol Scroll to Top tidak diubah --}}
<div class="fixed bottom-8 right-8 flex flex-col space-y-4 z-50">
    <button id="scrollToTopBtn" class="bg-white text-gray-800 p-4 rounded-full shadow-lg hover:bg-gray-200 transition-colors duration-300" style="display: none;">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>
</div>

<script>
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    
    if (scrollToTopBtn) {
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                scrollToTopBtn.style.display = "flex";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        };
        
        scrollToTopBtn.addEventListener("click", function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }
</script>