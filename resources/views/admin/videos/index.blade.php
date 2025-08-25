@extends('layouts.admin')
@section('title', 'Manajemen Video')
@section('content')
<div class="container-fluid p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Manajemen Video</h1>
        <a href="{{ route('admin.videos.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">
            <i class="fas fa-plus mr-2"></i> Tambah Video
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="bg-white shadow-lg rounded-lg overflow-x-auto">
        <table class="min-w-full leading-normal">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold uppercase">Thumbnail</th>
                    <th class="px-5 py-3 border-b-2 text-left text-xs font-semibold uppercase">Judul</th>
                    <th class="px-5 py-3 border-b-2 text-center text-xs font-semibold uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($videos as $video)
                    @php
                        // Logika untuk mengambil ID video dari URL YouTube
                        preg_match('/(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $video->youtube_url, $matches);
                        $youtubeId = $matches[1] ?? null;
                    @endphp
                    <tr class="hover:bg-gray-50">
                        <td class="px-5 py-4 border-b">
                            @if($youtubeId)
                                <img src="https://img.youtube.com/vi/{{ $youtubeId }}/mqdefault.jpg" alt="{{ $video->judul }}" class="w-32 h-auto rounded">
                            @endif
                        </td>
                        <td class="px-5 py-4 border-b">{{ $video->judul }}</td>
                        <td class="px-5 py-4 border-b text-center">
                            <a href="{{ route('admin.videos.edit', $video) }}" class="text-yellow-600 hover:text-yellow-900 mr-4">Edit</a>
                            <form action="{{ route('admin.videos.destroy', $video) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus video ini?');" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-10">Tidak ada data video.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection