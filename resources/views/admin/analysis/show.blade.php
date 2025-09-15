@extends('layouts.admin') {{-- Pastikan nama layout ini sesuai dengan template admin Anda --}}

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hasil Analisis untuk ID: {{ $analysis->id }}</h1>
        <a href="{{ route('admin.analysis.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali ke Daftar
        </a>
    </div>

    <div class="card bg-info text-white shadow mb-4">
        <div class="card-body">
            <h5 class="card-title"><i class="fas fa-info-circle"></i> Informasi</h5>
            <p class="card-text">
                Berikut adalah hasil visualisasi dari analisis file <strong>{{ $analysis->original_filename }}</strong>.
                Gambar di bawah ini diambil secara langsung dari Google Drive. Jika gambar tidak muncul, pastikan proses di Google Colab sudah selesai dan ID yang dimasukkan sudah benar.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Grafik Analisis Sentimen</h6>
                    <i class="fas fa-smile-beam fa-2x text-gray-300"></i>
                </div>
                <div class="card-body text-center">
                    {{-- PERBAIKAN: Menggunakan route() untuk memanggil gambar --}}
                    <img src="{{ route('admin.analysis.image', ['analysis' => $analysis, 'type' => 'sentiment']) }}" class="img-fluid" alt="Memuat Grafik Sentimen..." onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
                    <div style="display:none;" class="alert alert-warning mt-3">
                        <p><strong>Grafik sentimen belum tersedia.</strong></p>
                        <small>Ini bisa terjadi karena:<br>1. Proses di Colab belum dijalankan/selesai.<br>2. ID Analisis yang dimasukkan di Colab salah.<br>3. File belum tersinkronisasi di Google Drive.</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Distribusi Topik</h6>
                    <i class="fas fa-tags fa-2x text-gray-300"></i>
                </div>
                <div class="card-body text-center">
                    {{-- PERBAIKAN: Menggunakan route() untuk memanggil gambar --}}
                    <img src="{{ route('admin.analysis.image', ['analysis' => $analysis, 'type' => 'topic']) }}" class="img-fluid" alt="Memuat Grafik Topik..." onerror="this.style.display='none'; this.nextElementSibling.style.display='block'">
                    <div style="display:none;" class="alert alert-warning mt-3">
                       <p><strong>Grafik topik belum tersedia.</strong></p>
                       <small>Ini bisa terjadi karena:<br>1. Proses di Colab belum dijalankan/selesai.<br>2. ID Analisis yang dimasukkan di Colab salah.<br>3. File belum tersinkronisasi di Google Drive.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection