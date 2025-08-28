{{--
    File: resources/views/tugas_dan_fungsi.blade.php
    Halaman ini menjelaskan tugas dan fungsi utama dari P2SEMH dengan tata letak yang interaktif dan modern.
    Header dan Footer diambil dari partials/
--}}
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas dan Fungsi P2SEMH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
        /* Custom styles untuk accordion */
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    @include('partials._header')

    <div class="relative h-72 bg-cover bg-center flex items-center justify-center text-white shadow-xl" style="background-image: url('{{ asset('images/background hutan.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-black/20"></div>
        <div class="relative z-10 text-center p-4">
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-white leading-tight">
                Tugas dan Fungsi
            </h1>
            <p class="mt-4 text-sm md:text-base text-gray-200">
                <a href="/" class="hover:text-green-300 transition-colors">Beranda</a> &gt;
                <a href="#" class="hover:text-green-300 transition-colors">Tentang P2SEMH</a> &gt;
                <span class="font-semibold">Tugas dan Fungsi</span>
            </p>
        </div>
    </div>

    <main class="flex-grow container mx-auto max-w-7xl px-4 py-16">
        <div class="space-y-10">

            <div class="bg-white p-8 rounded-xl shadow-lg transition-shadow duration-300 hover:shadow-2xl">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center flex items-center justify-center">
                    <i class="fas fa-landmark mr-3 text-green-600"></i>
                    Pusat Pengembangan Sosial Ekonomi Masyarakat Hutan
                </h2>
                
                <div class="grid md:grid-cols-5 gap-8">
                    <div class="md:col-span-2 bg-green-50 p-6 rounded-lg border-l-4 border-green-500">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-bullseye mr-2 text-green-700"></i> Tugas
                        </h3>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Melaksanakan pengembangan sosial masyarakat hutan.
                        </p>
                    </div>
                    <div class="md:col-span-3">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                            <i class="fas fa-cogs mr-2 text-green-700"></i> Fungsi
                        </h3>
                        <div class="space-y-2" id="fungsi-accordion">
                            <div class="border rounded-lg overflow-hidden">
                                <button class="w-full text-left p-4 bg-gray-100 hover:bg-gray-200 focus:outline-none flex justify-between items-center transition-colors accordion-toggle">
                                    <span class="font-semibold text-gray-800">Daftar Fungsi Utama</span>
                                    <i class="fas fa-chevron-down transform transition-transform"></i>
                                </button>
                                <div class="accordion-content">
                                    <ul class="p-4 bg-white space-y-3 text-gray-700 list-decimal list-inside">
                                        <li>Penyusunan kebijakan teknis di bidang perencanaan, formulasi, dan fasilitasi penerapan sosial ekonomi masyarakat hutan.</li>
                                        <li>Pelaksanaan perencanaan, formulasi dan fasilitasi penerapan pengembangan sosial ekonomi masyrakat hutan.</li>
                                        <li>Pelaksanaan pengelolaan laboratorium.</li>
                                        <li>Pelaksanaan pengelolaan dan pembinaan kawasan hutan dengan tujuan khusus.</li>
                                        <li>Pelaksanaan pemantauan, evaluasi, dan pelaporan.</li>
                                        <li>Pelaksanaan urusan ketatausahaan pusat.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg transition-shadow duration-300 hover:shadow-2xl">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center"><i class="fas fa-briefcase mr-2 text-blue-600"></i>Subbagian Tata Usaha</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Melakukan pelaksanaan urusan administrasi sumber daya manusia, keuangan, barang milik negara, tata persuratan, kearsipan, kerumahtanggaan, koordinasi data dan informasi, penyiapan bahan penyusunan rencana, program, anggaran, serta koordinasi administrasi penerapan pengendalian intern pusat.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg transition-shadow duration-300 hover:shadow-2xl">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center"><i class="fas fa-drafting-compass mr-2 text-purple-600"></i>Bidang Perencanaan & Formulasi</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Melaksanakan penyiapan penyusunan kebijakan teknis dan pelaksanaan di bidang perencanaan dan formulasi pengembangan sosial ekonomi masyarakat hutan.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg transition-shadow duration-300 hover:shadow-2xl">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center"><i class="fas fa-people-carry mr-2 text-yellow-600"></i>Bidang Fasilitasi Penerapan</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Melaksanakan penyiapan penyusunan kebijakan teknis dan pelaksanaan di bidang fasilitasi penerapan masyarakat hutan, pengembangan sosial ekonomi, pengelolaan laboratorium serta pengelolaan dan pembinaan kawasan hutan dengan tujuan khusus.
                    </p>
                </p>
                </div>
            </div>

        </div>
    </main>

    @include('partials._footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const accordionToggles = document.querySelectorAll('.accordion-toggle');
            
            accordionToggles.forEach(button => {
                button.addEventListener('click', () => {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('i');

                    if (content.style.maxHeight) {
                        content.style.maxHeight = null;
                        icon.classList.remove('rotate-180');
                    } else {
                        content.style.maxHeight = content.scrollHeight + 'px';
                        icon.classList.add('rotate-180');
                    }
                });
            });
        });
    </script>

</body>
</html>