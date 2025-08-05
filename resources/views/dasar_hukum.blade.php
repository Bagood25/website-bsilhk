<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasar Hukum</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Header, as provided previously -->
    <!-- Anda dapat menyertakan _header.blade.php di sini -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <!-- Isi header dari file _header.blade.php akan diletakkan di sini -->
            <p class="text-center">Ini adalah placeholder untuk Header Anda</p>
        </div>
    </header>

    <!-- Hero Section / Banner -->
    <div class="relative h-64 bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('https://placehold.co/1920x400/0c4a6e/ffffff?text=Background+Image');">
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
    <main class="container mx-auto max-w-7xl px-4 py-12">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-1/3">
                <img src="https://placehold.co/600x400/94a3b8/ffffff?text=Image+Dasar+Hukum" alt="Gambar Dasar Hukum" class="w-full rounded-lg shadow-lg">
                <h2 class="mt-6 text-2xl font-semibold text-gray-800">
                    Peraturan dan Ketetapan
                </h2>
            </div>
            
            <div class="w-full md:w-2/3 text-gray-700 leading-relaxed">
                <p>
                    Pendirian dan operasional BSILHK didasarkan pada landasan hukum yang kuat, yang memastikan setiap tindakan dan kebijakan sejalan dengan regulasi yang berlaku. Berikut adalah beberapa dasar hukum utama yang menjadi acuan:
                </p>
                <ul class="list-disc list-inside mt-4 pl-4 space-y-2">
                    <li>**Peraturan Presiden Nomor 92 Tahun 2020** tentang Kementerian Lingkungan Hidup dan Kehutanan, yang menjadi dasar pembentukan BSILHK sebagai bagian dari struktur KLHK.</li>
                    <li>**Peraturan Menteri LHK Nomor 15 Tahun 2021** tentang Organisasi dan Tata Kerja Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan.</li>
                    <li>**Undang-Undang Nomor 32 Tahun 2009** tentang Perlindungan dan Pengelolaan Lingkungan Hidup.</li>
                    <li>**Undang-Undang Nomor 41 Tahun 1999** tentang Kehutanan.</li>
                    <li>Berbagai peraturan dan keputusan menteri terkait yang menunjang operasional dan tugas pokok BSILHK.</li>
                </ul>
                <p class="mt-4">
                    Setiap kebijakan dan program yang dijalankan BSILHK selalu mengacu pada peraturan perundang-undangan yang berlaku untuk memastikan kepatuhan dan legalitas.
                </p>
            </div>
        </div>
    </main>

</body>
</html>
