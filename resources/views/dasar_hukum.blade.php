@extends('layouts.app')

@section('title', 'Dasar Hukum')

@section('content')
<main>
    <section class="relative text-white bg-cover bg-center" style="background-image: url('{{ asset('images/background hutan.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto px-6 py-16 text-center relative z-10">
            <h1 class="text-4xl font-bold text-white">Dasar Hukum</h1>
            <p class="mt-2 text-lg text-gray-300">
                <a href="{{ url('/') }}" class="hover:text-white transition-colors duration-200">Beranda</a>
                <span class="mx-2">></span>
                <span>Dasar Hukum</span>
            </p>
        </div>
    </section>

    <section class="py-16 lg:py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            
            {{-- =============================================== --}}
            {{-- ==      KOTAK PEMBUNGKUS UTAMA DIMULAI       == --}}
            {{-- =============================================== --}}
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-200">
            
                {{-- Judul Pengantar --}}
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-gray-800">Peraturan Mengenai P2SEMH</h2>
                    <p class="mt-2 text-gray-600">Berikut adalah daftar landasan hukum yang menjadi acuan dalam pelaksanaan tugas dan fungsi kami.</p>
                </div>

                {{-- Catatan Informasi Download --}}
                <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4 rounded-md mb-12" role="alert">
                    <p class="font-bold">Informasi</p>
                    <p>Seluruh dokumen dasar hukum ini dapat diunduh melalui menu <a href="{{ route('download.kategori', 'peraturan') }}" class="font-semibold hover:underline">Download > Peraturan</a>.</p>
                </div>

                <div class="space-y-8">

                    {{-- Kotak 1: Undang-Undang --}}
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Undang-Undang</h3>
                        <ol class="list-decimal list-inside space-y-2 text-gray-700">
                            <li>Undang-Undang Nomor 11 Tahun 2020 tentang Cipta Kerja</li>
                            <li>Undang-Undang Nomor 41 Tahun 1999 tentang Kehutanan</li>
                        </ol>
                    </div>

                    {{-- Kotak 2: Peraturan Pemerintah --}}
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Peraturan Pemerintah</h3>
                        <ol class="list-decimal list-inside space-y-2 text-gray-700">
                            <li>Peraturan Pemerintah Nomor 23 Tahun 2021 tentang Penyelenggaraan Kehutanan</li>
                            <li>Peraturan Pemerintah Nomor 24 Tahun 2021 tentang Tata Cara Pengenaan Sanksi Administratif dan Tata Cara Penerimaan Negara Bukan Pajak yang Berasal dari Denda Administratif di Bidang Kehutanan</li>
                        </ol>
                    </div>

                    {{-- Kotak 3: Peraturan Presiden --}}
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Peraturan Presiden</h3>
                        <ol class="list-decimal list-inside space-y-2 text-gray-700">
                            <li>Peraturan Presiden Nomor 24 Tahun 2023 tentang Rencana Induk Pembangunan Rendah Karbon dan Berketahanan Iklim Nasional Tahun 2021-2050</li>
                        </ol>
                    </div>

                    {{-- Kotak 4: Peraturan Menteri --}}
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Peraturan Menteri</h3>
                        <ol class="list-decimal list-inside space-y-2 text-gray-700">
                            <li>Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor 21 Tahun 2022 tentang Tata Organisasi dan Tata Kerja Unit Pelaksana Teknis Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan</li>
                            <li>Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor 8 Tahun 2021 tentang Tata Hutan dan Penyusunan Rencana Pengelolaan Hutan, Serta Pemanfaatan Hutan di Hutan Lindung dan Hutan Produksi</li>
                            <li>Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor 9 Tahun 2021 tentang Pengelolaan Perhutanan Sosial</li>
                            <li>Peraturan Menteri Lingkungan Hidup dan Kehutanan Nomor 7 Tahun 2021 tentang Perencanaan Kehutanan, Perubahan Peruntukan Kawasan Hutan dan Perubahan Fungsi Kawasan Hutan, Serta Penggunaan Kawasan Hutan</li>
                        </ol>
                    </div>

                    {{-- Kotak 5: Keputusan Kepala Badan --}}
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Keputusan Kepala Badan</h3>
                        <ol class="list-decimal list-inside space-y-2 text-gray-700">
                            <li>Keputusan Kepala Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan Nomor SK.1/BSILHK/SET/PEG.3/1/2023 tentang Peta Proses Bisnis di Lingkungan Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan</li>
                            <li>Keputusan Kepala Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan Nomor SK.64/BSILHK/SET.1/PEG.3/7/2022 tentang Standar Operasional Prosedur di Lingkungan Badan Standardisasi Instrumen Lingkungan Hidup dan Kehutanan</li>
                        </ol>
                    </div>

                </div>
            </div>
            {{-- =============================================== --}}
            {{-- ==       KOTAK PEMBUNGKUS UTAMA SELESAI      == --}}
            {{-- =============================================== --}}

        </div>
    </section>
</main>
@endsection