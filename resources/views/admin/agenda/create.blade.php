@extends('layouts.admin')
@section('title', 'Tambah Agenda Baru')
@section('content')
<div class="container-fluid p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Tambah Agenda Baru</h1>
    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.agenda.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('admin.agenda._form')
        </form>
    </div>
</div>
@endsection