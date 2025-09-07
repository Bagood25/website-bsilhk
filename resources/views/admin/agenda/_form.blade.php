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
    <label for="judul" class="block text-gray-700 font-bold mb-2">Judul Agenda</label>
    <input type="text" id="judul" name="judul" value="{{ old('judul', $agenda->judul ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
</div>

<div class="mb-4">
    <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
    <textarea id="deskripsi" name="deskripsi" rows="5" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ old('deskripsi', $agenda->deskripsi ?? '') }}</textarea>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
    <div>
        {{-- Diubah menjadi tanggal_mulai --}}
        <label for="tanggal_mulai" class="block text-gray-700 font-bold mb-2">Tanggal Mulai</label>
        <input type="date" id="tanggal_mulai" name="tanggal_mulai" value="{{ old('tanggal_mulai', isset($agenda) ? \Carbon\Carbon::parse($agenda->tanggal_mulai)->format('Y-m-d') : '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
    </div>
     <div>
        {{-- Input baru untuk tanggal_selesai --}}
        <label for="tanggal_selesai" class="block text-gray-700 font-bold mb-2">Tanggal Selesai (Opsional)</label>
        <input type="date" id="tanggal_selesai" name="tanggal_selesai" value="{{ old('tanggal_selesai', isset($agenda) && $agenda->tanggal_selesai ? \Carbon\Carbon::parse($agenda->tanggal_selesai)->format('Y-m-d') : '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <p class="text-xs text-gray-600 mt-1">Kosongkan jika acara hanya satu hari.</p>
    </div>
</div>

<div class="mb-4">
    <label for="lokasi" class="block text-gray-700 font-bold mb-2">Lokasi</label>
    <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi', $agenda->lokasi ?? '') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
</div>


<div class="mb-6">
    <label for="gambar" class="block text-gray-700 font-bold mb-2">Gambar (Opsional)</label>
    <input type="file" id="gambar" name="gambar" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    @if(isset($agenda) && $agenda->gambar)
        <div class="mt-4">
            <p class="text-sm text-gray-600">Gambar saat ini:</p>
            <img src="{{ asset('storage/' . $agenda->gambar) }}" alt="Gambar saat ini" class="w-40 h-auto mt-2 rounded-md shadow-sm">
        </div>
    @endif
</div>

<div class="flex items-center justify-end space-x-4">
     <a href="{{ route('admin.agenda.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Batal
    </a>
    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        Simpan Agenda
    </button>
</div>