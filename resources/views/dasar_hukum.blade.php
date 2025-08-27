<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- DIUBAH: Judul halaman diperbarui --}}
    <title>Dasar Hukum P2SEMH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">

    @include('partials._header')

    <div class="relative h-64 bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('{{ asset('images/background hutan.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <div class="relative z-10 text-center p-4">
            {{-- DIUBAH: Judul banner dan breadcrumb diperbarui --}}
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight">Dasar Hukum P2SEMH</h1>
            <p class="mt-2 text-sm md:text-base">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> &gt; 
                <a href="#" class="hover:underline">Tentang P2SEMH</a> &gt; 
                <span class="font-medium">Dasar Hukum</span>
            </p>
        </div>
    </div>

    <main class="flex-grow container mx-auto max-w-7xl px-4 py-16">
        <div class="bg-white p-8 rounded-lg shadow-lg">
            {{-- DIUBAH: Judul konten diperbarui --}}
            <h2 class="text-3xl font-bold text-gray-800 mb-6 border-b-2 pb-4">Landasan Hukum P2SEMH</h2>
            <p class="text-gray-700 leading-relaxed mb-8">
                Pembentukan dan operasional Pusat Standardisasi Instrumen Pengujian dan Mutu Hasil Hutan (P2SEMH) didasarkan pada serangkaian peraturan perundang-undangan yang menjadi landasan hukum dalam menjalankan tugas dan fungsinya. Dasar hukum ini mencakup:
            </p>
            {{-- DIUBAH: Isi daftar peraturan diperbarui --}}
            <ul class="space-y-4 text-gray-700 list-disc list-inside">
                <li class="pl-4">
                    <strong>Peraturan Presiden Nomor 92 Tahun 2020</strong> tentang Kementerian Lingkungan Hidup dan Kehutanan. Peraturan ini mengamanatkan transformasi dan pembentukan unit kerja baru di lingkungan KLHK.
                </li>
                <li class="pl-4">
                    <strong>Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor 15 Tahun 2021</strong> tentang Organisasi dan Tata Kerja Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan, yang menjadi cikal bakal P2SEMH.
                </li>
                <li class="pl-4">
                    <strong>Undang-Undang Nomor 32 Tahun 2009</strong> tentang Perlindungan dan Pengelolaan Lingkungan Hidup, yang menjadi payung hukum dalam pelaksanaan tugas di bidang lingkungan hidup.
                </li>
                <li class="pl-4">
                    <strong>Undang-Undang Nomor 41 Tahun 1999</strong> tentang Kehutanan, yang menjadi landasan hukum utama dalam pelaksanaan tugas di bidang kehutanan.
                </li>
                <li class="pl-4">
                    Peraturan perundang-undangan lain yang berkaitan dengan standardisasi dan instrumen di sektor lingkungan hidup dan kehutanan.
                </li>
            </ul>
        </div>
    </main>

    @include('partials._footer')

</body>
</html>