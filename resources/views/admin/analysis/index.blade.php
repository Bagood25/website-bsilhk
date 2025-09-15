@extends('layouts.admin') {{-- Pastikan nama layout ini sesuai dengan template admin Anda --}}

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Analisis Data Instagram</h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }} <br>
            <hr>
            <p class="mb-0"><strong>ID Analisis Baru Anda adalah: {{ session('new_analysis_id') }}</strong>. Harap gunakan ID ini di Google Colab.</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><span class="badge badge-primary mr-2">1</span>Buat Catatan Analisis</h6>
                </div>
                <div class="card-body">
                    <p>Upload file CSV Anda di sini untuk mendapatkan ID Analisis. ID ini akan digunakan di Google Colab untuk menyimpan hasil.</p>
                    <form action="{{ route('admin.analysis.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="file">Pilih File CSV:</label>
                            <input type="file" name="file" id="file" class="form-control-file" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">
                            <i class="fas fa-id-card-alt fa-sm text-white-50"></i> Buat Catatan & Dapatkan ID
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-warning"><span class="badge badge-warning mr-2">2</span>Proses di Google Colab</h6>
                </div>
                <div class="card-body">
                    <p>Setelah mendapatkan ID dari Langkah 1, klik link di bawah untuk membuka notebook analisis.</p>
                    <p>Ikuti instruksi di dalam notebook tersebut untuk mengupload file dan menjalankan proses analisis.</p>
                    <a href="{{ $colabLink }}" target="_blank" class="btn btn-warning btn-icon-split mt-3">
                        <span class="icon text-white-50">
                            <i class="fas fa-rocket"></i>
                        </span>
                        <span class="text">Buka Google Colab</span>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success"><span class="badge badge-success mr-2">3</span>Lihat Riwayat & Hasil Analisis</h6>
        </div>
        <div class="card-body">
            <p>Setelah proses di Colab selesai, klik "Lihat Hasil" pada tabel di bawah untuk melihat visualisasi data.</p>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama File Asli</th>
                            <th>Tanggal Dibuat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($analyses as $analysis)
                        <tr>
                            <td>{{ $analysis->id }}</td>
                            <td>{{ $analysis->original_filename }}</td>
                            <td>{{ $analysis->created_at->format('d M Y, H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.analysis.show', $analysis) }}" class="btn btn-success btn-sm">
                                    <i class="fas fa-eye"></i> Lihat Hasil
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">Belum ada riwayat analisis.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- Untuk menampilkan navigasi halaman jika data banyak --}}
                <div class="d-flex justify-content-center">
                    {{ $analyses->links() }}
                </div>
            </div>
        </div>
    </div>

</div>
@endsection