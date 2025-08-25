@extends('layouts.admin')
@section('title', 'Tambah Video Baru')
@section('content')
<div class="container-fluid p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Video Baru</h1>
    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.videos._form')
        </form>
    </div>
</div>
@endsection