@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-4">
    <label for="name" class="block text-gray-700 font-bold mb-2">Nama Website/Partner:</label>
    <input type="text" name="name" id="name" value="{{ old('name', $partner->name) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required>
</div>
<div class="mb-4">
    <label for="url" class="block text-gray-700 font-bold mb-2">URL (Link):</label>
    <input type="url" name="url" id="url" value="{{ old('url', $partner->url) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700" required placeholder="https://example.com">
</div>
<div class="mb-4">
    <label for="logo" class="block text-gray-700 font-bold mb-2">Logo:</label>
    <input type="file" name="logo" id="logo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700">
    @if($partner->logo)
        <img src="{{ asset('storage/' . $partner->logo) }}" alt="Current Logo" class="mt-4 w-32 h-32 object-contain">
    @endif
</div>
<div class="flex items-center justify-between">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
    <a href="{{ route('admin.partners.index') }}" class="text-gray-600">Batal</a>
</div>