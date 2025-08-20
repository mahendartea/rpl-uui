@extends('layouts.public')

@section('title', 'Tentang RPL - Universitas Ubudiyah Indonesia')
@section('description', 'Pelajari konsep, manfaat, dan implementasi Rekognisi Pembelajaran Lampau (RPL) di Universitas
    Ubudiyah Indonesia. Dasar hukum, tipe RPL, dan proses asesmen yang fair dan objektif.')
@section('keywords', 'Tentang RPL, Rekognisi Pembelajaran Lampau, Definisi RPL, Manfaat RPL, RPL Tipe A, RPL Tipe B,
    Permendikbudristek, UUI, Asesmen Kompetensi')
@section('og_title', 'Tentang Rekognisi Pembelajaran Lampau - UUI')
@section('og_description', 'Memahami konsep dan manfaat RPL di Universitas Ubudiyah Indonesia. Pengakuan formal atas
    pembelajaran dari pendidikan formal, nonformal, informal, dan pengalaman kerja.')

@section('content')
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Tentang Rekognisi Pembelajaran Lampau
                </h1>
                <p class="text-xl max-w-3xl mx-auto">
                    Memahami konsep, manfaat, dan implementasi RPL di Universitas Ubudiyah Indonesia
                </p>
            </div>
        </div>
    </div>

    <!-- Definition Section -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Definisi RPL
                    </h2>
                    <div class="bg-red-50 p-8 rounded-xl">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            <strong>Rekognisi Pembelajaran Lampau (RPL)</strong> adalah pengakuan atas Capaian Pembelajaran
                            seseorang yang diperoleh dari
                            <span class="text-red-600 font-semibold">pendidikan formal</span>,
                            <span class="text-red-600 font-semibold">nonformal</span>,
                            <span class="text-red-600 font-semibold">informal</span>, dan/atau
                            <span class="text-red-600 font-semibold">pengalaman kerja</span>
                            sebagai dasar untuk melanjutkan pendidikan formal dan untuk melakukan penyetaraan dengan
                            kualifikasi tertentu.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Legal Basis Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Dasar Hukum
                </h2>
                <p class="text-lg text-gray-600">
                    RPL diatur dalam berbagai peraturan perundang-undangan
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Permendikbudristek No. 41 Tahun 2021</h3>
                            <p class="text-gray-600 text-sm">Tentang Rekognisi Pembelajaran Lampau</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-2">Kepdirjen Diktiristek No. 91/E/KPT/2024
                            </h3>
                            <p class="text-gray-600 text-sm">Tentang Petunjuk Teknis Rekognisi Pembelajaran Lampau pada
                                Perguruan Tinggi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Types of RPL Section -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Tipe RPL
                </h2>
                <p class="text-lg text-gray-600">
                    Terdapat dua tipe RPL berdasarkan skema pengakuan
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- RPL Tipe A -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-xl">
                    <div class="text-center mb-6">
                        <div
                            class="w-16 h-16 bg-green-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold">A</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">RPL Tipe A</h3>
                        <p class="text-lg font-semibold text-green-600">Skema Perolehan SKS</p>
                    </div>

                    <div class="space-y-4 mb-6">
                        <div class="bg-white p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">Target Peserta:</h4>
                            <ul class="text-gray-600 text-sm space-y-1">
                                <li>• Lulusan SMA/sederajat</li>
                                <li>• Lulusan D2/D3</li>
                                <li>• Memiliki pengalaman kerja relevan</li>
                            </ul>
                        </div>
                        <div class="bg-white p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">Hasil:</h4>
                            <p class="text-gray-600 text-sm">Pengakuan capaian pembelajaran secara parsial dalam bentuk
                                perolehan SKS</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-600 text-white">
                            Tersedia di UUI
                        </span>
                    </div>
                </div>

                <!-- RPL Tipe B -->
                <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-xl opacity-75">
                    <div class="text-center mb-6">
                        <div
                            class="w-16 h-16 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                            <span class="text-2xl font-bold">B</span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">RPL Tipe B</h3>
                        <p class="text-lg font-semibold text-red-600">Skema Transfer SKS</p>
                    </div>

                    <div class="space-y-4 mb-6">
                        <div class="bg-white p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">Target Peserta:</h4>
                            <ul class="text-gray-600 text-sm space-y-1">
                                <li>• Mahasiswa pindahan</li>
                                <li>• Alih jenjang</li>
                                <li>• Lintas jalur</li>
                            </ul>
                        </div>
                        <div class="bg-white p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">Hasil:</h4>
                            <p class="text-gray-600 text-sm">Transfer SKS dari pendidikan formal sebelumnya</p>
                        </div>
                    </div>

                    <div class="text-center">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-400 text-white">
                            Coming Soon
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Manfaat RPL
                </h2>
                <p class="text-lg text-gray-600">
                    Keuntungan yang Anda dapatkan melalui program RPL
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Percepatan Waktu Studi</h3>
                    <p class="text-gray-600">Mengurangi masa studi dengan pengakuan SKS dari pengalaman dan kompetensi yang
                        dimiliki</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Efisiensi Biaya</h3>
                    <p class="text-gray-600">Menghemat biaya pendidikan karena mengurangi jumlah mata kuliah yang harus
                        diambil</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Pengakuan Formal</h3>
                    <p class="text-gray-600">Pengalaman dan kompetensi Anda mendapat pengakuan formal dari institusi
                        pendidikan</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Fleksibilitas</h3>
                    <p class="text-gray-600">Pembelajaran yang disesuaikan dengan pengalaman dan kebutuhan individual</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Motivasi Belajar</h3>
                    <p class="text-gray-600">Meningkatkan motivasi untuk melanjutkan pendidikan dengan pengakuan yang sudah
                        ada</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-sm text-center">
                    <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Peningkatan Karir</h3>
                    <p class="text-gray-600">Membuka peluang karir yang lebih baik dengan kualifikasi pendidikan yang lebih
                        tinggi</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Implementation at UUI -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    RPL di Universitas Ubudiyah Indonesia
                </h2>
                <p class="text-lg text-gray-600">
                    Komitmen kami dalam memberikan akses pendidikan yang berkualitas
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Akreditasi Program Studi</h3>
                            <p class="text-gray-600">Semua program studi yang menyelenggarakan RPL telah terakreditasi
                                minimal B/Baik Sekali</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Tim Asesor Kompeten</h3>
                            <p class="text-gray-600">Didukung oleh tim asesor berpengalaman dari akademisi dan praktisi
                                profesional</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Sistem Digital Terintegrasi</h3>
                            <p class="text-gray-600">Platform digital yang memudahkan proses pendaftaran, asesmen, dan
                                monitoring</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Pedoman Jelas</h3>
                            <p class="text-gray-600">Pedoman penyelenggaraan RPL yang komprehensif dan sesuai standar
                                nasional</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Visi & Misi RPL UUI</h3>

                    <div class="mb-6">
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Visi</h4>
                        <p class="text-gray-700">
                            Menjadi penyelenggara RPL terdepan yang memberikan akses pendidikan tinggi berkualitas
                            dengan mengakui dan menghargai setiap pengalaman pembelajaran.
                        </p>
                    </div>

                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-3">Misi</h4>
                        <ul class="text-gray-700 space-y-2">
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-red-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Memberikan pengakuan formal atas pembelajaran dan pengalaman</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-red-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Menyediakan layanan asesmen yang fair dan objektif</span>
                            </li>
                            <li class="flex items-start space-x-2">
                                <svg class="w-5 h-5 text-red-600 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Memfasilitasi akses pendidikan untuk semua kalangan</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Sudah Siap Memulai?
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Manfaatkan pengalaman dan kompetensi Anda untuk mempercepat perjalanan pendidikan
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('requirements') }}"
                    class="bg-white text-red-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold text-lg transition duration-300">
                    Lihat Persyaratan
                </a>
                <a href="{{ route('register') }}"
                    class="border-2 border-white text-white hover:bg-white hover:text-red-600 px-8 py-3 rounded-lg font-semibold text-lg transition duration-300">
                    Daftar Sekarang
                </a>
            </div>
        </div>
    </div>
@endsection
