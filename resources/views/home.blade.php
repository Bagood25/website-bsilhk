@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

    <!-- 1. Berita Slider Section -->
    <section id="berita-slider" class="my-16 container mx-auto px-6">
        <div class="relative w-full overflow-hidden rounded-lg shadow-lg">
            <div id="hero-slider" class="flex transition-transform duration-500 ease-in-out">
                <!-- Slide 1 -->
                <div class="w-full flex-shrink-0">
                    <div class="relative bg-cover bg-center h-[500px] flex items-center justify-center" style="background-image: url('https://placehold.co/1920x500/0d9488/ffffff?text=Berita+Utama+1');">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="relative text-center text-white px-4">
                            <h2 class="text-4xl font-bold mb-2">Judul Berita Utama Pertama</h2>
                            <p class="text-lg">Deskripsi singkat berita utama pertama di sini.</p>
                            <a href="#" class="mt-4 inline-block bg-green-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-green-700 transition duration-300">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="w-full flex-shrink-0">
                    <div class="relative bg-cover bg-center h-[500px] flex items-center justify-center" style="background-image: url('https://placehold.co/1920x500/10b981/ffffff?text=Berita+Utama+2');">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="relative text-center text-white px-4">
                            <h2 class="text-4xl font-bold mb-2">Judul Berita Utama Kedua</h2>
                            <p class="text-lg">Deskripsi singkat berita utama kedua di sini.</p>
                            <a href="#" class="mt-4 inline-block bg-green-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-green-700 transition duration-300">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="w-full flex-shrink-0">
                    <div class="relative bg-cover bg-center h-[500px] flex items-center justify-center" style="background-image: url('https://placehold.co/1920x500/43a047/ffffff?text=Berita+Utama+3');">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="relative text-center text-white px-4">
                            <h2 class="text-4xl font-bold mb-2">Judul Berita Utama Ketiga</h2>
                            <p class="text-lg">Deskripsi singkat berita utama ketiga di sini.</p>
                            <a href="#" class="mt-4 inline-block bg-green-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-green-700 transition duration-300">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="w-full flex-shrink-0">
                    <div class="relative bg-cover bg-center h-[500px] flex items-center justify-center" style="background-image: url('https://placehold.co/1920x500/1e88e5/ffffff?text=Berita+Utama+4');">
                        <div class="absolute inset-0 bg-black opacity-50"></div>
                        <div class="relative text-center text-white px-4">
                            <h2 class="text-4xl font-bold mb-2">Judul Berita Utama Keempat</h2>
                            <p class="text-lg">Deskripsi singkat berita utama keempat di sini.</p>
                            <a href="#" class="mt-4 inline-block bg-green-600 text-white font-semibold py-2 px-6 rounded-full hover:bg-green-700 transition duration-300">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kontrol Navigasi Slider -->
            <button id="prev-slide" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button id="next-slide" class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </button>
        </div>
    </section>

    <!-- 2. Berita Fokus BSI Section -->
    <section id="berita-fokus" class="my-16 container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Berita Fokus BSI</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="https://placehold.co/600x400/10b981/ffffff?text=Anak+Sekolah+Dasar+Belajar" alt="Gambar berita" class="w-full h-48 object-cover">
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-2">28 November 2024</p>
                    <h3 class="text-xl font-semibold mb-2">Lebih Dari 350 Anak Sekolah Dasar Bicara Tentang Industri Susu</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                        Badan Standarisasi Instrumen LHK mengundang lebih dari 350 anak Sekolah Dasar Bogor untuk belajar tentang nutrisi susu, industri susu dan dampak lingkungannya, serta bagaimana mengkonservasi air.
                    </p>
                    <a href="#" class="text-green-600 font-medium hover:underline">Baca Selengkapnya >></a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="https://placehold.co/600x400/10b981/ffffff?text=Kepala+BSILHK+Berpidato" alt="Gambar berita" class="w-full h-48 object-cover">
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-2">18 November 2024</p>
                    <h3 class="text-xl font-semibold mb-2">Kepala BSILHK Tegaskan Standarisasi Esensial Dalam Rantai Kerja</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                        BSILHK adalah tapisan pertama dalam mengawal kualitas lingkungan hidup dan kelestarian hutan tetap terjaga. Karenanya, fungsi itu harus harus tetap ada dan berjalan, apa pun bentuk organisasi.
                    </p>
                    <a href="#" class="text-green-600 font-medium hover:underline">Baca Selengkapnya >></a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="https://placehold.co/600x400/10b981/ffffff?text=Laboratorium+Lingkungan" alt="Gambar berita" class="w-full h-48 object-cover">
                <div class="p-6">
                    <p class="text-sm text-gray-500 mb-2">23 Oktober 2024</p>
                    <h3 class="text-xl font-semibold mb-2">Menteri Lingkungan Hidup Tegaskan Peran Krusial Laboratorium Lingkungan</h3>
                    <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                        Dalam pengendalian lingkungan, laboratorium pengujian parameter lingkungan memiliki peran krusial antara mengukur kualitas lingkungan. Hasil upaya harus valid, sehingga kualitas laboratorium menjadi poin penting.
                    </p>
                    <a href="#" class="text-green-600 font-medium hover:underline">Baca Selengkapnya >></a>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Berita Standar Section (kotak hitam) -->
    <section id="berita-standar" class="my-16 bg-gray-900 text-white py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold mb-12 text-center">Berita Standar</h2>
            <div class="md:flex md:space-x-8 mb-12">
                <!-- Gambar Besar & Keterangan -->
                <div class="md:w-1/2">
                    <img src="https://placehold.co/800x500/0d9488/ffffff?text=Berita+Besar" alt="Berita Standar Gambar" class="w-full rounded-lg shadow-lg">
                </div>
                <div class="md:w-1/2 flex flex-col justify-center mt-8 md:mt-0">
                    <h3 class="text-3xl font-bold mb-4">Judul Berita Besar Di Sini</h3>
                    <p class="text-gray-300 mb-6">
                        Ini adalah deskripsi singkat dari berita utama pada bagian Berita Standar. Teks ini menjelaskan konten utama dari berita tersebut, mengajak pembaca untuk mengetahui lebih lanjut.
                    </p>
                    <a href="#" class="bg-green-600 text-white font-semibold py-3 px-8 rounded-full self-start hover:bg-green-700 transition duration-300">Baca Selengkapnya</a>
                </div>
            </div>
            <!-- Slider Berita Standar -->
            <div class="relative w-full overflow-hidden">
                <div id="berita-standar-slider" class="flex transition-transform duration-500 ease-in-out">
                    <!-- Slide 1 -->
                    <div class="w-full flex-shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
                        <!-- Berita 1 -->
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Berita+Standar+1" alt="Berita 1" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Berita Standar 1</h4>
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2">
                                    Deskripsi singkat berita standar pertama. Informasi penting dan menarik ada di sini.
                                </p>
                            </div>
                        </div>
                        <!-- Berita 2 -->
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Berita+Standar+2" alt="Berita 2" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Berita Standar 2</h4>
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2">
                                    Deskripsi singkat berita standar kedua. Menarik untuk dibaca lebih lanjut.
                                </p>
                            </div>
                        </div>
                        <!-- Berita 3 -->
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Berita+Standar+3" alt="Berita 3" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Berita Standar 3</h4>
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2">
                                    Deskripsi singkat berita standar ketiga. Berita penting dari BSILHK.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="w-full flex-shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
                        <!-- Berita 4 -->
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Berita+Standar+4" alt="Berita 4" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Berita Standar 4</h4>
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2">
                                    Deskripsi singkat berita standar keempat. Informasi terbaru dan terpercaya.
                                </p>
                            </div>
                        </div>
                        <!-- Berita 5 -->
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Berita+Standar+5" alt="Berita 5" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Berita Standar 5</h4>
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2">
                                    Deskripsi singkat berita standar kelima. Topik menarik untuk dibaca.
                                </p>
                            </div>
                        </div>
                        <!-- Berita 6 -->
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Berita+Standar+6" alt="Berita 6" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Berita Standar 6</h4>
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2">
                                    Deskripsi singkat berita standar keenam. Berita penting lainnya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kontrol Navigasi Slider -->
                <button id="prev-berita-standar-slide" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button id="next-berita-standar-slide" class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- 6. Galeri Foto Section -->
    <section id="galeri-foto" class="my-16 container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Galeri Foto</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
            <!-- Foto 1-9 -->
            @for ($i = 1; $i <= 9; $i++)
                <div class="relative overflow-hidden rounded-lg shadow-lg group">
                    <img src="https://placehold.co/400x300/10b981/ffffff?text=Foto+{{ $i }}" alt="Galeri Foto {{ $i }}" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-white font-semibold text-lg">Deskripsi Foto {{ $i }}</p>
                    </div>
                </div>
            @endfor
        </div>
        <div class="text-center mt-8">
            <a href="#" class="text-green-600 font-medium hover:underline text-lg">Selengkapnya</a>
        </div>
    </section>

    <!-- 7. Profil Kepala BSILHK & Kabar BSI (Kotak Hitam) -->
    <section id="profil-kepala-bsi" class="my-16 bg-gray-900 text-white py-16">
        <div class="container mx-auto px-6">
            <!-- Profil Kepala BSILHK -->
            <div class="md:flex md:space-x-8 mb-16">
                <div class="md:w-1/3">
                    <img src="https://placehold.co/400x500/10b981/ffffff?text=Foto+Kepala" alt="Foto Kepala BSILHK" class="w-full rounded-lg shadow-lg">
                </div>
                <div class="md:w-2/3 flex flex-col justify-center mt-8 md:mt-0">
                    <h3 class="text-3xl font-bold mb-4">Profil Kepala BSILHK</h3>
                    <p class="text-gray-300 mb-6">
                        [Nama Kepala BSILHK] memiliki pengalaman bertahun-tahun dalam bidang lingkungan dan kehutanan. Dengan kepemimpinan yang visioner, ia mengarahkan BSILHK untuk menjadi garda terdepan dalam inovasi dan standarisasi.
                    </p>
                    <a href="#" class="bg-green-600 text-white font-semibold py-3 px-8 rounded-full self-start hover:bg-green-700 transition duration-300">Baca Selengkapnya</a>
                </div>
            </div>

            <!-- Kabar BSI -->
            <h2 class="text-3xl font-bold text-center mb-12">Kabar BSI</h2>
            <div class="relative w-full overflow-hidden">
                <div id="kabar-bsi-slider" class="flex transition-transform duration-500 ease-in-out">
                    <!-- Slide 1 -->
                    <div class="w-full flex-shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
                        <!-- Berita 1 -->
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Kabar+BSI+1" alt="Berita 1" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Kabar BSI 1</h4>
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2">
                                    Deskripsi singkat kabar BSI pertama.
                                </p>
                            </div>
                        </div>
                        <!-- Berita 2 -->
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Kabar+BSI+2" alt="Berita 2" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Kabar BSI 2</h4>
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2">
                                    Deskripsi singkat kabar BSI kedua.
                                </p>
                            </div>
                        </div>
                        <!-- Berita 3 -->
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Kabar+BSI+3" alt="Berita 3" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Kabar BSI 3</h4>
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2">
                                    Deskripsi singkat kabar BSI ketiga.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 2 (contoh slide kedua) -->
                    <div class="w-full flex-shrink-0 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 p-4">
                        <!-- Berita 4 -->
                        <div class="bg-white text-gray-900 rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Kabar+BSI+4" alt="Berita 4" class="w-full h-40 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Kabar BSI 4</h4>
                                <p class="text-sm text-gray-600 line-clamp-3 mt-2">
                                    Deskripsi singkat kabar BSI keempat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Kontrol Navigasi Slider -->
                <button id="prev-kabar-bsi-slide" class="absolute top-1/2 left-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button id="next-kabar-bsi-slide" class="absolute top-1/2 right-4 transform -translate-y-1/2 text-white p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- 8. Testimoni & Galeri Video (dengan background pulau) -->
    <section id="testimoni-video" class="my-16 relative bg-cover bg-center py-24" style="background-image: url('https://placehold.co/1920x1080/0d9488/ffffff?text=Pulau+Indonesia');">
        <div class="absolute inset-0 bg-black opacity-60"></div>
        <div class="container mx-auto px-6 relative z-10 text-white">
            <!-- Testimoni -->
            <h2 class="text-3xl font-bold text-center mb-12">Testimoni</h2>
            <div class="flex flex-col md:flex-row justify-center space-y-8 md:space-y-0 md:space-x-8 mb-16">
                <!-- Testimoni 1 -->
                <div class="bg-gray-800 bg-opacity-70 p-6 rounded-lg shadow-lg max-w-lg">
                    <p class="italic text-lg mb-4">
                        "BSILHK telah memberikan dampak nyata dalam mendukung standarisasi lingkungan. Layanan mereka sangat profesional dan membantu."
                    </p>
                    <p class="font-semibold">- Nama Pengguna 1</p>
                </div>
                <!-- Testimoni 2 -->
                <div class="bg-gray-800 bg-opacity-70 p-6 rounded-lg shadow-lg max-w-lg">
                    <p class="italic text-lg mb-4">
                        "Informasi yang disediakan di website sangat lengkap dan mudah diakses. Sangat membantu pekerjaan kami."
                    </p>
                    <p class="font-semibold">- Nama Pengguna 2</p>
                </div>
            </div>

            <!-- Galeri Video -->
            <h2 class="text-3xl font-bold text-center mb-12">Galeri Video</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="block group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/600x400/10b981/ffffff?text=Video+1" alt="Thumbnail Video 1" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8 5v14l11-7z"></path></svg>
                    </div>
                </a>
                <!-- Video 2 -->
                <a href="https://www.youtube.com/watch?v=P_V5q13oHsw" target="_blank" class="block group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/600x400/10b981/ffffff?text=Video+2" alt="Thumbnail Video 2" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8 5v14l11-7z"></path></svg>
                    </div>
                </a>
                <!-- Video 3 -->
                <a href="https://www.youtube.com/watch?v=F_fP9aB-7cM" target="_blank" class="block group relative overflow-hidden rounded-lg shadow-lg">
                    <img src="https://placehold.co/600x400/10b981/ffffff?text=Video+3" alt="Thumbnail Video 3" class="w-full h-48 object-cover transform group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg class="w-16 h-16 text-white" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M8 5v14l11-7z"></path></svg>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 9. Berita KLHK & Berita Lainnya (kotak hitam) -->
    <section id="berita-klhk" class="my-16 bg-gray-900 text-white py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">Berita KLHK</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Berita 1-4 -->
                @for ($i = 1; $i <= 4; $i++)
                    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                        <img src="https://placehold.co/600x400/10b981/ffffff?text=Berita+KLHK+{{ $i }}" alt="Berita KLHK {{ $i }}" class="w-full h-40 object-cover">
                        <div class="p-4">
                            <h4 class="font-semibold text-lg mb-2">Judul Berita KLHK {{ $i }}</h4>
                            <p class="text-sm text-gray-300 line-clamp-3">Deskripsi singkat dari berita KLHK ke-{{ $i }}.</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="text-center mb-16">
                <a href="#" class="text-green-600 font-medium hover:underline text-lg">Selengkapnya</a>
            </div>
            <h2 class="text-3xl font-bold text-center mb-8">Berita Lainnya</h2>
            <!-- Bagian ini bisa diisi dengan konten berita lainnya -->
        </div>
    </section>

    <!-- 10. Layanan Publik -->
    <section id="layanan-publik" class="my-16 container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Layanan Publik</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
            <!-- Layanan 1-4 -->
            @for ($i = 1; $i <= 4; $i++)
                <div class="p-6 rounded-lg shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
                    <img src="https://placehold.co/200x200/10b981/ffffff?text=Gambar+{{ $i }}" alt="Layanan Publik {{ $i }}" class="mx-auto mb-4 w-32 h-32 object-cover rounded-full">
                    <h4 class="font-semibold text-xl">Layanan {{ $i }}</h4>
                    <p class="text-gray-600 mt-2">Keterangan singkat tentang layanan publik ke-{{ $i }}.</p>
                </div>
            @endfor
        </div>
    </section>

    <!-- 11. PPID Menu, Agenda BSILHK, & Partner -->
    <section id="footer-menu" class="my-16">
        <!-- PPID Menu dengan background pulau -->
        <div id="ppid-menu" class="relative bg-cover bg-center py-24 mb-16" style="background-image: url('https://placehold.co/1920x1080/0d9488/ffffff?text=Pulau+Indonesia');">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="container mx-auto px-6 relative z-10 text-white text-center">
                <h2 class="text-4xl font-bold">PPID Menu</h2>
                <p class="mt-4 text-lg">Informasi dan layanan PPID BSILHK.</p>
                <!-- Tambahkan link menu PPID di sini -->
            </div>
        </div>

        <!-- Agenda BSILHK (kotak hitam) -->
        <div id="agenda-bsilhk" class="bg-gray-900 text-white py-16 mb-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center mb-12">Agenda BSILHK</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <!-- Agenda 1-3 -->
                    @for ($i = 1; $i <= 3; $i++)
                        <div class="rounded-lg shadow-lg overflow-hidden">
                            <img src="https://placehold.co/600x400/10b981/ffffff?text=Agenda+{{ $i }}" alt="Agenda {{ $i }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h4 class="font-semibold text-lg">Judul Agenda {{ $i }}</h4>
                                <p class="text-sm text-gray-300 mt-2">Deskripsi singkat agenda BSILHK ke-{{ $i }}.</p>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="text-center mt-8">
                    <a href="#" class="text-green-600 font-medium hover:underline text-lg">Selengkapnya</a>
                </div>
            </div>
        </div>

        <!-- Partner -->
        <div id="partner" class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Partner</h2>
            <div class="text-center text-gray-600">
                <!-- Bagian ini bisa diisi dengan logo partner -->
                Daftar logo partner akan ditampilkan di sini.
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-300 py-8">
        <div class="container mx-auto text-center px-4">
            &copy; {{ date('Y') }} BSILHK. Hak Cipta Dilindungi.
        </div>
    </footer>

    <!-- JavaScript for sliders -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Slider untuk Berita Utama
            const heroSlider = document.getElementById('hero-slider');
            const prevHeroSlideButton = document.getElementById('prev-slide');
            const nextHeroSlideButton = document.getElementById('next-slide');
            let currentHeroIndex = 0;
            const heroSlides = heroSlider.children.length;

            function updateHeroSlider() {
                heroSlider.style.transform = `translateX(-${currentHeroIndex * 100}%)`;
            }

            prevHeroSlideButton.addEventListener('click', () => {
                currentHeroIndex = (currentHeroIndex - 1 + heroSlides) % heroSlides;
                updateHeroSlider();
            });

            nextHeroSlideButton.addEventListener('click', () => {
                currentHeroIndex = (currentHeroIndex + 1) % heroSlides;
                updateHeroSlider();
            });

            // Slider untuk Berita Standar
            const beritaStandarSlider = document.getElementById('berita-standar-slider');
            const prevBeritaStandarSlideButton = document.getElementById('prev-berita-standar-slide');
            const nextBeritaStandarSlideButton = document.getElementById('next-berita-standar-slide');
            let currentBeritaStandarIndex = 0;
            const beritaStandarSlides = beritaStandarSlider.children.length;

            function updateBeritaStandarSlider() {
                beritaStandarSlider.style.transform = `translateX(-${currentBeritaStandarIndex * 100}%)`;
            }

            prevBeritaStandarSlideButton.addEventListener('click', () => {
                currentBeritaStandarIndex = (currentBeritaStandarIndex - 1 + beritaStandarSlides) % beritaStandarSlides;
                updateBeritaStandarSlider();
            });

            nextBeritaStandarSlideButton.addEventListener('click', () => {
                currentBeritaStandarIndex = (currentBeritaStandarIndex + 1) % beritaStandarSlides;
                updateBeritaStandarSlider();
            });

            // Slider untuk Kabar BSI
            const kabarBsiSlider = document.getElementById('kabar-bsi-slider');
            const prevKabarBsiSlideButton = document.getElementById('prev-kabar-bsi-slide');
            const nextKabarBsiSlideButton = document.getElementById('next-kabar-bsi-slide');
            let currentKabarBsiIndex = 0;
            const kabarBsiSlides = kabarBsiSlider.children.length;

            function updateKabarBsiSlider() {
                kabarBsiSlider.style.transform = `translateX(-${currentKabarBsiIndex * 100}%)`;
            }

            prevKabarBsiSlideButton.addEventListener('click', () => {
                currentKabarBsiIndex = (currentKabarBsiIndex - 1 + kabarBsiSlides) % kabarBsiSlides;
                updateKabarBsiSlider();
            });

            nextKabarBsiSlideButton.addEventListener('click', () => {
                currentKabarBsiIndex = (currentKabarBsiIndex + 1) % kabarBsiSlides;
                updateKabarBsiSlider();
            });

        });
    </script>
@endsection
