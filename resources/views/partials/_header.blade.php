<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header BSILHK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        /* CSS untuk dropdown desktop */
        .dropdown-menu {
            transition: all 0.2s ease-in-out;
            visibility: hidden;
            opacity: 0;
            transform: translateY(-10px);
            display: block;
        }
        .dropdown:hover .dropdown-menu {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }
        .dropdown-item:hover .dropdown-menu {
            visibility: visible;
            opacity: 1;
            transform: translateY(0);
        }
        /* Styling untuk sub-dropdown, memastikan berada di sebelah kanan */
        .dropdown-item .dropdown-menu {
            top: 0;
            left: 100%;
        }

        /* Menambahkan padding pada container dropdown agar hover lebih stabil */
        .dropdown-container {
            padding: 10px 0;
            margin: -10px 0;
        }
    </style>
</head>
<body class="bg-gray-50">

<!-- Top Header Bar -->
<div class="bg-white text-gray-800 text-sm py-2 shadow-md hidden md:block">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
        <!-- Info Kontak -->
        <div class="flex items-center space-x-6 text-xs">
            <a href="mailto:bsilhk@gmail.go.id" class="flex items-center text-gray-600 hover:text-green-600">
                <svg class="h-4 w-4 mr-1 text-emerald-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                bsilhk@gmail.go.id
            </a>
            <a href="tel:02157930168" class="flex items-center text-gray-600 hover:text-green-600">
                <svg class="h-4 w-4 mr-1 text-emerald-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 1.48a1 1 0 01-.188 1.096l-1.547 1.547a1 1 0 00-.214 1.258l2.258 2.258a1 1 0 001.258-.214l1.547-1.547a1 1 0 011.096-.188l1.48.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.147 18 3 13.853 3 8V6a1 1 0 011-1z"></path></svg>
                (021) 57930168
            </a>
            <a href="https://maps.app.goo.gl/hihV5bcsUtJ526Ev7" target="_blank" class="flex items-center text-gray-600 hover:text-green-600">
                <svg class="h-4 w-4 mr-1 text-emerald-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                Jl. Raya Gn. Batu No.5, Bogor
            </a>
        </div>
        <!-- Ikon Media Sosial -->
        <div class="flex items-center space-x-4">
            <a href="https://web.facebook.com/pusfaster?locale=id_ID" target="_blank" class="hover:opacity-75">
                <img class="h-5 w-5" src="/images/facebook.png" alt="Facebook">
            </a>
            <a href="https://www.instagram.com/pusfaster/" target="_blank" class="hover:opacity-75">
                <img class="h-5 w-5" src="/images/instagram.png" alt="Instagram">
            </a>
            <a href="http://www.youtube.com/@PusfasterBSILHK" target="_blank" class="hover:opacity-75">
                <img class="h-5 w-5" src="/images/youtube.png" alt="Youtube">
            </a>
        </div>
    </div>
</div>

<!-- Navbar (Main Header) -->
<nav class="bg-white shadow-lg py-4">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center">
            <div class="flex-shrink-0 flex items-center">
                <!-- Logo yang sudah Anda berikan -->
                <img class="h-12 w-auto" src="/images/bsilhk.png" alt="Logo BSILHK">
                <img class="h-12 w-auto ml-4" src="/images/logo-bsilhk.png" alt="Logo Kedua BSILHK">
            </div>

            <!-- Main Navigation & Search -->
            <div class="hidden md:flex items-center space-x-4 text-gray-600 text-sm">
                <a href="/" class="hover:text-green-600">Beranda</a>
                
                <!-- Dropdown untuk Tentang BSILHK -->
                <div class="relative group dropdown">
                    <div class="dropdown-container">
                        <button class="hover:text-green-600 flex items-center p-2">
                            Tentang BSILHK
                            <svg class="h-4 w-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div class="dropdown-menu absolute bg-white shadow-lg rounded-md mt-2 w-48 z-10 border border-gray-200">
                            <a href="/profil-bsilhk.html" class="block px-4 py-2 hover:bg-gray-100">Profil BSILHK</a>
                            <a href="/dasar-hukum.html" class="block px-4 py-2 hover:bg-gray-100">Dasar Hukum</a>
                            <a href="/tugas-dan-fungsi.html" class="block px-4 py-2 hover:bg-gray-100">Tugas dan Fungsi</a>
                            <a href="/struktur-organisasi.html" class="block px-4 py-2 hover:bg-gray-100">Struktur Organisasi</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown untuk Berita (Menggunakan sub-dropdown) -->
                <div class="relative group dropdown">
                    <div class="dropdown-container">
                        <button class="hover:text-green-600 flex items-center p-2">
                            Berita
                            <svg class="h-4 w-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div class="dropdown-menu absolute bg-white shadow-lg rounded-md mt-2 w-48 z-10 border border-gray-200">
                            <div class="relative group/sub dropdown-item">
                                <a href="#" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100">
                                    Berita Fokus
                                    <svg class="h-4 w-4 text-gray-400 group-hover/sub:text-green-600 transform transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                </a>
                                <div class="absolute top-0 left-full bg-white shadow-lg rounded-md w-48 z-20 border border-gray-200">
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Berita Utama</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Berita BSI</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Siaran Pers</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Kegiatan</a>
                                </div>
                            </div>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Berita Standar</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Kabar BSI</a>
                        </div>
                    </div>
                </div>

                <!-- Dropdown untuk Regulasi (Menggunakan sub-dropdown) -->
                <div class="relative group dropdown">
                    <div class="dropdown-container">
                        <button class="hover:text-green-600 flex items-center p-2">
                            Regulasi
                            <svg class="h-4 w-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div class="dropdown-menu absolute bg-white shadow-lg rounded-md mt-2 w-48 z-10 border border-gray-200">
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Undang-undang</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Peraturan Pemerintah</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Peraturan Presiden</a>
                            <div class="relative group/sub dropdown-item">
                                <a href="#" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100">
                                    Peraturan Menteri
                                    <svg class="h-4 w-4 text-gray-400 group-hover/sub:text-green-600 transform transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                </a>
                                <div class="absolute top-0 left-full bg-white shadow-lg rounded-md w-48 z-20 border border-gray-200">
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Permen LHK</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Permen Keuangan</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Permen Pertanian</a>
                                </div>
                            </div>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Peraturan Kepala BSN</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Peraturan Kepala BSILHK</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">SK BSILHK</a>
                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">JDIH KLHK</a>
                        </div>
                    </div>
                </div>

                <a href="/agenda" class="hover:text-green-600">Agenda</a>

                <!-- Dropdown untuk Download (Menggunakan sub-dropdown) -->
                <div class="relative group dropdown">
                    <div class="dropdown-container">
                        <button class="hover:text-green-600 flex items-center p-2">
                            Download
                            <svg class="h-4 w-4 ml-1 transition-transform duration-200 group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div class="dropdown-menu absolute bg-white shadow-lg rounded-md mt-2 w-48 z-10 border border-gray-200">
                            <div class="relative group/sub dropdown-item">
                                <a href="#" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100">
                                    Buku dan Jurnal
                                    <svg class="h-4 w-4 text-gray-400 group-hover/sub:text-green-600 transform transition-transform duration-200" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                                </a>
                                <div class="absolute top-0 left-full bg-white shadow-lg rounded-md w-48 z-20 border border-gray-200">
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Buku</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Jurnal</a>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Prosiding</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="relative hidden md:flex items-center space-x-4">
                <input type="text" placeholder="Pencarian..." class="py-2 pl-4 pr-10 rounded-full border border-gray-300 focus:outline-none focus:border-green-500">
                <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-green-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
                <a href="#" class="bg-green-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-green-700 transition duration-300">
                    LINE BSILHK
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-button" class="text-gray-500 hover:text-green-600 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu content -->
    <div id="mobile-menu" class="hidden md:hidden px-4 pt-2 pb-4 space-y-1 bg-white">
        <a href="/" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Beranda</a>
        
        <!-- Mobile Dropdown for Tentang BSILHK -->
        <div class="relative">
            <button class="w-full text-left flex justify-between items-center px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md mobile-dropdown-toggle">
                Tentang BSILHK
                <svg class="h-4 w-4 transform transition-transform duration-200 mobile-dropdown-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="pl-4 hidden mobile-dropdown-content">
                <a href="/profil-bsilhk.html" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Profil BSILHK</a>
                <a href="/dasar-hukum.html" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Dasar Hukum</a>
                <a href="/tugas-dan-fungsi.html" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Tugas dan Fungsi</a>
                <a href="/struktur-organisasi.html" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Struktur Organisasi</a>
            </div>
        </div>

        <!-- Mobile Dropdown for Berita (Menggunakan sub-dropdown) -->
        <div class="relative">
            <button class="w-full text-left flex justify-between items-center px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md mobile-dropdown-toggle">
                Berita
                <svg class="h-4 w-4 transform transition-transform duration-200 mobile-dropdown-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="pl-4 hidden mobile-dropdown-content">
                <div class="relative">
                    <button class="w-full text-left flex justify-between items-center px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md mobile-sub-dropdown-toggle">
                        Berita Fokus
                        <svg class="h-4 w-4 text-gray-400 transform transition-transform duration-200 mobile-sub-dropdown-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="pl-4 hidden mobile-sub-dropdown-content">
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Berita Utama</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Berita BSI</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Siaran Pers</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Kegiatan</a>
                    </div>
                </div>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Berita Standar</a>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Kabar BSI</a>
            </div>
        </div>

        <!-- Mobile Dropdown for Regulasi (Menggunakan sub-dropdown) -->
        <div class="relative">
            <button class="w-full text-left flex justify-between items-center px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md mobile-dropdown-toggle">
                Regulasi
                <svg class="h-4 w-4 transform transition-transform duration-200 mobile-dropdown-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="pl-4 hidden mobile-dropdown-content">
                <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Undang-undang</a>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Peraturan Pemerintah</a>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Peraturan Presiden</a>
                <div class="relative">
                    <button class="w-full text-left flex justify-between items-center px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md mobile-sub-dropdown-toggle">
                        Peraturan Menteri
                        <svg class="h-4 w-4 text-gray-400 transform transition-transform duration-200 mobile-sub-dropdown-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="pl-4 hidden mobile-sub-dropdown-content">
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Permen LHK</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Permen Keuangan</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Permen Pertanian</a>
                    </div>
                </div>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Peraturan Kepala BSN</a>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Peraturan Kepala BSILHK</a>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">SK BSILHK</a>
                <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">JDIH KLHK</a>
            </div>
        </div>
        
        <a href="/agenda" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Agenda</a>

        <!-- Mobile Dropdown for Download (Menggunakan sub-dropdown) -->
        <div class="relative">
            <button class="w-full text-left flex justify-between items-center px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md mobile-dropdown-toggle">
                Download
                <svg class="h-4 w-4 transform transition-transform duration-200 mobile-dropdown-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
            <div class="pl-4 hidden mobile-dropdown-content">
                <div class="relative">
                    <button class="w-full text-left flex justify-between items-center px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md mobile-sub-dropdown-toggle">
                        Buku dan Jurnal
                        <svg class="h-4 w-4 text-gray-400 transform transition-transform duration-200 mobile-sub-dropdown-icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="pl-4 hidden mobile-sub-dropdown-content">
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Buku</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Jurnal</a>
                        <a href="#" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Prosiding</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-2">
            <input type="text" placeholder="Pencarian..." class="w-full py-2 pl-4 pr-10 rounded-full border border-gray-300 focus:outline-none focus:border-green-500">
        </div>
        <a href="#" class="mt-2 block w-full text-center bg-green-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-green-700 transition duration-300">LINE BSILHK</a>
    </div>
</nav>

<!-- JavaScript untuk fungsionalitas menu mobile dropdown dan sub-dropdown -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Main Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Loop through all main mobile dropdowns
        document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('.mobile-dropdown-icon');
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Loop through all nested mobile sub-dropdowns
        document.querySelectorAll('.mobile-sub-dropdown-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('.mobile-sub-dropdown-icon');
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-90'); 
            });
        });
    });
</script>

</body>
</html>
