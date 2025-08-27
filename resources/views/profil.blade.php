<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- DIUBAH: Judul halaman diperbarui --}}
    <title>Profil P2SEMH</title>
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
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight">Profil P2SEMH</h1>
            <p class="mt-2 text-sm md:text-base">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> &gt; 
                <a href="#" class="hover:underline">Tentang P2SEMH</a> &gt; 
                <span class="font-medium">Profil P2SEMH</span>
            </p>
        </div>
    </div>

    <main class="flex-grow container mx-auto max-w-7xl px-4 py-12">
        <div class="flex flex-col md:flex-row gap-8">
            <div class="w-full md:w-1/3">
                {{-- DIUBAH: Teks placeholder pada gambar diperbarui --}}
                <img src="https://placehold.co/600x400/94a3b8/ffffff?text=Kantor+P2SEMH" alt="Gedung Kantor P2SEMH" class="w-full rounded-lg shadow-lg">
                <h2 class="mt-6 text-2xl font-semibold text-gray-800">
                    Standar Kuat, LHK Terlindung dan Ekonomi Tumbuh
                </h2>
            </div>
            
            <div class="w-full md:w-2/3 text-gray-700 leading-relaxed">
                {{-- DIUBAH: Seluruh paragraf konten diperbarui --}}
                <p>
                    Pusat Standardisasi Instrumen Pengujian dan Mutu Hasil Hutan (P2SEMH) memiliki peran penting dalam ekosistem Kementerian Lingkungan Hidup dan Kehutanan. Lembaga ini bertanggung jawab untuk merumuskan, mengembangkan, dan menerapkan standar instrumen yang kredibel untuk pengujian dan penjaminan mutu hasil hutan.
                </p>
                <p class="mt-4">
                    P2SEMH memiliki peran strategis dalam menyediakan standar dan instrumen yang kuat, kredibel, dan relevan untuk mendukung perlindungan lingkungan hidup serta pertumbuhan ekonomi berbasis kehutanan yang berkelanjutan. Kami berkomitmen untuk terus berinovasi dan berkolaborasi dengan berbagai pihak dalam mencapai tujuan tersebut.
                </p>
                <p class="mt-4">
                    Visi kami adalah menjadi pusat unggulan dalam standardisasi instrumen pengujian dan mutu hasil hutan yang mendukung pembangunan berkelanjutan. Misi kami meliputi:
                </p>
                <ul class="list-disc list-inside mt-4 pl-4 space-y-2">
                    <li>Menyediakan standar dan instrumen yang akurat dan relevan.</li>
                    <li>Mendorong penerapan inovasi di bidang lingkungan hidup dan kehutanan.</li>
                    <li>Membangun kemitraan strategis dengan pemangku kepentingan.</li>
                </ul>
            </div>
        </div>
    </main>

    @include('partials._footer')

</body>
</html>