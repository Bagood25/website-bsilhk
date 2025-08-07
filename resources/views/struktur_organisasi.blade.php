<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
    <!-- Memuat Tailwind CSS untuk styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f7fafc;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex-grow: 1;
        }
        /* Style untuk modal */
        .modal {
            background-color: rgba(0, 0, 0, 0.75);
        }
        /* Animasi fade-in */
        .fade-in {
            animation: fadeIn 0.3s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>

    <!-- Menyertakan (include) file header -->
    @include('partials._header')

    <!-- Konten utama halaman -->
    <main class="py-8">
        <div class="max-w-4xl mx-auto bg-white shadow-xl rounded-2xl p-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-6 border-b-4 border-lime-500 pb-2">Struktur Organisasi</h1>
            
            <p class="text-gray-600 mb-8">
                Berikut adalah unit-unit kerja yang membentuk struktur organisasi kami. Klik pada unit kerja untuk melihat detailnya.
            </p>

            <!-- Daftar unit kerja. Tambahkan atribut data- untuk pop-up. -->
            <ul class="space-y-4 text-lg">
                <li class="organisasi-item flex items-center p-4 bg-gray-50 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer" 
                    data-name="Sekretariat BSILHK" 
                    data-photo="https://placehold.co/400x400/10b981/ffffff?text=Sekretariat">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-lime-600 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.083 12.083 0 002.5 12c0 2.872.748 5.568 2.052 7.643L12 22.472l7.448-2.829C21.752 17.568 22.5 14.872 22.5 12c0-3.376-.84-6.49-2.382-9.016z" />
                    </svg>
                    Sekretariat BSILHK
                </li>
                <li class="organisasi-item flex items-center p-4 bg-gray-50 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer" 
                    data-name="Pusat SIKHLK" 
                    data-photo="https://placehold.co/400x400/0f9e54/ffffff?text=SIKHLK">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-lime-600 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.083 12.083 0 002.5 12c0 2.872.748 5.568 2.052 7.643L12 22.472l7.448-2.829C21.752 17.568 22.5 14.872 22.5 12c0-3.376-.84-6.49-2.382-9.016z" />
                    </svg>
                    Pusat SIKHLK
                </li>
                <li class="organisasi-item flex items-center p-4 bg-gray-50 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer" 
                    data-name="Pusat SIPHB" 
                    data-photo="https://placehold.co/400x400/0f9e54/ffffff?text=SIPHB">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-lime-600 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.083 12.083 0 002.5 12c0 2.872.748 5.568 2.052 7.643L12 22.472l7.448-2.829C21.752 17.568 22.5 14.872 22.5 12c0-3.376-.84-6.49-2.382-9.016z" />
                    </svg>
                    Pusat SIPHB
                </li>
                <li class="organisasi-item flex items-center p-4 bg-gray-50 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer" 
                    data-name="Pusat SIKBPI" 
                    data-photo="https://placehold.co/400x400/0f9e54/ffffff?text=SIKBPI">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-lime-600 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.083 12.083 0 002.5 12c0 2.872.748 5.568 2.052 7.643L12 22.472l7.448-2.829C21.752 17.568 22.5 14.872 22.5 12c0-3.376-.84-6.49-2.382-9.016z" />
                    </svg>
                    Pusat SIKBPI
                </li>
                <li class="organisasi-item flex items-center p-4 bg-gray-50 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer" 
                    data-name="Pusat FPSILHK" 
                    data-photo="https://placehold.co/400x400/0f9e54/ffffff?text=FPSILHK">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-lime-600 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.083 12.083 0 002.5 12c0 2.872.748 5.568 2.052 7.643L12 22.472l7.448-2.829C21.752 17.568 22.5 14.872 22.5 12c0-3.376-.84-6.49-2.382-9.016z" />
                    </svg>
                    Pusat FPSILHK
                </li>
                <li class="organisasi-item flex items-center p-4 bg-gray-50 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer" 
                    data-name="Unit Pelaksana BSILHK" 
                    data-photo="https://placehold.co/400x400/0f9e54/ffffff?text=Unit+Pelaksana">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-lime-600 mr-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.083 12.083 0 002.5 12c0 2.872.748 5.568 2.052 7.643L12 22.472l7.448-2.829C21.752 17.568 22.5 14.872 22.5 12c0-3.376-.84-6.49-2.382-9.016z" />
                    </svg>
                    Unit Pelaksana BSILHK
                </li>
            </ul>
        </div>
    </main>

    <!-- Menyertakan (include) file footer -->
    @include('partials._footer')

    <!-- Modal Pop-up -->
    <div id="popup-modal" class="modal fixed inset-0 z-50 hidden flex items-center justify-center fade-in">
        <div class="bg-white rounded-lg shadow-xl p-8 max-w-sm mx-auto relative">
            <!-- Tombol tutup -->
            <button id="close-modal-btn" class="absolute top-4 right-4 text-gray-500 hover:text-gray-800 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            
            <!-- Konten pop-up -->
            <div class="text-center">
                <img id="popup-photo" src="" alt="Foto Unit Kerja" class="w-48 h-48 rounded-full object-cover mx-auto mb-4">
                <h3 id="popup-name" class="text-2xl font-bold text-gray-800"></h3>
            </div>
        </div>
    </div>

    <!-- Script untuk fungsionalitas pop-up -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const organisasiItems = document.querySelectorAll('.organisasi-item');
            const popupModal = document.getElementById('popup-modal');
            const popupPhoto = document.getElementById('popup-photo');
            const popupName = document.getElementById('popup-name');
            const closeModalBtn = document.getElementById('close-modal-btn');

            organisasiItems.forEach(item => {
                item.addEventListener('click', () => {
                    // Ambil data dari atribut `data-`
                    const name = item.getAttribute('data-name');
                    const photoUrl = item.getAttribute('data-photo');

                    // Isi konten pop-up
                    popupPhoto.src = photoUrl;
                    popupPhoto.alt = 'Foto ' + name;
                    popupName.textContent = name;

                    // Tampilkan modal
                    popupModal.classList.remove('hidden');
                });
            });

            // Sembunyikan modal saat tombol tutup diklik
            closeModalBtn.addEventListener('click', () => {
                popupModal.classList.add('hidden');
            });

            // Sembunyikan modal jika klik di luar kotak modal
            popupModal.addEventListener('click', (event) => {
                if (event.target === popupModal) {
                    popupModal.classList.add('hidden');
                }
            });
        });
    </script>
</body>
</html>
