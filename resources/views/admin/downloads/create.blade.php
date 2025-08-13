@extends('layouts.admin')

@section('title', 'Tambah Data Unduhan')

@section('content')
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tambah Data Unduhan Baru</h2>

    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <form action="{{ route('admin.downloads.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Memanggil komponen form yang sama --}}
                @include('admin.downloads._form')
            </form>
        </div>
    </div>
@endsection