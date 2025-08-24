@extends('layouts.public')

@section('title', 'Kontak - RPL Universitas Ubudiyah Indonesia')
@section('description',
    'Hubungi tim RPL Universitas Ubudiyah Indonesia. Alamat kampus, email rpl@uui.ac.id, telepon,
    dan informasi kontak lengkap untuk semua program studi RPL.')
@section('keywords',
    'Kontak RPL UUI, Alamat UUI, Email RPL, Telepon UUI, Banda Aceh, rpl@uui.ac.id, Informasi Kontak,
    Customer Service RPL')
@section('og_title', 'Hubungi Kami - RPL UUI')
@section('og_description',
    'Ada pertanyaan tentang program RPL? Tim kami siap membantu Anda. Kontak langsung via email
    rpl@uui.ac.id atau kunjungi kampus di Banda Aceh.')

@section('content')
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Hubungi Kami
                </h1>
                <p class="text-xl max-w-3xl mx-auto">
                    Ada pertanyaan tentang RPL? Tim kami siap membantu Anda
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Information Section -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Info -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Informasi Kontak</h2>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Alamat</h3>
                                <p class="text-gray-600">
                                    Jl. Alue Naga, Tibang, Syiah Kuala<br>
                                    Banda Aceh, Aceh 23116<br>
                                    Indonesia
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Telepon</h3>
                                <p class="text-gray-600">
                                    <a href="tel:+6265175555566" class="hover:text-red-600">(0651) 7555566</a><br>
                                    <a href="tel:+6265175555567" class="hover:text-red-600">(0651) 7555567</a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                                <p class="text-gray-600">
                                    <a href="mailto:rpl@uui.ac.id" class="hover:text-red-600">rpl@uui.ac.id</a><br>
                                    <a href="mailto:info@uui.ac.id" class="hover:text-red-600">info@uui.ac.id</a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-1">Jam Operasional</h3>
                                <p class="text-gray-600">
                                    Senin - Jumat: 08:00 - 16:00 WIB<br>
                                    Sabtu: 08:00 - 12:00 WIB<br>
                                    Minggu & Libur: Tutup
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="mt-8">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Ikuti Kami</h3>
                        <div class="flex space-x-4">
                            <a href="#"
                                class="w-10 h-10 bg-red-600 text-white rounded-lg flex items-center justify-center hover:bg-red-700 transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-red-700 text-white rounded-lg flex items-center justify-center hover:bg-red-800 transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-red-600 text-white rounded-lg flex items-center justify-center hover:bg-red-700 transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-pink-600 text-white rounded-lg flex items-center justify-center hover:bg-pink-700 transition duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.083.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.758-1.378l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.624 0 11.99-5.367 11.99-11.987C24.007 5.367 18.641.001 12.017.001z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick Contact Card -->
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">Hubungi Tim RPL</h2>
                    <div class="bg-gradient-to-br from-red-50 to-red-100 p-8 rounded-xl border border-red-200">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900 mb-4">Tim RPL Siap Membantu</h3>
                            <p class="text-gray-600 mb-6">Untuk informasi lengkap tentang program RPL, persyaratan, dan
                                proses pendaftaran</p>

                            <div class="space-y-4 mb-8">
                                <div class="bg-white p-4 rounded-lg border border-red-200">
                                    <h4 class="font-semibold text-gray-900 mb-2">Email Khusus RPL</h4>
                                    <a href="mailto:rpl@uui.ac.id"
                                        class="text-red-600 hover:text-red-700 font-medium text-lg">
                                        rpl@uui.ac.id
                                    </a>
                                </div>
                                <div class="bg-white p-4 rounded-lg border border-red-200">
                                    <h4 class="font-semibold text-gray-900 mb-2">Telepon Langsung</h4>
                                    <a href="tel:+6265175555566"
                                        class="text-red-600 hover:text-red-700 font-medium text-lg">
                                        (0651) 7555566
                                    </a>
                                </div>
                            </div>

                            <div class="text-sm text-gray-600">
                                <p class="mb-2">📧 <strong>Untuk konsultasi via email:</strong></p>
                                <p class="mb-4">Kirim pertanyaan Anda ke alamat email di atas dengan subjek yang jelas
                                </p>

                                <p class="mb-2">📞 <strong>Untuk konsultasi telepon:</strong></p>
                                <p>Senin-Jumat: 08:00-16:00 WIB | Sabtu: 08:00-12:00 WIB</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Department Contact Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Kontak Program Studi RPL
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Hubungi langsung koordinator program studi untuk informasi spesifik
                </p>
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-6 max-w-4xl mx-auto">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="text-left">
                            <h3 class="text-lg font-semibold text-blue-900 mb-2">Panduan Kontak Program Studi</h3>
                            <p class="text-blue-800 text-sm">
                                Untuk informasi spesifik tentang kurikulum, mata kuliah, dan persyaratan khusus program
                                studi,
                                silakan hubungi koordinator program studi yang Anda minati melalui kontak di bawah ini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Fakultas Ilmu Kesehatan -->
                <div
                    class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Fakultas Ilmu Kesehatan</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">📚 Program Diploma & Sarjana</h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">D3 Kebidanan</span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Aktif</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">D4 Kebidanan</span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Aktif</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">S1 Ilmu Gizi</span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Aktif</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">S1 Bidan Pendidik</span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Aktif</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">S1 Kesehatan Masyarakat</span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Aktif</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <div class="flex items-center space-x-4">
                                <a href="mailto:rpl@uui.ac.id"
                                    class="flex-1 bg-red-600 hover:bg-red-700 text-white text-center py-2 px-4 rounded-lg text-sm font-medium transition duration-300">
                                    📧 Email
                                </a>
                                <a href="tel:+6265175555566"
                                    class="flex-1 bg-green-600 hover:bg-green-700 text-white text-center py-2 px-4 rounded-lg text-sm font-medium transition duration-300">
                                    📞 Telepon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fakultas Farmasi -->
                <div
                    class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Fakultas Farmasi</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">💊 Program Sarjana</h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">S1 Farmasi</span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Aktif</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <div class="flex items-center space-x-4">
                                <a href="mailto:rpl@uui.ac.id"
                                    class="flex-1 bg-red-600 hover:bg-red-700 text-white text-center py-2 px-4 rounded-lg text-sm font-medium transition duration-300">
                                    📧 Email
                                </a>
                                <a href="tel:+6265175555566"
                                    class="flex-1 bg-green-600 hover:bg-green-700 text-white text-center py-2 px-4 rounded-lg text-sm font-medium transition duration-300">
                                    📞 Telepon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fakultas Sains dan Teknologi -->
                <div
                    class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition duration-300">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Fakultas Sains dan Teknologi</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">💻 Program Teknologi Informasi</h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">S1 Sistem Informasi</span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Aktif</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">S1 Informatika</span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Aktif</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <div class="flex items-center space-x-4">
                                <a href="mailto:rpl@uui.ac.id"
                                    class="flex-1 bg-red-600 hover:bg-red-700 text-white text-center py-2 px-4 rounded-lg text-sm font-medium transition duration-300">
                                    📧 Email
                                </a>
                                <a href="tel:+6265175555566"
                                    class="flex-1 bg-green-600 hover:bg-green-700 text-white text-center py-2 px-4 rounded-lg text-sm font-medium transition duration-300">
                                    📞 Telepon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fakultas Sosial Sains dan Pendidikan -->
                <div
                    class="bg-white p-8 rounded-xl shadow-sm border border-gray-200 hover:shadow-md transition duration-300 md:col-span-2 lg:col-span-1">
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">Fakultas Sosial Sains dan Pendidikan</h3>
                    </div>
                    <div class="space-y-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-gray-900 mb-2">🎓 Program Pendidikan</h4>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-700">S1 Pendidikan Guru Sekolah Dasar</span>
                                    <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Aktif</span>
                                </div>
                            </div>
                        </div>
                        <div class="pt-4 border-t border-gray-200">
                            <div class="flex items-center space-x-4">
                                <a href="mailto:rpl@uui.ac.id"
                                    class="flex-1 bg-red-600 hover:bg-red-700 text-white text-center py-2 px-4 rounded-lg text-sm font-medium transition duration-300">
                                    📧 Email
                                </a>
                                <a href="tel:+6265175555566"
                                    class="flex-1 bg-green-600 hover:bg-green-700 text-white text-center py-2 px-4 rounded-lg text-sm font-medium transition duration-300">
                                    📞 Telepon
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Lokasi Kampus
                </h2>
                <p class="text-lg text-gray-600">
                    Universitas Ubudiyah Indonesia, Banda Aceh
                </p>
            </div>

            <div class="bg-gray-200 rounded-xl overflow-hidden" style="height: 400px;">
                <!-- Placeholder for map - replace with actual map embed -->
                <div class="w-full h-full flex items-center justify-center bg-gray-300">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-gray-500 mx-auto mb-4" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-600">Google Maps akan ditampilkan di sini</p>
                        <p class="text-sm text-gray-500 mt-2">Jl. Alue Naga, Tibang, Syiah Kuala, Banda Aceh</p>
                    </div>
                </div>
            </div>

            <div class="mt-6 text-center">
                <a href="https://maps.google.com/?q=Universitas+Ubudiyah+Indonesia" target="_blank"
                    class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-medium transition duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                    </svg>
                    Buka di Google Maps
                </a>
            </div>
        </div>
    </div>

    <!-- Office Hours Section -->
    <div class="bg-red-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Kunjungi Kantor Kami
                </h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">
                    Tim RPL UUI siap melayani konsultasi langsung di kantor kami
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto text-gray-700">
                    <div class="bg-white bg-opacity-10 p-6 rounded-lg text-gray-700">
                        <h3 class="text-lg font-semibold mb-2">Senin - Jumat</h3>
                        <p class="text-red-800">08:00 - 16:00 WIB</p>
                    </div>
                    <div class="bg-white bg-opacity-10 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Sabtu</h3>
                        <p class="text-red-800">08:00 - 12:00 WIB</p>
                    </div>
                    <div class="bg-white bg-opacity-10 p-6 rounded-lg">
                        <h3 class="text-lg font-semibold mb-2">Minggu & Libur</h3>
                        <p class="text-red-800">Tutup</p>
                    </div>
                </div>

                <div class="mt-8">
                    <p class="text-lg">
                        Untuk konsultasi di luar jam operasional, silakan kirim email atau hubungi melalui formulir di atas
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
