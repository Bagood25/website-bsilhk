{{--
    File: resources/views/dasar_hukum.blade.php
    Halaman ini menampilkan daftar dasar hukum yang melandasi pembentukan BSILHK.
    Header dan Footer diambil dari partials/
--}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasar Hukum BSILHK</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    <!-- Memuat header -->
    @include('partials._header')

    <!-- Hero Section / Banner -->
    <div class="relative h-64 bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('https://placehold.co/1920x400/1e40af/ffffff?text=Banner+Dasar+Hukum');">
        <!-- Overlay untuk visibilitas teks -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <div class="relative z-10 text-center p-4">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight">Dasar Hukum</h1>
            <p class="mt-2 text-sm md:text-base">
                <a href="#" class="hover:underline">Beranda</a> &gt; 
                <a href="#" class="hover:underline">Tentang BSILHK</a> &gt; 
                <span class="font-medium">Dasar Hukum</span>
            </p>
        </div>
    </div>

    <!-- Main Content Section -->
    <main class="flex-grow container mx-auto max-w-7xl px-4 py-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-6">Landasan Hukum Pembentukan</h2>
        <div class="bg-white p-8 rounded-lg shadow-lg">
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan (BSILHK) didirikan berdasarkan beberapa peraturan perundangan yang kuat. Berikut adalah landasan hukum utama yang menjadi dasar pembentukan dan operasional BSILHK:
            </p>
            
            <ul class="space-y-4 text-gray-700 list-disc list-inside">
                <li class="pl-4">
                    <strong>Peraturan Presiden Nomor 92 Tahun 2020</strong> tentang Kementerian Lingkungan Hidup dan Kehutanan. Peraturan ini mengamanatkan transformasi dan pembentukan unit kerja baru di lingkungan KLHK, termasuk BSILHK.
                </li>
                <li class="pl-4">
                    <strong>Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor 15 Tahun 2021</strong> tentang Organisasi dan Tata Kerja Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan. Peraturan ini secara spesifik mengatur struktur, tugas, dan fungsi BSILHK.
                </li>
                <li class="pl-4">
                    <strong>Undang-Undang Nomor 32 Tahun 2009</strong> tentang Perlindungan dan Pengelolaan Lingkungan Hidup, yang menjadi payung hukum dalam pelaksanaan tugas BSILHK di bidang lingkungan hidup.
                </li>
                <li class="pl-4">
                    <strong>Undang-Undang Nomor 41 Tahun 1999</strong> tentang Kehutanan, yang menjadi landasan hukum utama dalam pelaksanaan tugas BSILHK di bidang kehutanan.
                </li>
                <li class="pl-4">
                    Peraturan perundang-undangan lain yang berkaitan dengan standardisasi dan instrumen di sektor lingkungan hidup dan kehutanan.
                </li>
            </ul>
        </div>
    </main>

    <!-- Memuat footer -->
    @include('partials._footer')

</body>
</html>
