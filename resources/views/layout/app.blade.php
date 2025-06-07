<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <!-- Head content sama seperti di header.blade.php -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Omsetin')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ secure_asset('image/logo.svg') }}" type="image/svg+xml">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ secure_asset('js/scrollReveal.js') }}" defer></script>
    <script src="{{ secure_asset('js/index.js') }}" defer></script>
    <link rel="stylesheet" href="{{ secure_asset('css/index.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @stack('styles')
</head>

<body class="bg-white">
    <!-- Navbar -->
    @include('layout.header')

    <!-- Page Content -->
    <div">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('layout.footer')

    @stack('scripts')
</body>
</html>
