@extends('layouts.public')

@section('title', 'Persyaratan - RPL Universitas Ubudiyah Indonesia')
@section('description', 'Ketahui syarat dan dokumen yang diperlukan untuk mendaftar program RPL UUI. Persyaratan umum,
    kualifikasi pendidikan, pengalaman kerja, dan alur pendaftaran lengkap.')
@section('keywords', 'Persyaratan RPL, Syarat RPL UUI, Dokumen RPL, Kualifikasi Pendidikan, Pengalaman Kerja,
    Portofolio, Asesmen Kompetensi, Pendaftaran RPL')
@section('og_title', 'Persyaratan Pendaftaran RPL - UUI')
@section('og_description', 'Pelajari persyaratan lengkap untuk mendaftar program RPL di Universitas Ubudiyah Indonesia.
    Syarat umum, dokumen yang diperlukan, dan proses pendaftaran.')

@section('content')
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">
                    Persyaratan Pendaftaran RPL
                </h1>
                <p class="text-xl max-w-3xl mx-auto">
                    Ketahui syarat dan dokumen yang diperlukan untuk mendaftar program RPL
                </p>
            </div>
        </div>
    </div>

    <!-- General Requirements Section -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Persyaratan Umum
                </h2>
                <p class="text-lg text-gray-600">
                    Syarat dasar yang harus dipenuhi oleh calon peserta RPL Tipe A
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm border">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Kualifikasi Pendidikan</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-green-500 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Lulusan SMA/Sederajat</h4>
                                <p class="text-gray-600 text-sm">Sekolah Menengah Atas, Madrasah Aliyah, SMK, atau bentuk
                                    lain yang sederajat</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-green-500 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Lulusan D2/D3</h4>
                                <p class="text-gray-600 text-sm">Diploma 2 atau Diploma 3 dari institusi terakreditasi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm border">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Pengalaman Relevan</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-red-500 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Pengalaman Kerja</h4>
                                <p class="text-gray-600 text-sm">Memiliki pengalaman kerja yang relevan dengan program studi
                                    yang dipilih</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <svg class="w-6 h-6 text-red-500 mt-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Pendidikan Non-formal/Informal</h4>
                                <p class="text-gray-600 text-sm">Kursus, pelatihan, workshop, atau pembelajaran mandiri yang
                                    relevan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Documents Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Dokumen yang Diperlukan
                </h2>
                <p class="text-lg text-gray-600">
                    Siapkan dokumen-dokumen berikut dalam format PDF (maksimal 5MB per file)
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Personal Documents -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Dokumen Pribadi</h3>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start space-x-2">
                            <span class="text-red-600">•</span>
                            <span>KTP/Kartu Identitas</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-red-600">•</span>
                            <span>Pas foto terbaru (3x4)</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-red-600">•</span>
                            <span>Curriculum Vitae (CV)</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-red-600">•</span>
                            <span>Surat pernyataan kebenaran data</span>
                        </li>
                    </ul>
                </div>

                <!-- Education Documents -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Dokumen Pendidikan</h3>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start space-x-2">
                            <span class="text-green-600">•</span>
                            <span>Ijazah SMA/D2/D3</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-green-600">•</span>
                            <span>Transkrip nilai</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-green-600">•</span>
                            <span>Sertifikat kursus/pelatihan</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-green-600">•</span>
                            <span>Sertifikat kompetensi (jika ada)</span>
                        </li>
                    </ul>
                </div>

                <!-- Experience Documents -->
                <div class="bg-white p-6 rounded-lg shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mr-3">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m8 0H8m8 0v2a2 2 0 01-2 2H10a2 2 0 01-2-2V8m8 0V6a2 2 0 00-2-2H10a2 2 0 00-2 2v2m0 0h8">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900">Dokumen Pengalaman</h3>
                    </div>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start space-x-2">
                            <span class="text-purple-600">•</span>
                            <span>Surat keterangan kerja</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-purple-600">•</span>
                            <span>SK pengangkatan/kontrak kerja</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-purple-600">•</span>
                            <span>Portofolio karya/proyek</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <span class="text-purple-600">•</span>
                            <span>Surat rekomendasi atasan</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 p-6 bg-yellow-50 border border-yellow-200 rounded-lg">
                <div class="flex items-start space-x-3">
                    <svg class="w-6 h-6 text-yellow-600 mt-0.5" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z">
                        </path>
                    </svg>
                    <div>
                        <h4 class="font-semibold text-yellow-800 mb-1">Catatan Penting</h4>
                        <ul class="text-yellow-700 text-sm space-y-1">
                            <li>• Semua dokumen harus dalam format PDF dengan ukuran maksimal 5MB per file</li>
                            <li>• Dokumen harus jelas dan dapat terbaca dengan baik</li>
                            <li>• Dokumen yang tidak dalam bahasa Indonesia harus disertai terjemahan resmi</li>
                            <li>• Dokumen asli akan diminta saat verifikasi</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Assessment Process Section -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Proses Asesmen
                </h2>
                <p class="text-lg text-gray-600">
                    Tahapan asesmen yang akan dilalui oleh calon peserta RPL
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div
                        class="w-16 h-16 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Verifikasi Berkas</h3>
                    <p class="text-gray-600">Pemeriksaan kelengkapan dan keaslian dokumen yang diupload</p>
                </div>

                <div class="text-center">
                    <div
                        class="w-16 h-16 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Evaluasi Kompetensi</h3>
                    <p class="text-gray-600">Penilaian kompetensi berdasarkan pengalaman dan dokumen pendukung</p>
                </div>

                <div class="text-center">
                    <div
                        class="w-16 h-16 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Asesmen Lanjutan</h3>
                    <p class="text-gray-600">Wawancara atau tes praktik jika diperlukan (opsional)</p>
                </div>

                <div class="text-center">
                    <div
                        class="w-16 h-16 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold">4</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Hasil Asesmen</h3>
                    <p class="text-gray-600">Pengumuman hasil dan jumlah SKS yang diakui</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Timeline Section -->
    <div class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Timeline Pendaftaran
                </h2>
                <p class="text-lg text-gray-600">
                    Jadwal pendaftaran dan proses asesmen RPL
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm">
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Pendaftaran Online</h3>
                            <p class="text-gray-600 mb-2">Registrasi akun dan pengisian formulir pendaftaran</p>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                Dibuka Sepanjang Tahun
                            </span>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-red-100 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Upload Dokumen</h3>
                            <p class="text-gray-600 mb-2">Upload semua dokumen persyaratan dalam format PDF</p>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                Maksimal 7 Hari setelah Registrasi
                            </span>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-yellow-100 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Proses Asesmen</h3>
                            <p class="text-gray-600 mb-2">Verifikasi berkas dan evaluasi kompetensi oleh tim asesor</p>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                14-21 Hari Kerja
                            </span>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-10 h-10 bg-purple-100 rounded-full flex items-center justify-center">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 17h5l-5 5v-5zM2 3h6l3 3h8a2 2 0 012 2v5l-3-3H9L6 7H2V3z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Pengumuman Hasil</h3>
                            <p class="text-gray-600 mb-2">Notifikasi hasil asesmen dan jumlah SKS yang diakui</p>
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Via Email & Dashboard
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Pertanyaan Umum
                </h2>
                <p class="text-lg text-gray-600">
                    Jawaban atas pertanyaan yang sering diajukan
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-6">
                <div class="bg-white border border-gray-200 rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Berapa lama proses asesmen RPL?</h3>
                        <p class="text-gray-600">Proses asesmen membutuhkan waktu 14-21 hari kerja setelah semua dokumen
                            lengkap diupload.</p>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Berapa maksimal SKS yang bisa diakui?</h3>
                        <p class="text-gray-600">Maksimal 40 SKS atau sesuai dengan peraturan akademik program studi yang
                            dipilih.</p>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Apakah ada biaya untuk RPL?</h3>
                        <p class="text-gray-600">Biaya RPL mengikuti ketentuan yang berlaku di Universitas Ubudiyah
                            Indonesia. Informasi detail akan diberikan saat proses pendaftaran.</p>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-2">Bagaimana jika dokumen saya ditolak?</h3>
                        <p class="text-gray-600">Anda akan mendapat notifikasi dengan alasan penolakan dan dapat
                            memperbaiki serta mengupload ulang dokumen yang diperlukan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-red-600 to-red-800 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Siap Memenuhi Persyaratan?
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                Persiapkan dokumen Anda dan mulai perjalanan pendidikan dengan RPL
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}"
                    class="bg-white text-red-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-semibold text-lg transition duration-300">
                    Daftar Sekarang
                </a>
                <a href="{{ route('contact') }}"
                    class="border-2 border-white text-white hover:bg-white hover:text-red-600 px-8 py-3 rounded-lg font-semibold text-lg transition duration-300">
                    Konsultasi
                </a>
            </div>
        </div>
    </div>
@endsection
