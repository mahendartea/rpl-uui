<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'RPL Universitas Ubudiyah Indonesia')</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Program Rekognisi Pembelajaran Lampau (RPL) Universitas Ubudiyah Indonesia. Dapatkan pengakuan formal atas pengalaman dan kompetensi Anda untuk mempercepat pendidikan tinggi.">
    <meta name="keywords"
        content="RPL, Rekognisi Pembelajaran Lampau, Universitas Ubudiyah Indonesia, UUI, Pendidikan Tinggi, Banda Aceh, Farmasi, Informatika, Kebidanan, Ilmu Gizi, Sistem Informasi, PGSD, Kesehatan Masyarakat">
    <meta name="author" content="Universitas Ubudiyah Indonesia">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="revisit-after" content="7 days">
    <meta name="rating" content="general">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="RPL Universitas Ubudiyah Indonesia">
    <meta property="og:description"
        content="Program Rekognisi Pembelajaran Lampau (RPL) Universitas Ubudiyah Indonesia. Dapatkan pengakuan formal atas pengalaman dan kompetensi Anda untuk mempercepat pendidikan tinggi">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', asset('logouuinew.png'))">
    <meta property="og:site_name" content="RPL Universitas Ubudiyah Indonesia">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="'RPL Universitas Ubudiyah Indonesia')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Program Rekognisi Pembelajaran Lampau (RPL) Universitas Ubudiyah Indonesia. Dapatkan pengakuan formal atas pengalaman dan kompetensi Anda.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('logouuinew.png'))">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('build/manifest.json') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <img class="h-10 w-auto" src="{{ asset('logouuinew.png') }}"
                                alt="Universitas Ubudiyah Indonesia">
                            <div class="ml-3">
                                <div class="text-sm font-bold text-gray-800">RPL</div>
                                <div class="text-xs text-gray-600">Universitas Ubudiyah</div>
                            </div>
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <a href="{{ route('home') }}"
                            class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('home') ? 'border-red-500 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} text-sm font-medium leading-5 transition duration-150 ease-in-out">
                            Beranda
                        </a>
                        <a href="{{ route('about') }}"
                            class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('about') ? 'border-red-500 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} text-sm font-medium leading-5 transition duration-150 ease-in-out">
                            Tentang RPL
                        </a>
                        <a href="{{ route('requirements') }}"
                            class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('requirements') ? 'border-red-500 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} text-sm font-medium leading-5 transition duration-150 ease-in-out">
                            Persyaratan
                        </a>
                        <a href="{{ route('contact') }}"
                            class="inline-flex items-center px-1 pt-1 border-b-2 {{ request()->routeIs('contact') ? 'border-red-500 text-gray-900' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300' }} text-sm font-medium leading-5 transition duration-150 ease-in-out">
                            Kontak
                        </a>
                    </div>
                </div>

                <!-- Auth Links -->
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">
                            Masuk
                        </a>
                        <a href="{{ route('register') }}"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-sm font-medium transition duration-150 ease-in-out">
                            Daftar
                        </a>
                    @endauth
                </div>

                <!-- Mobile menu button -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button"
                        class="mobile-menu-button bg-white inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="mobile-menu hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="{{ route('home') }}"
                    class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('home') ? 'border-red-500 text-red-700 bg-red-50' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium">
                    Beranda
                </a>
                <a href="{{ route('about') }}"
                    class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('about') ? 'border-red-500 text-red-700 bg-red-50' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium">
                    Tentang RPL
                </a>
                <a href="{{ route('requirements') }}"
                    class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('requirements') ? 'border-red-500 text-red-700 bg-red-50' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium">
                    Persyaratan
                </a>
                <a href="{{ route('contact') }}"
                    class="block pl-3 pr-4 py-2 border-l-4 {{ request()->routeIs('contact') ? 'border-red-500 text-red-700 bg-red-50' : 'border-transparent text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300' }} text-base font-medium">
                    Kontak
                </a>
            </div>
            <div class="pt-4 pb-3 border-t border-gray-200">
                @auth
                    <div class="px-4">
                        <a href="{{ route('dashboard') }}"
                            class="block w-full text-left bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-base font-medium">
                            Dashboard
                        </a>
                    </div>
                @else
                    <div class="space-y-1 px-4">
                        <a href="{{ route('login') }}"
                            class="block text-gray-600 hover:text-gray-800 px-3 py-2 rounded-md text-base font-medium">
                            Masuk
                        </a>
                        <a href="{{ route('register') }}"
                            class="block w-full text-left bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md text-base font-medium">
                            Daftar
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center">
                        <img class="h-10 w-auto" src="{{ asset('logouuinew.png') }}"
                            alt="Universitas Ubudiyah Indonesia">
                        <div class="ml-3">
                            <div class="text-lg font-bold">RPL</div>
                            <div class="text-sm text-gray-300">Universitas Ubudiyah</div>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-300">
                        Sistem Rekognisi Pembelajaran Lampau (RPL) Universitas Ubudiyah Indonesia memberikan kesempatan
                        kepada masyarakat untuk melanjutkan pendidikan dengan pengakuan atas pengalaman dan kompetensi
                        yang telah dimiliki.
                    </p>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">
                        Menu
                    </h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="{{ route('home') }}"
                                class="text-base text-gray-300 hover:text-white">Beranda</a>
                        </li>
                        <li><a href="{{ route('about') }}" class="text-base text-gray-300 hover:text-white">Tentang
                                RPL</a></li>
                        <li><a href="{{ route('requirements') }}"
                                class="text-base text-gray-300 hover:text-white">Persyaratan</a></li>
                        <li><a href="{{ route('contact') }}"
                                class="text-base text-gray-300 hover:text-white">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">
                        Kontak
                    </h3>
                    <ul class="mt-4 space-y-4">
                        <li class="text-base text-gray-300">
                            Jl. Alue Naga, Tibang, Syiah Kuala<br>
                            Banda Aceh, Aceh 23116
                        </li>
                        <li class="text-base text-gray-300">
                            Email: rpl@uui.ac.id
                        </li>
                        <li class="text-base text-gray-300">
                            Telp: (0651) 7555566
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8">
                <p class="text-base text-gray-400 text-center">
                    © {{ date('Y') }} Universitas Ubudiyah Indonesia. Seluruh hak cipta dilindungi.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>
