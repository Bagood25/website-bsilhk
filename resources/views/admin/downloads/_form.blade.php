@if ($errors->any())
    <div class="mb-6 p-4 bg-red-50 text-red-700 border border-red-200 rounded-lg">
        <strong class="font-bold">Oops! Terjadi kesalahan.</strong>
        <ul class="list-disc list-inside mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="space-y-6">
    {{-- Input Judul, Deskripsi, dan Kategori tetap sama --}}
    <div>
        <label for="judul" class="block text-sm font-medium text-gray-700 mb-1">Judul Dokumen</label>
        <div class="relative rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                <i class="fas fa-fw fa-heading text-gray-400"></i>
            </div>
            <input type="text" name="judul" id="judul" value="{{ old('judul', $download->judul ?? '') }}" required
                   class="block w-full rounded-md border-gray-300 pl-10 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                   placeholder="e.g., Laporan Keuangan Q3 2024">
        </div>
    </div>
    <div>
        <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Singkat</label>
        <textarea name="deskripsi" id="deskripsi" rows="4"
                  class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                  placeholder="Jelaskan isi singkat dari dokumen ini...">{{ old('deskripsi', $download->deskripsi ?? '') }}</textarea>
    </div>
    <div>
        <label for="kategori" class="block text-sm font-medium text-gray-700 mb-1">Kategori</label>
        <div class="relative">
             <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                <i class="fas fa-fw fa-tags text-gray-400"></i>
            </div>
            <select name="kategori" id="kategori" required
                    class="block w-full appearance-none rounded-md border-gray-300 pl-10 pr-10 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                <option value="" disabled {{ old('kategori', $download->kategori ?? '') == '' ? 'selected' : '' }}>-- Pilih Kategori --</option>
                <option value="laporan-tahunan" {{ old('kategori', $download->kategori ?? '') == 'laporan-tahunan' ? 'selected' : '' }}>
                    Laporan Tahunan
                </option>
                <option value="rencana-kerja" {{ old('kategori', $download->kategori ?? '') == 'rencana-kerja' ? 'selected' : '' }}>
                    Rencana Kerja
                </option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
        </div>
    </div>

    {{-- Input untuk File Upload --}}
    <div>
        <label for="file" class="block text-sm font-medium text-gray-700 mb-1">File Dokumen</label>
        
        {{-- Tanda untuk file yang SUDAH TERSIMPAN (hanya mode edit) --}}
        @if(!empty($is_edit) && isset($download->nama_file))
            <div class="mb-2 p-3 bg-green-50 border border-green-200 rounded-lg flex items-center justify-between">
                <div class="flex items-center"><i class="fas fa-check-circle text-green-500 mr-2"></i><span class="text-sm text-gray-700">File tersimpan:</span></div>
                <a href="{{ asset('storage/downloads/' . $download->nama_file) }}" target="_blank" class="font-medium text-sm text-indigo-600 hover:underline">{{ $download->nama_file }}</a>
            </div>
        @endif

        <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
            <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true"><path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg>
                <div class="flex text-sm text-gray-600"><label for="file" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500"><span>{{ !empty($is_edit) ? 'Ganti file' : 'Upload sebuah file' }}</span><input id="file" name="file" type="file" class="sr-only" @if(empty($is_edit)) required @endif></label><p class="pl-1">atau tarik dan lepas</p></div>
                <p class="text-xs text-gray-500">{{ !empty($is_edit) ? 'Kosongkan jika tidak ingin mengubah file.' : 'PDF, DOCX, PPTX, XLSX. Maks 10MB.' }}</p>
            </div>
        </div>

        {{-- ====================================================== --}}
        {{-- == BAGIAN BARU UNTUK MENAMPILKAN NAMA FILE YANG DIPILIH == --}}
        {{-- ====================================================== --}}
        <div id="file-name-container" class="hidden mt-2 p-3 bg-blue-50 border border-blue-200 rounded-lg">
            <div class="flex items-center">
                <i class="fas fa-file-alt text-blue-500 mr-2"></i>
                <span class="text-sm text-gray-700">File yang dipilih:</span>
                <span id="file-name-display" class="ml-2 font-medium text-sm text-gray-800"></span>
            </div>
        </div>
        {{-- ====================================================== --}}
    </div>
</div>

{{-- Tombol Aksi --}}
<div class="mt-8 flex justify-end pt-5 border-t border-gray-200">
    <a href="{{ route('admin.downloads.index') }}" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">Batal</a>
    <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Simpan</button>
</div>


{{-- ====================================================== --}}
{{-- == JAVASCRIPT UNTUK INTERAKSI == --}}
{{-- ====================================================== --}}
@push('scripts')
<script>
    // Pastikan script berjalan setelah halaman dimuat sepenuhnya
    document.addEventListener('DOMContentLoaded', function () {
        // Ambil elemen-elemen yang kita butuhkan
        const fileInput = document.getElementById('file');
        const fileNameContainer = document.getElementById('file-name-container');
        const fileNameDisplay = document.getElementById('file-name-display');

        // Tambahkan 'listener' ke input file
        fileInput.addEventListener('change', function() {
            // Cek apakah ada file yang dipilih
            if (this.files.length > 0) {
                // Jika ada, ambil nama filenya
                const fileName = this.files[0].name;
                
                // Tampilkan nama file di tempat yang sudah disediakan
                fileNameDisplay.textContent = fileName;
                
                // Tampilkan kotaknya (yang tadinya 'hidden')
                fileNameContainer.classList.remove('hidden');
            } else {
                // Jika tidak ada file yang dipilih (misal, user klik cancel)
                // Sembunyikan lagi kotaknya
                fileNameContainer.classList.add('hidden');
            }
        });
    });
</script>
@endpush