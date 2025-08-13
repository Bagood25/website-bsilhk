@extends('layouts.admin')

@section('title', 'Edit Data Unduhan')

@section('content')
    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Edit Data Unduhan</h2>

    <div class="bg-white overflow-hidden shadow-sm rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <form action="{{ route('admin.downloads.update', $download) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- Memanggil komponen form, dengan variabel is_edit untuk logika di dalam form --}}
                @include('admin.downloads._form', ['is_edit' => true])
            </form>
        </div>
    </div>
@endsection