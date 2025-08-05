@extends('layouts.app')

@section('title', 'PERTIKAWAN Subcamp 3 BSILHK')

@section('content')
<main class="container mx-auto my-8 px-4">
    <div class="bg-white rounded-lg shadow-lg p-6 md:p-8 lg:p-12">
        <!-- Image placeholder for the article -->
        <div class="relative w-full h-96 overflow-hidden rounded-lg mb-6">
            <img src="https://placehold.co/1920x1080/0d9488/ffffff?text=Gambar+Artikel" alt="Gambar Artikel" class="w-full h-full object-cover">
        </div>
        
        <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight mb-4">
            PERTIKAWAN Subcamp 3 BSILHK: Pengalaman Seru Belajar Seputar Standar Lingkungan Hidup dan Kehutanan
        </h1>
        <div class="flex items-center text-gray-500 text-sm mb-8">
            <!-- Publication date -->
            <span class="mr-4">
                <svg class="h-4 w-4 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                Kamis, 15 September 2024
            </span>
            <!-- Author -->
            <span class="mr-4">
                <svg class="h-4 w-4 inline-block mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
                Penulis: Admin
            </span>
        </div>

        <article class="prose max-w-none text-gray-700">
            <p>
                <strong>Bogor (15/9) -</strong> Kwartir Cabang X Bogor mengadakan PERTIKAWAN Subcamp 3 di Pusat Konservasi Tumbuhan Kebun Raya Cibinong, bekerja sama dengan BSILHK. Acara ini merupakan ajang bagi Pramuka Penggalang dan Penegak untuk menguji kemampuan dan menambah wawasan di bidang lingkungan hidup dan kehutanan.
            </p>
            <p>
                Kegiatan ini diikuti oleh 250 peserta dari berbagai sekolah di wilayah Bogor. Selama tiga hari, mereka mengikuti berbagai kegiatan seru, seperti diskusi tentang standar LHK, penanaman pohon, dan praktik konservasi.
            </p>
            <p>
                Kepala BSILHK, Dr. Ir. Sulis Setiawati, M.Sc., dalam sambutannya menekankan pentingnya peran generasi muda dalam menjaga kelestarian lingkungan. "Generasi muda adalah agen perubahan. Dengan pemahaman yang baik tentang standar lingkungan dan kehutanan, mereka bisa menjadi pionir dalam mewujudkan Indonesia yang lestari," ujarnya.
            </p>
            <p>
                Peserta juga berkesempatan untuk berinteraksi langsung dengan para peneliti dari BSILHK, belajar tentang berbagai instrumen dan metode standar yang digunakan untuk mengukur kualitas lingkungan. Salah satu peserta, Siti Nurmala (16), mengungkapkan kegembiraannya. "Saya sangat senang bisa ikut acara ini. Selain seru, saya juga jadi tahu banyak hal baru tentang lingkungan. Ternyata, menjaga alam itu tidak sesulit yang saya bayangkan," katanya.
            </p>
            <p>
                Kegiatan ditutup dengan upacara penutupan dan pembagian sertifikat. Diharapkan, kegiatan seperti ini dapat terus diselenggarakan untuk menumbuhkan kesadaran lingkungan di kalangan generasi muda.
            </p>
        </article>
    </div>
</main>
@endsection
