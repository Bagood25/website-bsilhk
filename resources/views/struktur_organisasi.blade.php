@extends('layouts.app') {{-- Pastikan ini adalah layout utama Anda --}}

@section('title', 'Struktur Organisasi')

@section('content')
    {{-- Bagian Header dengan Latar Belakang Gambar Hutan --}}
    <div class="relative py-16 px-4 text-center text-white" style="background-image: url('{{ asset('images/background hutan.jpg') }}'); background-size: cover; background-position: center;">
        {{-- Lapisan Overlay Gelap untuk Keterbacaan Teks --}}
        <div class="absolute inset-0 bg-black opacity-50"></div>
        
        {{-- Konten Teks di Atas Overlay --}}
        <div class="relative z-10">
            <h1 class="text-4xl font-extrabold sm:text-5xl">Struktur Organisasi</h1>
            {{-- PERUBAHAN DI SINI: Menambahkan breadcrumb "Tentang P2SEMH" --}}
            <p class="mt-2 text-lg text-gray-300">
                <a href="{{ url('/') }}" class="hover:underline">Beranda</a> &gt; 
                <a href="#" class="hover:underline">Tentang P2SEMH</a> &gt; 
                <span class="font-medium">Struktur Organisasi</span>
            </p>
        </div>
    </div>

    <main class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white p-6 sm:p-8 rounded-lg shadow-lg">
                {{-- PERUBAHAN DI SINI: Mengganti BSILHK menjadi P2SEMH --}}
                <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
                    Bagan Struktur Organisasi P2SEMH
                </h2>
                
                <div class="flex justify-center">
                    {{-- Pastikan nama file gambar sudah benar --}}
                    <img src="{{ asset('images/struktur organisasi.png') }}" alt="Bagan Struktur Organisasi P2SEMH" class="w-full h-auto rounded-md shadow-md">
                </div>
            </div>
        </div>
    </main>
@endsection