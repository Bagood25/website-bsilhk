<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Download' }} - BSILHK</title>
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

        /* Custom style for the hero section background */
        .hero-background {
            background-image: url('https://placehold.co/1920x400/333333/ffffff?text=Background+Image'); /* Placeholder image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body class="bg-gray-100">

    {{-- Memuat header --}}
    @include('partials._header')

    <!-- Hero Section -->
    <section class="hero-background relative h-96 flex items-center justify-center text-white text-center">
        <div class="absolute inset-0 bg-black opacity-50"></div> {{-- Overlay gelap --}}
        <div class="relative z-10">
            <h1 class="text-5xl font-bold mb-4">{{ $title ?? 'Halaman Download' }}</h1>
            <p class="text-lg">Beranda > Download > {{ $title ?? 'Halaman Download' }}</p>
            <div class="mt-8">
                <button id="scroll-down-button" class="bg-white text-gray-800 p-3 rounded-full shadow-lg hover:bg-gray-200 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
                </button>
            </div>
        </div>
    </section>

    <main class="max-w-7xl mx-auto px-4 py-8">
        {{-- Konten dinamis akan ditampilkan di sini --}}
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            @if(isset($content))
                <div class="prose max-w-none">
                    {!! $content !!}
                </div>
            @else
                <p class="text-gray-700">Tidak ada konten yang tersedia untuk bagian ini.</p>
            @endif
        </div>

        {{-- Contoh daftar item download (bisa diganti dengan data dari database) --}}
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Daftar Item</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-lg p-4 flex items-center space-x-4">
                <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg>
                <div>
                    <h3 class="font-semibold text-gray-900">Dokumen Contoh 1.pdf</h3>
                    <p class="text-sm text-gray-600">Ukuran: 1.2 MB</p>
                    <a href="#" class="text-blue-600 hover:underline text-sm">Download</a>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 flex items-center space-x-4">
                <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg>
                <div>
                    <h3 class="font-semibold text-gray-900">Laporan Tahunan 2023.docx</h3>
                    <p class="text-sm text-gray-600">Ukuran: 800 KB</p>
                    <a href="#" class="text-blue-600 hover:underline text-sm">Download</a>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg p-4 flex items-center space-x-4">
                <svg class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg>
                <div>
                    <h3 class="font-semibold text-gray-900">Panduan Teknis.zip</h3>
                    <p class="text-sm text-gray-600">Ukuran: 5.5 MB</p>
                    <a href="#" class="text-blue-600 hover:underline text-sm">Download</a>
                </div>
            </div>
        </div>
    </main>

    {{-- Memuat footer --}}
    @include('partials._footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const scrollDownButton = document.getElementById('scroll-down-button');
            if (scrollDownButton) {
                scrollDownButton.addEventListener('click', () => {
                    // Scroll ke bagian main content
                    document.querySelector('main').scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>

</body>
</html>
