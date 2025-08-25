@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6" role="alert">
        <strong class="font-bold">Oops! Terjadi kesalahan.</strong>
        <ul class="mt-3 list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-4">
    <label for="judul" class="block text-gray-700 font-bold mb-2">Judul Video</label>
    <input type="text" id="judul" name="judul" value="{{ old('judul', $video->judul ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
</div>

<div class="mb-6">
    <label for="youtube_url" class="block text-gray-700 font-bold mb-2">Link YouTube</label>
    <input type="url" id="youtube_url" name="youtube_url" value="{{ old('youtube_url', $video->youtube_url ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" placeholder="https://www.youtube.com/watch?v=xxxx" required>
</div>

<div class="flex items-center justify-end space-x-4">
    <a href="{{ route('admin.videos.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded">Batal</a>
    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
</div>