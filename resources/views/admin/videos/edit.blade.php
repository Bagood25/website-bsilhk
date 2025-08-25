@extends('layouts.admin')
@section('title', 'Edit Video')
@section('content')
<div class="container-fluid p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Video: {{ $video->judul }}</h1>
    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.videos.update', $video) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.videos._form', ['video' => $video])
        </form>
    </div>
</div>
@endsection