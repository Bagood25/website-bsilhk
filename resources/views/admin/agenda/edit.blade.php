@extends('layouts.admin')
@section('title', 'Edit Agenda')
@section('content')
<div class="container-fluid p-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Agenda: {{ $agenda->judul }}</h1>
    <div class="bg-white p-8 rounded-lg shadow-md">
        <form action="{{ route('admin.agenda.update', $agenda->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('admin.agenda._form')
        </form>
    </div>
</div>
@endsection