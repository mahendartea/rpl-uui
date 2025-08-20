@extends('layouts.public')

@section('title', 'Beranda - RPL Universitas Ubudiyah Indonesia')

@section('content')
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-red-600 to-red-800 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    Rekognisi Pembelajaran Lampau
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">
                    Universitas Ubudiyah Indonesia
                </p>
                <p class="text-lg mb-8 max-w-4xl mx-auto opacity-90">
                    Pengakuan atas Capaian Pembelajaran yang diperoleh dari pendidikan formal, nonformal, informal, dan/atau
                    pengalaman kerja sebagai dasar untuk melanjutkan pendidikan formal.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('register') }}"
                        class="bg-white text-red-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold text-lg transition duration-300">
                        Daftar Sekarang
                    </a>
                    <a href="{{ route('about') }}"
                        class="border-2 border-white text-white hover:bg-white hover:text-red-600 px-8 py-3 rounded-lg font-semibold text-lg transition duration-300">
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="bg-white p-8 rounded-lg shadow-sm">
                    <div class="text-3xl font-bold text-red-600 mb-2">{{ $studyPrograms->count() }}</div>
                    <div class="text-gray-600">Program Studi</div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-sm">
                    <div class="text-3xl font-bold text-red-600 mb-2">{{ $graduateCategories->count() }}</div>
                    <div class="text-gray-600">Kategori Lulusan</div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-sm">
                    <div class="text-3xl font-bold text-red-600 mb-2">100%</div>
                    <div class="text-gray-600">Dukungan Digital</div>
                </div>
            </div>
        </div>
    </div>

    <!-- What is RPL Section -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Apa itu RPL?
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Rekognisi Pembelajaran Lampau (RPL) adalah sistem pengakuan formal atas kompetensi dan pengalaman yang
                    telah Anda miliki
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Pengakuan Pengalaman</h3>
                            <p class="text-gray-600">Pengalaman kerja dan pembelajaran informal Anda diakui sebagai kredit
                                akademik</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Percepatan Studi</h3>
                            <p class="text-gray-600">Mengurangi waktu tempuh perkuliahan dengan pengakuan SKS dari
                                pengalaman</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Hemat Biaya</h3>
                            <p class="text-gray-600">Menghemat biaya pendidikan dengan mengurangi jumlah mata kuliah yang
                                harus ditempuh</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Tipe RPL yang Tersedia</h3>
                    <div class="space-y-4">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <h4 class="font-semibold text-gray-900 mb-2">RPL Tipe A - Perolehan SKS</h4>
                            <p class="text-gray-600 text-sm">Untuk calon mahasiswa yang belum memiliki gelar sarjana</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm opacity-50">
                            <h4 class="font-semibold text-gray-900 mb-2">RPL Tipe B - Transfer SKS</h4>
                            <p class="text-gray-600 text-sm">Untuk mahasiswa pindahan atau alih jenjang (Coming Soon)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Study Programs Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Program Studi Penyelenggara RPL
                </h2>
                <p class="text-lg text-gray-600 mb-6">
                    Universitas Ubudiyah Indonesia menyelenggarakan program RPL untuk 9 program studi unggulan
                </p>
                <div class="bg-red-50 p-6 rounded-xl max-w-4xl mx-auto">
                    <p class="text-gray-700 leading-relaxed">
                        <strong class="text-red-600">Program Studi yang tersedia:</strong>
                        Farmasi, Informatika, Kebidanan (D3), Ilmu Gizi, Sistem Informasi,
                        D4 Kebidanan, Bidan Pendidik, Pendidikan Guru Sekolah Dasar, dan Kesehatan Masyarakat.
                        Semua program telah terakreditasi dan mengikuti standar nasional RPL.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($studyPrograms as $program)
                    <div class="bg-white p-6 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-1">{{ $program->name }}</h3>
                                <p class="text-sm text-gray-500">{{ $program->degree }} - {{ $program->code }}</p>
                            </div>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Aktif
                            </span>
                        </div>
                        <p class="text-gray-600 text-sm mb-4">{{ $program->faculty }}</p>
                        <a href="{{ route('register') }}"
                            class="inline-flex items-center text-red-600 hover:text-red-700 font-medium text-sm">
                            Daftar Program Ini
                            <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Requirements Preview -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Persyaratan Pendaftaran
                    </h2>
                    <div class="space-y-4">
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Lulusan SMA/sederajat, D2, atau D3</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Memiliki pengalaman kerja atau pelatihan relevan</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Dokumen pendukung yang lengkap</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Lulus tes asesmen kompetensi</span>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a href="{{ route('requirements') }}"
                            class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                            Lihat Detail Persyaratan
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Alur Pendaftaran</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                1</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Registrasi Akun</h4>
                                <p class="text-gray-600 text-sm">Buat akun dan lengkapi data pribadi</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                2</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Upload Dokumen</h4>
                                <p class="text-gray-600 text-sm">Upload semua dokumen persyaratan</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                3</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Verifikasi Berkas</h4>
                                <p class="text-gray-600 text-sm">Tim asesor akan memverifikasi dokumen</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div
                                class="flex-shrink-0 w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center text-sm font-bold">
                                4</div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Pengumuman</h4>
                                <p class="text-gray-600 text-sm">Terima hasil asesmen dan pengakuan SKS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Siap Memulai Perjalanan Pendidikan Anda?
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Bergabunglah dengan ribuan mahasiswa lain yang telah memanfaatkan program RPL untuk mempercepat pendidikan
                mereka
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}"
                    class="bg-white text-red-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold text-lg transition duration-300">
                    Daftar Sekarang
                </a>
                <a href="{{ route('contact') }}"
                    class="border-2 border-white text-white hover:bg-white hover:text-red-600 px-8 py-3 rounded-lg font-semibold text-lg transition duration-300">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
@endsection
