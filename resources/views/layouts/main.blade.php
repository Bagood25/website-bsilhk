<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - BSILHK</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #F3F4F6;
        }
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-item:hover .dropdown-menu {
            display: block;
        }
        .dropdown-item .dropdown-menu {
            top: 0;
            left: 100%;
        }
    </style>
</head>
<body class="bg-gray-50">

    <!-- Sertakan komponen header dari partials -->
    @include('partials._header')

    <!-- Konten spesifik halaman akan ditempatkan di sini -->
    @yield('content')

    <!-- Anda bisa menyertakan komponen footer di sini jika ada -->
    @include('partials._footer')

    <!-- JavaScript untuk menu mobile -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');

            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
                button.addEventListener('click', () => {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('.mobile-dropdown-icon');
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                });
            });

            document.querySelectorAll('.mobile-sub-dropdown-toggle').forEach(button => {
                button.addEventListener('click', () => {
                    const content = button.nextElementSibling;
                    const icon = button.querySelector('.mobile-sub-dropdown-icon');
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-90');
                });
            });
        });
    </script>

</body>
</html>
