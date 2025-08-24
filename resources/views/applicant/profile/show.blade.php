@extends('applicant.layout')

@section('title', 'Profil Saya')

@section('content')
    <div class="max-w-4xl mx-auto space-y-6">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-xl font-semibold text-gray-900">Profil Pendaftar RPL</h2>
                    <p class="text-gray-600 mt-1">Nomor Pendaftaran: <span
                            class="font-semibold text-red-600">{{ $applicant->registration_number }}</span></p>
                </div>
                <a href="{{ route('applicant.profile.edit') }}"
                    class="inline-flex items-center px-4 py-2 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition duration-150">
                    <i class="fas fa-edit mr-2"></i>
                    Edit Profil
                </a>
            </div>
        </div>

        <!-- Personal Information -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Informasi Pribadi</h3>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Nama Lengkap</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $applicant->full_name }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Tempat, Tanggal
                            Lahir</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $applicant->place_of_birth }},
                            {{ $applicant->date_of_birth->format('d F Y') }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Jenis Kelamin</label>
                        <p class="mt-1 text-lg text-gray-900">
                            {{ $applicant->gender === 'male' ? 'Laki-laki' : 'Perempuan' }}
                        </p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Nomor Telepon</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $applicant->phone_number }}</p>
                    </div>

                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Alamat
                            Lengkap</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $applicant->address }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Academic Information -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Informasi Akademik</h3>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Kategori
                            Lulusan</label>
                        <div class="mt-1">
                            <p class="text-lg text-gray-900">{{ $applicant->graduateCategory->category_name }}</p>
                            @if ($applicant->graduateCategory->description)
                                <p class="text-sm text-gray-600 mt-1">{{ $applicant->graduateCategory->description }}</p>
                            @endif
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Program Studi
                            RPL</label>
                        <div class="mt-1">
                            <p class="text-lg text-gray-900">{{ $applicant->studyProgram->name }}</p>
                            <p class="text-sm text-gray-600">{{ $applicant->studyProgram->degree }}</p>
                            @if ($applicant->studyProgram->faculty)
                                <p class="text-sm text-gray-600">Fakultas {{ $applicant->studyProgram->faculty }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Application Status -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Status Aplikasi</h3>
            </div>
            <div class="p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-600">Status Saat Ini</p>
                        <div class="mt-1">
                            <span
                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium
                            @if ($applicant->application_status === 'draft') bg-gray-100 text-gray-800
                            @elseif($applicant->application_status === 'submitted') bg-blue-100 text-blue-800
                            @elseif($applicant->application_status === 'under_review') bg-yellow-100 text-yellow-800
                            @elseif($applicant->application_status === 'accepted') bg-green-100 text-green-800
                            @elseif($applicant->application_status === 'rejected') bg-red-100 text-red-800 @endif">
                                @switch($applicant->application_status)
                                    @case('draft')
                                        <i class="fas fa-edit mr-1"></i> Draft
                                    @break

                                    @case('submitted')
                                        <i class="fas fa-paper-plane mr-1"></i> Diajukan
                                    @break

                                    @case('under_review')
                                        <i class="fas fa-search mr-1"></i> Dalam Review
                                    @break

                                    @case('accepted')
                                        <i class="fas fa-check-circle mr-1"></i> Diterima
                                    @break

                                    @case('rejected')
                                        <i class="fas fa-times-circle mr-1"></i> Ditolak
                                    @break
                                @endswitch
                            </span>
                        </div>
                    </div>

                    <div class="text-right">
                        <p class="text-sm text-gray-600">Tanggal Pendaftaran</p>
                        <p class="text-lg font-medium text-gray-900">{{ $applicant->created_at->format('d F Y') }}</p>
                    </div>
                </div>

                @if ($applicant->application_status === 'draft')
                    <div class="mt-4 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                        <div class="flex items-start">
                            <i class="fas fa-info-circle text-blue-600 mt-0.5 mr-2"></i>
                            <div>
                                <p class="text-blue-800 font-medium">Status Draft</p>
                                <p class="text-blue-700 text-sm mt-1">
                                    Aplikasi Anda masih dalam status draft. Pastikan semua data profil sudah lengkap dan
                                    upload semua dokumen yang diperlukan sebelum mengajukan aplikasi.
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif($applicant->application_status === 'submitted')
                    <div class="mt-4 p-4 bg-blue-50 border border-blue-200 rounded-lg">
                        <div class="flex items-start">
                            <i class="fas fa-clock text-blue-600 mt-0.5 mr-2"></i>
                            <div>
                                <p class="text-blue-800 font-medium">Aplikasi Diajukan</p>
                                <p class="text-blue-700 text-sm mt-1">
                                    Aplikasi RPL Anda telah diajukan dan sedang menunggu review dari tim asesor. Kami akan
                                    menginformasikan perkembangan selanjutnya melalui email.
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif($applicant->application_status === 'under_review')
                    <div class="mt-4 p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                        <div class="flex items-start">
                            <i class="fas fa-search text-yellow-600 mt-0.5 mr-2"></i>
                            <div>
                                <p class="text-yellow-800 font-medium">Dalam Proses Review</p>
                                <p class="text-yellow-700 text-sm mt-1">
                                    Aplikasi dan dokumen Anda sedang dalam proses review oleh tim asesor. Proses ini
                                    membutuhkan waktu 7-14 hari kerja.
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif($applicant->application_status === 'accepted')
                    <div class="mt-4 p-4 bg-green-50 border border-green-200 rounded-lg">
                        <div class="flex items-start">
                            <i class="fas fa-check-circle text-green-600 mt-0.5 mr-2"></i>
                            <div>
                                <p class="text-green-800 font-medium">Aplikasi Diterima</p>
                                <p class="text-green-700 text-sm mt-1">
                                    Selamat! Aplikasi RPL Anda telah diterima. Silakan menunggu informasi lebih lanjut
                                    mengenai proses selanjutnya melalui email.
                                </p>
                            </div>
                        </div>
                    </div>
                @elseif($applicant->application_status === 'rejected')
                    <div class="mt-4 p-4 bg-red-50 border border-red-200 rounded-lg">
                        <div class="flex items-start">
                            <i class="fas fa-times-circle text-red-600 mt-0.5 mr-2"></i>
                            <div>
                                <p class="text-red-800 font-medium">Aplikasi Ditolak</p>
                                <p class="text-red-700 text-sm mt-1">
                                    Mohon maaf, aplikasi RPL Anda belum dapat kami terima. Silakan periksa catatan dari
                                    asesor dan perbaiki dokumen yang diperlukan.
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        @if ($applicant->motivation)
            <!-- Motivation -->
            <div class="bg-white rounded-lg shadow-md">
                <div class="px-6 py-4 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Motivasi dan Tujuan</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-700 leading-relaxed">{{ $applicant->motivation }}</p>
                </div>
            </div>
        @endif

        <!-- Account Information -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Informasi Akun</h3>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Email</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $applicant->user->email }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Username</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $applicant->user->name }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Tanggal
                            Bergabung</label>
                        <p class="mt-1 text-lg text-gray-900">{{ $applicant->user->created_at->format('d F Y') }}</p>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-500 uppercase tracking-wide">Email
                            Terverifikasi</label>
                        <p class="mt-1">
                            @if ($applicant->user->email_verified_at)
                                <span
                                    class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-800">
                                    <i class="fas fa-check-circle mr-1"></i> Terverifikasi
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-red-100 text-red-800">
                                    <i class="fas fa-times-circle mr-1"></i> Belum Terverifikasi
                                </span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Tindakan Cepat</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <a href="{{ route('applicant.documents.index') }}"
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-150">
                    <i class="fas fa-folder-open text-red-600 text-xl mr-3"></i>
                    <div>
                        <p class="font-medium text-gray-900">Kelola Dokumen</p>
                        <p class="text-sm text-gray-600">Upload dan pantau status dokumen</p>
                    </div>
                </a>

                <a href="{{ route('applicant.dashboard') }}"
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-150">
                    <i class="fas fa-chart-bar text-blue-600 text-xl mr-3"></i>
                    <div>
                        <p class="font-medium text-gray-900">Dashboard</p>
                        <p class="text-sm text-gray-600">Lihat ringkasan status aplikasi</p>
                    </div>
                </a>

                <a href="{{ route('contact') }}"
                    class="flex items-center p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-150">
                    <i class="fas fa-envelope text-green-600 text-xl mr-3"></i>
                    <div>
                        <p class="font-medium text-gray-900">Hubungi Kami</p>
                        <p class="text-sm text-gray-600">Kontak tim RPL UUI</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
