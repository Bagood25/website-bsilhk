@extends('layouts.admin')
@section('content')
<div class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-semibold">Edit Partner</h2>
    <form action="{{ route('admin.partners.update', $partner) }}" method="POST" enctype="multipart/form-data" class="mt-6 bg-white p-6 rounded shadow-md">
        @csrf
        @method('PUT')
        @include('admin.partners._form')
    </form>
</div>
@endsection