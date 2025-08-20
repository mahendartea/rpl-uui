@extends('layouts.public')

@section('title', 'Kontak - RPL Universitas Ubudiyah Indonesia')
@section('description', 'Hubungi tim RPL Universitas Ubudiyah Indonesia. Alamat kampus, email rpl@uui.ac.id, telepon,
    dan informasi kontak lengkap untuk semua program studi RPL.')
@section('keywords', 'Kontak RPL UUI, Alamat UUI, Email RPL, Telepon UUI, Banda Aceh, rpl@uui.ac.id, Informasi Kontak,
    Customer Service RPL')
@section('og_title', 'Hubungi Kami - RPL UUI')
@section('og_description', 'Ada pertanyaan tentang program RPL? Tim kami siap membantu Anda. Kontak langsung via email
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
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Contact Info -->
                <div class="lg:col-span-1">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Informasi Kontak</h2>

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

                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white p-8 rounded-xl shadow-sm border">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Kirim Pesan</h2>
                        <form action="#" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nama
                                        Lengkap *</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition duration-200">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email
                                        *</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition duration-200">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Nomor
                                        Telepon</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition duration-200">
                                </div>
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Topik
                                        *</label>
                                    <select id="subject" name="subject" required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition duration-200">
                                        <option value="">Pilih Topik</option>
                                        <option value="general">Informasi Umum RPL</option>
                                        <option value="requirements">Persyaratan Pendaftaran</option>
                                        <option value="process">Proses Asesmen</option>
                                        <option value="technical">Bantuan Teknis Website</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Pesan *</label>
                                <textarea id="message" name="message" rows="6" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 transition duration-200"
                                    placeholder="Tuliskan pertanyaan atau pesan Anda di sini..."></textarea>
                            </div>

                            <div class="flex items-start space-x-3">
                                <input type="checkbox" id="privacy" name="privacy" required class="mt-1">
                                <label for="privacy" class="text-sm text-gray-600">
                                    Saya setuju dengan <a href="#" class="text-red-600 hover:text-red-700">kebijakan
                                        privasi</a> dan <a href="#" class="text-red-600 hover:text-red-700">syarat &
                                        ketentuan</a>
                                    yang berlaku.
                                </label>
                            </div>

                            <div>
                                <button type="submit"
                                    class="w-full bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition duration-300 flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
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
                    Kontak Fakultas & Program Studi
                </h2>
                <p class="text-lg text-gray-600">
                    Hubungi langsung fakultas atau program studi yang diminati
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Faculty of Health -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Fakultas Kesehatan</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-medium text-gray-900">D3 Kebidanan</h4>
                            <p class="text-gray-600 text-sm">Email: rpl@uui.ac.id</p>
                            <p class="text-gray-600 text-sm">Telp: (0651) 7555566 ext. 301</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900">D4 Kebidanan</h4>
                            <p class="text-gray-600 text-sm">Email: rpl@uui.ac.id</p>
                            <p class="text-gray-600 text-sm">Telp: (0651) 7555566 ext. 302</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900">S1 Ilmu Gizi</h4>
                            <p class="text-gray-600 text-sm">Email: rpl@uui.ac.id</p>
                            <p class="text-gray-600 text-sm">Telp: (0651) 7555566 ext. 303</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900">S1 Bidan Pendidik</h4>
                            <p class="text-gray-600 text-sm">Email: rpl@uui.ac.id</p>
                            <p class="text-gray-600 text-sm">Telp: (0651) 7555566 ext. 304</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900">S1 Kesehatan Masyarakat</h4>
                            <p class="text-gray-600 text-sm">Email: rpl@uui.ac.id</p>
                            <p class="text-gray-600 text-sm">Telp: (0651) 7555566 ext. 305</p>
                        </div>
                    </div>
                </div>

                <!-- Faculty of Information Technology -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Fakultas Teknologi Informasi</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-medium text-gray-900">S1 Sistem Informasi</h4>
                            <p class="text-gray-600 text-sm">Email: rpl@uui.ac.id</p>
                            <p class="text-gray-600 text-sm">Telp: (0651) 7555566 ext. 101</p>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-900">S1 Informatika</h4>
                            <p class="text-gray-600 text-sm">Email: rpl@uui.ac.id</p>
                            <p class="text-gray-600 text-sm">Telp: (0651) 7555566 ext. 102</p>
                        </div>
                    </div>
                </div>

                <!-- Faculty of Pharmacy -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Fakultas Farmasi</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-medium text-gray-900">S1 Farmasi</h4>
                            <p class="text-gray-600 text-sm">Email: rpl@uui.ac.id</p>
                            <p class="text-gray-600 text-sm">Telp: (0651) 7555566 ext. 401</p>
                        </div>
                    </div>
                </div>

                <!-- Faculty of Teacher Training and Education -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Fakultas Keguruan dan Ilmu Pendidikan</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-medium text-gray-900">S1 Pendidikan Guru Sekolah Dasar</h4>
                            <p class="text-gray-600 text-sm">Email: rpl@uui.ac.id</p>
                            <p class="text-gray-600 text-sm">Telp: (0651) 7555566 ext. 501</p>
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
