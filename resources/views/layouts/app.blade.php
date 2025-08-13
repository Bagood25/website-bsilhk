<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BSILHK')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- ====================================================== --}}
    {{-- == 1. TAMBAHKAN CSS SLIDER DI SINI == --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    {{-- ====================================================== --}}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body>
    @include('partials._header')

    <main>
        @yield('content')
    </main>

    @include('partials._footer')

    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    {{-- ====================================================== --}}
    {{-- == 2. TAMBAHKAN JAVASCRIPT SLIDER DI SINI == --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Inisialisasi slider HANYA untuk elemen dengan class .photo-slider
        const swiper = new Swiper('.photo-slider', {
            loop: true,
            slidesPerView: 2, // Tampilan default untuk mobile
            spaceBetween: 20,
            
            // Tombol navigasi
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // Pengaturan responsif
            breakpoints: {
                640: { // Layar 'sm'
                  slidesPerView: 3,
                  spaceBetween: 20
                },
                768: { // Layar 'md'
                  slidesPerView: 4,
                  spaceBetween: 30
                },
                1024: { // Layar 'lg'
                  slidesPerView: 5,
                  spaceBetween: 30
                }
            }
        });
    </script>
    {{-- ====================================================== --}}
</body>
</html>