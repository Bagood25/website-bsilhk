{{--
    File: profil.blade.php
    Ini adalah halaman profil yang memuat header dan footer dari direktori 'partials'.
    Pastikan file _header.blade.php dan _footer.blade.php berada di resources/views/partials.
--}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil BSILHK</title>
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

    <!-- 
        Memanggil header dari folder 'partials'.
        Jalur ini menunjuk ke 'resources/views/partials/_header.blade.php'.
    -->
    @include('partials._header')

    <!-- Hero Section / Banner -->
    <div class="relative h-64 bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('{{ asset('images/background hutan.jpg') }}');">
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
    <main class="flex-grow container mx-auto max-w-7xl px-4 py-12">
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Image & Sub-title -->
            <div class="w-full md:w-1/3">
                <img src="https://placehold.co/600x400/94a3b8/ffffff?text=Kantor+BSILHK" alt="Gambar Profil" class="w-full rounded-lg shadow-lg">
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

    <!-- 
        Memanggil footer dari folder 'partials'.
        Jalur ini menunjuk ke 'resources/views/partials/_footer.blade.php'.
    -->
    @include('partials._footer')

</body>
</html>
