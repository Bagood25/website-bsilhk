<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil BSILHK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        /* CSS untuk dropdown desktop */
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-item:hover .dropdown-menu {
            display: block;
        }
        /* Styling untuk sub-dropdown, memastikan berada di sebelah kanan */
        .dropdown-item .dropdown-menu {
            top: 0;
            left: 100%;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Header Lengkap -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-2">
                <img src="https://placehold.co/40x40/94a3b8/ffffff?text=LOGO" alt="Logo BSILHK" class="h-10">
                <span class="text-xl font-bold text-green-700 hidden sm:block">BSILHK</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="#" class="text-gray-600 hover:text-green-700 font-medium transition duration-300">Beranda</a>
                
                <!-- Dropdown Tentang BSILHK -->
                <div class="relative dropdown">
                    <button class="text-gray-600 hover:text-green-700 font-medium transition duration-300 flex items-center">
                        Tentang BSILHK
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <ul class="dropdown-menu absolute hidden bg-white shadow-lg py-2 rounded-lg mt-2 w-48">
                        <li><a href="profil-bsilhk.html" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profil BSILHK</a></li>
                        <li><a href="dasar-hukum.html" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Dasar Hukum</a></li>
                        <li><a href="tugas-fungsi.html" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Tugas dan Fungsi</a></li>
                        <li><a href="struktur-organisasi.html" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Struktur Organisasi</a></li>
                    </ul>
                </div>

                <a href="#" class="text-gray-600 hover:text-green-700 font-medium transition duration-300">Layanan</a>
                <a href="#" class="text-gray-600 hover:text-green-700 font-medium transition duration-300">Publikasi</a>
                <a href="#" class="text-gray-600 hover:text-green-700 font-medium transition duration-300">Inovasi</a>
                <a href="#" class="text-gray-600 hover:text-green-700 font-medium transition duration-300">Peta</a>
                <a href="#" class="text-gray-600 hover:text-green-700 font-medium transition duration-300">Kontak</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-green-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white shadow-lg">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Beranda</a>
                <button class="mobile-dropdown-toggle w-full flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">
                    Tentang BSILHK
                    <svg class="w-4 h-4 mobile-dropdown-icon transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="hidden mobile-dropdown-content pl-5 space-y-1">
                    <a href="profil-bsilhk.html" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Profil BSILHK</a>
                    <a href="dasar-hukum.html" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Dasar Hukum</a>
                    <a href="tugas-fungsi.html" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Tugas dan Fungsi</a>
                    <a href="struktur-organisasi.html" class="block px-3 py-2 text-sm text-gray-700 hover:bg-gray-100 rounded-md">Struktur Organisasi</a>
                </div>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Layanan</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Publikasi</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Inovasi</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Peta</a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-100">Kontak</a>
            </div>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Hero Section / Banner -->
    <div class="relative h-64 bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('https://placehold.co/1920x400/1e40af/ffffff?text=Background+Image');">
        <!-- Overlay untuk membuat teks lebih mudah dibaca -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <!-- Teks dalam banner -->
        <div class="relative z-10 text-center p-4">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight">Profil BSILHK</h1>
            <p class="mt-2 text-sm md:text-base">
                <a href="#" class="hover:underline">Beranda</a> &gt; 
                <a href="#" class="hover:underline">Tentang BSILHK</a> &gt; 
                <span class="font-medium">Profil BSILHK</span>
            </p>
        </div>
    </div>

    <!-- Main Content Section -->
    <main class="container mx-auto max-w-7xl px-4 py-12">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Image & Sub-title -->
            <div class="w-full md:w-1/3">
                <img src="https://placehold.co/600x400/94a3b8/ffffff?text=Image+Profil" alt="Gambar Profil" class="w-full rounded-lg shadow-lg">
                <h2 class="mt-6 text-2xl font-semibold text-gray-800">
                    Standar Kuat, LHK Terlindung dan Ekonomi Tumbuh
                </h2>
            </div>
            
            <!-- Text Content -->
            <div class="w-full md:w-2/3 text-gray-700 leading-relaxed">
                <p>
                    Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan (BSILHK) dibentuk berdasarkan Peraturan Presiden Nomor 92 Tahun 2020 tentang Kementerian Lingkungan Hidup dan Kehutanan, yang kemudian diperkuat dengan Peraturan Menteri LHK Nomor 15 Tahun 2021 tentang Organisasi dan Tata Kerja BSILHK. Organisasi ini merupakan hasil transformasi dari Badan Penelitian, Pengembangan dan Inovasi (BLI) KLHK.
                </p>
                <p class="mt-4">
                    BSILHK memiliki peran strategis dalam menyediakan standar dan instrumen yang kuat, kredibel, dan relevan untuk mendukung perlindungan lingkungan hidup dan pertumbuhan ekonomi berbasis kehutanan yang berkelanjutan. Kami berkomitmen untuk terus berinovasi dan berkolaborasi dengan berbagai pihak dalam mencapai tujuan tersebut.
                </p>
                <p class="mt-4">
                    Visi kami adalah menjadi lembaga terdepan dalam standardisasi instrumen lingkungan hidup dan kehutanan yang mendukung pembangunan berkelanjutan. Misi kami meliputi:
                </p>
                <ul class="list-disc list-inside mt-4 pl-4 space-y-2">
                    <li>Menyediakan standar dan instrumen yang akurat dan relevan.</li>
                    <li>Mendorong penerapan inovasi di bidang lingkungan hidup dan kehutanan.</li>
                    <li>Membangun kemitraan strategis dengan pemangku kepentingan.</li>
                </ul>
            </div>
        </div>
    </main>

    <!-- JavaScript untuk fungsionalitas menu mobile dropdown -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
                button.addEventListener('click', () => {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('.mobile-dropdown-icon');
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                });
            });
        });
    </script>

</body>
</html>
