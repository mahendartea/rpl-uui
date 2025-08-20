<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Masuk' }} - RPL Universitas Ubudiyah Indonesia</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Portal Login RPL Universitas Ubudiyah Indonesia. Akses sistem Rekognisi Pembelajaran Lampau untuk melanjutkan pendidikan Anda.">
    <meta name="keywords" content="Login RPL UUI, Portal RPL, Universitas Ubudiyah Indonesia, RPL Login">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-50 antialiased">
    <!-- Background Design -->
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-br from-red-50 via-white to-red-50">
        <!-- Header with Logo and Back to Home -->
        <div class="w-full max-w-md">
            <div class="text-center mb-6">
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center mb-4" wire:navigate>
                    <img src="{{ asset('logouuinew.png') }}" alt="UUI Logo" class="h-12 w-auto">
                </a>
                <h1 class="text-2xl font-bold text-gray-900 mb-2">RPL Universitas Ubudiyah Indonesia</h1>
                <p class="text-sm text-gray-600">Portal Rekognisi Pembelajaran Lampau</p>
            </div>

            <!-- Auth Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="bg-gradient-to-r from-red-600 to-red-700 h-2"></div>
                <div class="p-6 sm:p-8">
                    {{ $slot }}
                </div>
            </div>

            <!-- Back to Home -->
            <div class="text-center mt-6">
                <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-red-600 transition duration-300"
                    wire:navigate>
                    ← Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
    @fluxScripts
</body>

</html>
