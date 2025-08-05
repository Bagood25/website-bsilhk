<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BSILHK')</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body>
    <!-- Menambahkan partial header di sini -->
    @include('partials._header')

    <!-- Konten utama akan ditempatkan di sini -->
    <main>
        @yield('content')
    </main>

    <!-- Menambahkan partial footer di sini -->
    @include('partials._footer')

    <!-- Script untuk mobile menu, bisa diletakkan di footer atau di sini -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
