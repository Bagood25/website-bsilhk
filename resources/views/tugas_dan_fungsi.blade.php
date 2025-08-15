{{--
    File: resources/views/tugas_dan_fungsi.blade.php
    Halaman ini menjelaskan tugas dan fungsi utama dari BSILHK.
    Header dan Footer diambil dari partials/
--}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas dan Fungsi BSILHK</title>
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
    <div class="relative h-64 bg-cover bg-center flex items-center justify-center text-white" style="background-image: url('{{ asset('images/background hutan.jpg') }}');">
        <!-- Overlay untuk visibilitas teks -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        <div class="relative z-10 text-center p-4">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight">Tugas dan Fungsi</h1>
            <p class="mt-2 text-sm md:text-base">
                <a href="#" class="hover:underline">Beranda</a> &gt; 
                <a href="#" class="hover:underline">Tentang BSILHK</a> &gt; 
                <span class="font-medium">Tugas dan Fungsi</span>
            </p>
        </div>
    </div>

    <!-- Main Content Section -->
    <main class="flex-grow container mx-auto max-w-7xl px-4 py-12">
        <div class="grid md:grid-cols-2 gap-8">
            <!-- Tugas Section -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Tugas Utama</h2>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <p class="text-lg text-gray-700 leading-relaxed mb-4">
                        BSILHK memiliki tugas utama untuk menyelenggarakan perumusan, penyusunan, dan pelaksanaan kebijakan teknis di bidang standardisasi instrumen lingkungan hidup dan kehutanan. Tugas-tugas ini mencakup:
                    </p>
                    <ul class="space-y-4 text-gray-700 list-disc list-inside pl-4">
                        <li>Perumusan standar dan instrumen yang relevan dan dapat diterapkan.</li>
                        <li>Pelaksanaan kalibrasi, pengujian, dan sertifikasi instrumen.</li>
                        <li>Pengembangan inovasi dan teknologi di bidang LHK.</li>
                        <li>Penyusunan laporan dan evaluasi berkala atas kinerja standardisasi.</li>
                    </ul>
                </div>
            </div>

            <!-- Fungsi Section -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-6">Fungsi Organisasi</h2>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <p class="text-lg text-gray-700 leading-relaxed mb-4">
                        Untuk melaksanakan tugas-tugas tersebut, BSILHK menjalankan beberapa fungsi, antara lain:
                    </p>
                    <ul class="space-y-4 text-gray-700 list-disc list-inside pl-4">
                        <li>
                            <strong>Perumusan Kebijakan Teknis:</strong> Menyusun pedoman dan kebijakan teknis terkait standardisasi instrumen LHK.
                        </li>
                        <li>
                            <strong>Pelaksanaan:</strong> Menerapkan standar yang telah dirumuskan melalui berbagai program dan kegiatan.
                        </li>
                        <li>
                            <strong>Pembinaan dan Pengawasan:</strong> Memberikan bimbingan teknis dan mengawasi pelaksanaan standardisasi di lapangan.
                        </li>
                        <li>
                            <strong>Pelayanan Dukungan Administrasi:</strong> Menyelenggarakan layanan administrasi dan teknis untuk seluruh unit kerja BSILHK.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>

    <!-- Memuat footer -->
    @include('partials._footer')

</body>
</html>
