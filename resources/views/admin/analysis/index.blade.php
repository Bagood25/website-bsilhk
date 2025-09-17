@extends('layouts.admin')
@section('title', 'Mulai Analisis Data')

@section('content')
<div class="container-fluid p-6">
    {{-- Header Halaman --}}
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="text-3xl font-bold text-gray-800">Analisis Data via Colab</h1>
    </div>

    {{-- Notifikasi --}}
    @if(session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 shadow-sm rounded-lg" role="alert">
            <p class="font-bold">Gagal!</p>
            <p>{{ session('error') }}</p>
        </div>
    @endif
    
    @if(isset($successMessage))
         <div class="bg-teal-100 border-l-4 border-teal-500 text-teal-700 p-4 mb-6 shadow-sm rounded-lg" role="alert">
            <p class="font-bold">Berhasil!</p>
            <p>{{ $successMessage }}</p>
        </div>
    @endif

    {{-- Form Upload --}}
    <div class="bg-white rounded-lg shadow-md border-l-4 border-blue-500 mb-6">
        <div class="p-5">
            <div class="flex items-center">
                <div class="flex-shrink-0 bg-blue-500 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold text-lg">1</div>
                <div class="ml-4">
                    <h6 class="text-lg font-bold text-gray-800">Unggah File CSV</h6>
                    <p class="text-sm text-gray-600">Unggah file `.csv` Anda untuk diperiksa.</p>
                </div>
            </div>
            <div class="mt-4">
                <form action="{{ route('admin.analysis.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="file" id="file" class="custom-file-input" required>
                            <label class="custom-file-label" for="file">Pilih file...</label>
                        </div>
                    </div>
                    <button type="submit" class="mt-3 inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-300">
                        <i class="fas fa-upload mr-2"></i>
                        Unggah dan Periksa Kolom
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    {{-- Hasil Pemeriksaan & Link ke Colab --}}
    @if(isset($csvHeaders))
    <div class="bg-white rounded-lg shadow-md border-l-4 border-green-500">
        <div class="p-5">
            <div class="flex items-center mb-4">
                <div class="flex-shrink-0 bg-green-500 rounded-full h-10 w-10 flex items-center justify-center text-white font-bold text-lg">2</div>
                <div class="ml-4">
                    <h6 class="text-lg font-bold text-gray-800">Hasil Pemeriksaan & Lanjut ke Colab</h6>
                </div>
            </div>
            
            <h5 class="font-semibold text-gray-700">Kolom yang Ditemukan:</h5>
            <div class="flex flex-wrap gap-2 my-3">
                @foreach($csvHeaders as $header)
                    <span class="bg-gray-200 text-gray-800 text-sm font-medium px-3 py-1 rounded-full">{{ $header }}</span>
                @endforeach
            </div>
            
            <p class="text-gray-700 mt-4">Pemeriksaan selesai. Sekarang, silakan lanjutkan proses analisis di Google Colab.</p>
            <a href="{{ $colabLink }}" target="_blank" class="mt-3 inline-flex items-center px-4 py-2 bg-yellow-500 text-white font-semibold rounded-lg hover:bg-yellow-600 transition duration-300">
                <i class="fas fa-rocket mr-2"></i>
                Buka Google Colab
            </a>
        </div>
    </div>
    @endif
</div>

{{-- Script untuk menampilkan nama file di input --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const fileInput = document.querySelector('.custom-file-input');
    if (fileInput) {
        fileInput.addEventListener('change', function (e) {
            const fileName = e.target.files[0] ? e.target.files[0].name : 'Pilih file...';
            const nextSibling = e.target.nextElementSibling;
            if (nextSibling) {
                nextSibling.innerText = fileName;
            }
        });
    }
});
</script>
@endsection