@extends('layouts.admin')

@section('content')
<div class="container mx-auto mt-10 p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen Berita</h1>
        <a href="{{ route('admin.berita.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            + Tambah Berita
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Judul
                    </th>
                    {{-- ====================================================== --}}
                    {{-- == PERUBAHAN 1: TAMBAH HEADER KATEGORI == --}}
                    {{-- ====================================================== --}}
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Kategori
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Penulis
                    </th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($beritas as $berita)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $berita->judul }}</p>
                        </td>
                        
                        {{-- ====================================================== --}}
                        {{-- == PERUBAHAN 2: TAMPILKAN DATA KATEGORI == --}}
                        {{-- ====================================================== --}}
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            @if($berita->kategori == 'berita-kehutanan')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Kehutanan
                                </span>
                            @elseif($berita->kategori == 'berita-p2semh')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    P2SEMH
                                </span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                    Lainnya
                                </span>
                            @endif
                        </td>
                        
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <p class="text-gray-900 whitespace-no-wrap">{{ $berita->user->name }}</p>
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                            <div class="flex justify-center items-center space-x-2">
                                <a href="{{ route('admin.berita.edit', $berita) }}" class="text-yellow-600 hover:text-yellow-900 font-semibold">Edit</a>
                                <form action="{{ route('admin.berita.destroy', $berita) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        {{-- ====================================================== --}}
                        {{-- == PERUBAHAN 3: UBAH COLSPAN == --}}
                        {{-- ====================================================== --}}
                        <td colspan="5" class="text-center py-10 text-gray-500">
                            Tidak ada berita yang ditemukan.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $beritas->links() }}
    </div>
</div>
@endsection