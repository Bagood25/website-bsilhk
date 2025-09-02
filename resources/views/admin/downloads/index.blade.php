@extends('layouts.admin')

@section('title', 'Kelola ' . $title)

@section('content')
<div class="container-fluid p-6">
    {{-- Header Halaman --}}
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Kelola {{ $title }}</h1>
            <p class="text-sm text-gray-600 mt-1">Kelola semua dokumen dalam kategori {{ strtolower($title) }}.</p>
        </div>
        <a href="{{ route('admin.downloads.create', ['kategori' => $kategori]) }}" class="mt-4 sm:mt-0 inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-bold rounded-lg shadow-md transition duration-300">
            <i class="fas fa-plus mr-2"></i>
            Tambah Dokumen Baru
        </a>
    </div>

    {{-- Notifikasi Sukses --}}
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
            <p class="font-bold">Sukses</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    {{-- Konten Utama (Tabel) --}}
    <div class="bg-white shadow-lg rounded-lg overflow-x-auto">
        <table class="min-w-full leading-normal">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        #
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Judul Dokumen
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Deskripsi
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($downloads as $index => $item)
                    <tr class="hover:bg-gray-50">
                        <td class="px-5 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $downloads->firstItem() + $index }}
                        </td>
                        <td class="px-5 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                            {{ $item->judul }}
                        </td>
                        <td class="px-5 py-4 text-sm text-gray-600">
                            {{ Str::limit($item->deskripsi, 70, '...') }}
                        </td>
                        <td class="px-5 py-4 whitespace-nowrap text-sm font-medium text-center">
                            <div class="flex justify-center items-center space-x-4">
                                <a href="{{ asset('storage/downloads/' . $item->nama_file) }}" target="_blank" class="text-blue-600 hover:text-blue-900" title="Lihat/Unduh File">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('admin.downloads.edit', $item) }}" class="text-yellow-600 hover:text-yellow-900" title="Edit">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('admin.downloads.destroy', $item) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini?');" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900" title="Hapus">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center py-10">
                            <div class="flex flex-col items-center">
                                <i class="fas fa-box-open text-4xl text-gray-300 mb-3"></i>
                                <p class="text-gray-500">Belum ada data di kategori ini.</p>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        
        {{-- Navigasi Paginasi --}}
        @if ($downloads->hasPages())
            <div class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between">
                {{ $downloads->links() }}
            </div>
        @endif
    </div>
</div>
@endsection