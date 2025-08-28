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
<body class="font-sans antialiased">

<!-- Top Navbar - Sesuai dengan screenshot yang diberikan -->
<div class="bg-gray-100 text-gray-700 py-2 text-sm hidden md:block border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <div class="flex space-x-6">
            <a href="mailto:bsilhk@menlhk.go.id" class="flex items-center hover:text-orange-600 transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                bsilhk@menlhk.go.id
            </a>
            <a href="tel:(021) 57903068" class="flex items-center hover:text-orange-600 transition-colors duration-200">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/20000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 1.48a1 1 0 01-.188 1.096l-1.547 1.547a1 1 0 00-.214 1.258l2.258 2.258a1 1 0 001.258-.214l1.547-1.547a1 1 0 011.096-.188l1.48.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                (021) 57903068
            </a>
            <a href="https://www.google.com/maps/search/?api=1&query=Pusat+Penelitian+Dan+Pengembangan+Hutan+Bogor" target="_blank" class="flex items-center hover:text-orange-600 transition-colors duration-200">
    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
    Jalan Gunung Batu Nomor 5, Kota Bogor, 1168
</a>
        </div>
        <div class="flex items-center space-x-4">
            <a href="https://www.facebook.com/pusfaster" target="_blank" class="hover:text-orange-600 transition-colors duration-200">
                <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="h-5 w-5">
            </a>
            <a href="https://www.instagram.com/pusfaster/" target="_blank" class="hover:text-orange-600 transition-colors duration-200">
                <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="h-5 w-5">
            </a>
            <a href="www.youtube.com/@BadanStandardisasiInstrumenLHK/" target="_blank" class="hover:text-orange-600 transition-colors duration-200">
                <img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="h-5 w-5">
            </a>
            <!-- Language Selector (contoh sederhana) -->
            <div class="relative group">
                <button class="flex items-center text-gray-700 hover:text-orange-600 focus:outline-none">
                    <img src="https://placehold.co/20x15/cccccc/ffffff?text=ID" alt="Indonesia Flag" class="h-3 w-5 mr-1">
                    Indonesia
                    <svg class="ml-1 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <!-- Dropdown untuk pilihan bahasa -->
                <div class="absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">English</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Indonesia</a>
                </div>
            </div>
        </div>
    </div>
</div>

<nav class="bg-white shadow-md relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- TAMBAHKAN class="items-center" di sini untuk mensejajarkan semua item --}}
        <div class="flex justify-between items-center h-20"> 
            <div class="flex items-center">
                {{-- HAPUS tag <a> yang membungkus logo --}}
                <div class="flex-shrink-0 flex items-center">
                    {{-- Logo pertama --}}
                    <img class="h-10 w-auto" src="{{ asset('images/logo-bsilhk.png') }}" alt="BSILHK Logo">
                    
                    {{-- Logo kedua --}}
                    <img class="h-10 w-auto ml-2" src="{{ asset('images/bsilhk.png') }}" alt="Logo Kedua">

                   
                </div>
                {{-- TUTUP div di sini --}}
            </div>

            <div class="hidden md:flex md:items-center md:ml-6">

            <!-- Desktop Navigation -->
            <div class="hidden md:flex md:items-center md:ml-6">
                <div class="flex space-x-4">
                    <a href="{{ url('/') }}" class="text-gray-800 hover:text-orange-600 px-3 py-2 rounded-md text-sm font-medium">Beranda</a>

                    <!-- Dropdown Tentang P2SEMH -->
                    <div class="relative dropdown dropdown-container">
                        <button class="text-gray-800 hover:text-orange-600 px-3 py-2 rounded-md text-sm font-medium flex items-center">
                            Tentang P2SEMH
                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                <a href="{{ url('/profil') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Profil P2SEMH</a>
                                <a href="{{ url('/dasar-hukum') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dasar Hukum</a>
                                <a href="{{ url('/tugas-dan-fungsi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Tugas dan Fungsi</a>
                                <a href="{{ url('/struktur-organisasi') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Struktur Organisasi</a>
                            </div>
                        </div>
                    </div>

                    <!-- Dropdown Berita -->
                    <div class="relative dropdown dropdown-container">
    <button class="text-gray-800 hover:text-orange-600 px-3 py-2 rounded-md text-sm font-medium flex items-center">
        Berita
        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    <div class="dropdown-menu absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            {{-- DIUBAH: Menggunakan URL baru /berita-p2semh --}}
            <a href="{{ url('/berita-p2semh') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Berita P2SEMH</a>
            
            {{-- DIUBAH: Menggunakan URL baru /berita-kehutanan --}}
            <a href="{{ url('/berita-kehutanan') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Berita Kehutanan</a>
        </div>
    </div>
</div>

                    <!-- Dropdown Regulasi -->
                    <div class="relative dropdown dropdown-container">
    <button class="text-gray-800 hover:text-orange-600 px-3 py-2 rounded-md text-sm font-medium flex items-center">
        Media dan Informasi
        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    <div class="dropdown-menu absolute left-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            <a href="{{ url('/galeri-foto') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Galeri Foto</a>
            <a href="{{ url('/galeri-video') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Galeri Video</a>
        </div>
    </div>
</div>

                    <a href="{{ route('agenda.index') }}" class="text-gray-800 hover:text-orange-600 px-3 py-2 rounded-md text-sm font-medium">Agenda</a>

                    <!-- Dropdown untuk Download -->
                    <div class="relative group">
    <button class="text-gray-700 hover:text-green-600 font-medium transition duration-300 flex items-center">
        Download
        <svg class="w-4 h-4 ml-1 transform transition-transform duration-300 group-hover:rotate-180" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
    </button>
    <div class="absolute hidden group-hover:block mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 py-1 z-20">
        {{-- Perubahan di 2 baris ini: 'download.show' menjadi 'download.kategori' --}}
        <a href="{{ route('download.kategori', 'laporan-tahunan') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Laporan Tahunan</a>
        <a href="{{ route('download.kategori', 'rencana-kerja') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Rencana Kerja</a>
        
        <a href="https://bsilhk.menlhk.go.id/itto-gsk/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">ITTO</a>
    </div>
</div>

                    <!-- Search Input (Optional) -->
                    <div class="relative flex items-center">
                        <input type="text" placeholder="Pencarian..." class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <!-- Line BSILHK Button -->
                    <a href="#" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-orange-600 hover:bg-orange-700">
                        LINE BSILHK
                        <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex items-center md:hidden">
                <button type="button" id="mobile-menu-button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-orange-500" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed. -->
                    <!-- Heroicon name: outline/menu -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open. -->
                    <!-- Heroicon name: outline/x -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <!-- Mobile Top Navbar Content -->
            <div class="flex flex-col space-y-2 py-2 border-b border-gray-200">
                <a href="mailto:bsilhk@menlhk.go.id" class="flex items-center text-gray-700 hover:text-orange-600 text-sm font-medium">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                    bsilhk@menlhk.go.id
                </a>
                <a href="tel:(021) 57903068" class="flex items-center text-gray-700 hover:text-orange-600 text-sm font-medium">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 1.48a1 1 0 01-.188 1.096l-1.547 1.547a1 1 0 00-.214 1.258l2.258 2.258a1 1 0 001.258-.214l1.547-1.547a1 1 0 011.096-.188l1.48.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                    (021) 57903068
                </a>
                <span class="flex items-center text-gray-700 text-sm font-medium">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                    Ged. Manggala Wanabakti Blok VII Lantai 10, Jl. Jenderal Gatot Subroto, Jakarta 10270
                </span>
                <div class="flex space-x-4 mt-2">
                    <a href="https://www.facebook.com/pusfaster" target="_blank" class="text-gray-700 hover:text-orange-600">
                        <img src="{{ asset('images/facebook.png') }}" alt="Facebook" class="h-5 w-5">
                    </a>
                    <a href="https://www.instagram.com/pusfaster/" target="_blank" class="text-gray-700 hover:text-orange-600">
                        <img src="{{ asset('images/instagram.png') }}" alt="Instagram" class="h-5 w-5">
                    </a>
                    <a href="www.youtube.com/@BadanStandardisasiInstrumenLHK/   " target="_blank" class="text-gray-700 hover:text-orange-600">
                        <img src="{{ asset('images/youtube.png') }}" alt="YouTube" class="h-5 w-5">
                    </a>
                </div>
            </div>
            <!-- End Mobile Top Navbar Content -->

            <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">Beranda</a>

            <!-- Mobile Dropdown Tentang BSILHK -->
            <div class="relative">
                <button class="mobile-dropdown-toggle w-full text-left flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">
                    Tentang P2SEMH
                    <svg class="mobile-dropdown-icon ml-2 -mr-0.5 h-4 w-4 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div class="mobile-dropdown-menu hidden pl-4 mt-1 space-y-1">
                    <a href="{{ url('/profil') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Profil P2SEMH</a>
                    <a href="{{ url('/dasar-hukum') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Dasar Hukum</a>
                    <a href="{{ url('/tugas-dan-fungsi') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Tugas dan Fungsi</a>
                    <a href="{{ url('/struktur-organisasi') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Struktur Organisasi</a>
                </div>
            </div>

            <!-- Mobile Dropdown Berita -->
            <div class="relative">
    <button class="mobile-dropdown-toggle w-full text-left flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">
        Berita
        <svg class="mobile-dropdown-icon ml-2 -mr-0.5 h-4 w-4 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    <div class="mobile-dropdown-menu hidden pl-4 mt-1 space-y-1">
        {{-- DIUBAH: Menggunakan URL baru /berita-p2semh --}}
        <a href="{{ url('/berita-p2semh') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Berita P2SEMH</a>

        {{-- DIUBAH: Menggunakan URL baru /berita-kehutanan --}}
        <a href="{{ url('/berita-kehutanan') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Berita Kehutanan</a>
    </div>
</div>

            <!-- Mobile Dropdown Regulasi -->
<            <div class="relative">
    <button class="mobile-dropdown-toggle w-full text-left flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">
        Media dan Informasi
        <svg class="mobile-dropdown-icon ml-2 -mr-0.5 h-4 w-4 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    <div class="mobile-dropdown-menu hidden pl-4 mt-1 space-y-1">
        <a href="{{ url('/galeri-foto') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Galeri Foto</a>
        <a href="{{ url('/galeri-video') }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Galeri Video</a>
    </div>
</div>
            </>

            <a href="{{ route('agenda.index') }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">Agenda</a>

            <!-- Mobile Dropdown Download -->
           <div class="relative">
    <button class="mobile-dropdown-toggle w-full text-left flex justify-between items-center px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-gray-50">
        Download
        <svg class="mobile-dropdown-icon ml-2 -mr-0.5 h-4 w-4 transform transition-transform duration-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
    <div class="mobile-dropdown-menu hidden pl-4 mt-1 space-y-1">
        {{-- Di sini perubahannya: 'title' menjadi 'kategori' --}}
        <a href="{{ route('download.kategori', ['kategori' => 'laporan-tahunan']) }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Laporan Tahunan</a>
        <a href="{{ route('download.kategori', ['kategori' => 'rencana-kerja']) }}" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">Rencana Kerja</a>
        
        <a href="https://bsilhk.menlhk.go.id/itto-gsk/" target="_blank" class="block px-3 py-2 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-50">ITTO-GSK</a>
    </div>
</div>
        <div class="pt-4 pb-3 border-t border-gray-200">
            <div class="flex items-center px-5">
                <!-- User Info (Optional) -->
            </div>
            <div class="mt-3 px-2 space-y-1">
                <!-- Mobile Search Input -->
                <input type="text" placeholder="Pencarian..." class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm">
                <!-- Mobile Line BSILHK Button -->
                <a href="#" class="block w-full text-center px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-orange-600 hover:bg-orange-700 mt-2">
                    LINE BSILHK
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- JavaScript untuk fungsionalitas menu mobile dropdown dan sub-dropdown -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Main Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Loop through all main mobile dropdowns
        document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('.mobile-dropdown-icon');
                if (content && icon) {
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                }
            });
        });

        // Loop through all nested mobile sub-dropdowns (This section is now for general mobile dropdowns, not specific sub-dropdowns)
        // The previous sub-dropdown logic for 'Peraturan Menteri' has been removed.
        // This loop will now only apply to top-level mobile dropdowns.
        document.querySelectorAll('.mobile-sub-dropdown-toggle').forEach(button => {
            button.addEventListener('click', () => {
                const content = button.nextElementSibling;
                const icon = button.querySelector('.mobile-sub-dropdown-icon');
                if (content && icon) {
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-90');
                }
            });
        });
    });
</script>
</body>
</html>
