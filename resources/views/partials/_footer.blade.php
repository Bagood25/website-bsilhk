<footer class="bg-gray-900 text-gray-300 py-12 relative">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-8 border-b border-gray-700 pb-8">
            <div>
                <h3 class="text-xl font-bold mb-4 text-white">Kontak</h3>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-orange-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 1.48a1 1 0 01-.188 1.096l-1.547 1.547a1 1 0 00-.214 1.258l2.258 2.258a1 1 0 001.258-.214l1.547-1.547a1 1 0 011.096-.188l1.48.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2c-5.147 0-9.253-4.106-9.253-9.253V4a1 1 0 011-1z"></path></svg>
                        (021) 57930168
                    </li>
                    <li class="pl-8">
                        Jl. Raya Gn. Batu No.5, Bogor
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 mr-3 text-orange-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        <a href="https://maps.app.goo.gl/hihV5bcsUtJ526Ev7" target="_blank" class="hover:text-green-500">
                            Get Directions
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4 text-white">Tentang BSILHK</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/profil') }}" class="hover:text-green-500 transition duration-300">Profil BSILHK</a></li>
                    <li><a href="{{ url('/dasar-hukum') }}" class="hover:text-green-500 transition duration-300">Dasar Hukum</a></li>
                    <li><a href="{{ url('/tugas-dan-fungsi') }}" class="hover:text-green-500 transition duration-300">Tugas dan Fungsi</a></li>
                    <li><a href="{{ url('/struktur-organisasi') }}" class="hover:text-green-500 transition duration-300">Struktur Organisasi</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4 text-white">Berita</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('news.fokus') }}" class="hover:text-green-500 transition duration-300">Fokus BSI</a></li>
                    <li><a href="{{ route('news.bsi') }}" class="hover:text-green-500 transition duration-300">Kabar BSI</a></li>
                    <li><a href="{{ route('news.standar') }}" class="hover:text-green-500 transition duration-300">Berita Standar</a></li>
                    <li><a href="{{ route('news.klhk') }}" class="hover:text-green-500 transition duration-300">Berita KLHK</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-xl font-bold mb-4 text-white">Regulasi</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ route('regulasi.show', ['title' => 'undang-undang']) }}" class="hover:text-green-500 transition duration-300">Undang-undang</a></li>
                    <li><a href="{{ route('regulasi.show', ['title' => 'peraturan-pemerintah']) }}" class="hover:text-green-500 transition duration-300">Peraturan Pemerintah</a></li>
                    <li><a href="{{ route('regulasi.show', ['title' => 'peraturan-presiden']) }}" class="hover:text-green-500 transition duration-300">Peraturan Presiden</a></li>
                    <li><a href="{{ route('regulasi.show', ['title' => 'peraturan-menteri-lhk']) }}" class="hover:text-green-500 transition duration-300">Peraturan Menteri</a></li>
                    <li><a href="{{ route('regulasi.show', ['title' => 'peraturan-kepala-bsn']) }}" class="hover:text-green-500 transition duration-300">Peraturan Kepala BSN</a></li>
                    <li><a href="{{ route('regulasi.show', ['title' => 'peraturan-kepala-bsilhk']) }}" class="hover:text-green-500 transition duration-300">Peraturan Kepala BSILHK</a></li>
                    <li><a href="{{ route('regulasi.show', ['title' => 'sk-bsilhk']) }}" class="hover:text-green-500 transition duration-300">SK BSILHK</a></li>
                    <li><a href="{{ route('jdih.klhk') }}" class="hover:text-green-500 transition duration-300">JDIH KLHK</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-xl font-bold mb-4 text-white">Download</h3>
                <div class="space-y-4">
                    <a href="{{ route('download.kategori', 'laporan-tahunan') }}" class="w-full block text-center bg-orange-500 text-white font-semibold py-3 px-6 rounded-md hover:bg-orange-600 transition-colors duration-300 shadow-lg">
                        Laporan Tahunan
                    </a>
                    <a href="{{ route('download.kategori', 'rencana-kerja') }}" class="w-full block text-center bg-orange-500 text-white font-semibold py-3 px-6 rounded-md hover:bg-orange-600 transition-colors duration-300 shadow-lg">
                        Rencana Kerja
                    </a>
                </div>
                <div class="flex space-x-4 mt-6 justify-center md:justify-start">
                    <a href="https://www.facebook.com/pusfaster" target="_blank" class="hover:opacity-75">
                        <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="h-8 w-8">
                    </a>
                    <a href="https://www.instagram.com/pusfaster/" target="_blank" class="hover:opacity-75">
                        <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="h-8 w-8">
                    </a>
                    <a href="https://www.youtube.com/@PusfasterBSILHK" target="_blank" class="hover:opacity-75">
                        <img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="h-8 w-8">
                    </a>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center pt-8 text-sm">
            <div class="text-gray-500 text-center md:text-left">
                © 2024 Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan, All Rights Reserved.
            </div>
        </div>
    </div>
</footer>

<div class="fixed bottom-8 right-8 flex flex-col space-y-4 z-50">
    <button id="scrollToTopBtn" class="bg-white text-gray-800 p-4 rounded-full shadow-lg hover:bg-gray-200 transition-colors duration-300">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>
    <a href="#" class="bg-white text-gray-800 p-3 rounded-full shadow-lg hover:bg-gray-200 transition-colors duration-300 flex items-center justify-center">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 21a9 9 0 110-18 9 9 0 010 18z"></path><path d="M12 10V6"></path><path d="M12 14v4"></path><path d="M12 10.01V10"></path></svg>
    </a>
</div>

<script>
    const scrollToTopBtn = document.getElementById("scrollToTopBtn");
    
    // Show or hide the button based on scroll position
    window.onscroll = function() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollToTopBtn.style.display = "flex";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    };
    
    // Scroll to the top of the document when clicked
    scrollToTopBtn.addEventListener("click", function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>