@extends('applicant.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="space-y-6">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-2xl font-bold text-gray-900">Selamat Datang,
                        {{ $applicant->full_name ?? auth()->user()->name }}!</h1>
                    <p class="text-gray-600 mt-1">
                        @if ($applicant)
                            Nomor Pendaftaran: <span
                                class="font-semibold text-red-600">{{ $applicant->registration_number }}</span>
                        @else
                            Silakan lengkapi data profil Anda untuk memulai proses RPL.
                        @endif
                    </p>
                </div>
                <div class="text-right">
                    <div class="text-sm text-gray-500">Status Aplikasi</div>
                    @if ($applicant)
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
                    @else
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800">
                            <i class="fas fa-exclamation-triangle mr-1"></i> Belum Lengkap
                        </span>
                    @endif
                </div>
            </div>
        </div>

        @if ($applicant)
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Profile Completion -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100">
                            <i class="fas fa-user text-blue-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Kelengkapan Profil</p>
                            <p class="text-2xl font-semibold text-gray-900">{{ $stats['profile_completion'] }}%</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-blue-600 h-2 rounded-full" style="width: {{ $stats['profile_completion'] }}%">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documents Uploaded -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100">
                            <i class="fas fa-folder text-green-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Dokumen Diupload</p>
                            <p class="text-2xl font-semibold text-gray-900">{{ $stats['documents_uploaded'] }}/7</p>
                        </div>
                    </div>
                </div>

                <!-- Documents Verified -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100">
                            <i class="fas fa-check-circle text-green-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Dokumen Terverifikasi</p>
                            <p class="text-2xl font-semibold text-gray-900">{{ $stats['documents_verified'] }}</p>
                        </div>
                    </div>
                </div>

                <!-- Documents Pending -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100">
                            <i class="fas fa-clock text-yellow-600 text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-600">Menunggu Review</p>
                            <p class="text-2xl font-semibold text-gray-900">{{ $stats['documents_pending'] }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Document Status -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Status Dokumen</h3>
                    <div class="space-y-3">
                        @foreach ($requiredDocuments as $type => $name)
                            @php
                                $document = $uploadedDocuments->get($type);
                            @endphp
                            <div class="flex items-center justify-between py-2 border-b border-gray-100 last:border-b-0">
                                <div class="flex items-center">
                                    @if ($document)
                                        @if ($document->verification_status === 'accepted')
                                            <i class="fas fa-check-circle text-green-600 mr-3"></i>
                                        @elseif($document->verification_status === 'rejected')
                                            <i class="fas fa-times-circle text-red-600 mr-3"></i>
                                        @else
                                            <i class="fas fa-clock text-yellow-600 mr-3"></i>
                                        @endif
                                    @else
                                        <i class="fas fa-upload text-gray-400 mr-3"></i>
                                    @endif
                                    <span class="text-sm font-medium text-gray-900">{{ $name }}</span>
                                </div>
                                <div>
                                    @if ($document)
                                        @if ($document->verification_status === 'accepted')
                                            <span
                                                class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded">Terverifikasi</span>
                                        @elseif($document->verification_status === 'rejected')
                                            <span class="text-xs bg-red-100 text-red-800 px-2 py-1 rounded">Ditolak</span>
                                        @else
                                            <span
                                                class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded">Pending</span>
                                        @endif
                                    @else
                                        <span class="text-xs bg-gray-100 text-gray-800 px-2 py-1 rounded">Belum
                                            Upload</span>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('applicant.documents.index') }}"
                            class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-lg hover:bg-red-700 transition duration-150">
                            <i class="fas fa-folder-open mr-2"></i>
                            Kelola Dokumen
                        </a>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Tindakan Cepat</h3>
                    <div class="space-y-3">
                        @if ($stats['profile_completion'] < 100)
                            <a href="{{ route('applicant.profile.edit') }}"
                                class="flex items-center p-3 bg-blue-50 rounded-lg hover:bg-blue-100 transition duration-150">
                                <i class="fas fa-user-edit text-blue-600 mr-3"></i>
                                <div>
                                    <p class="font-medium text-blue-900">Lengkapi Profil</p>
                                    <p class="text-sm text-blue-700">Lengkapi data profil Anda
                                        ({{ $stats['profile_completion'] }}%)</p>
                                </div>
                            </a>
                        @endif

                        @if ($stats['documents_uploaded'] < 7)
                            <a href="{{ route('applicant.documents.index') }}"
                                class="flex items-center p-3 bg-green-50 rounded-lg hover:bg-green-100 transition duration-150">
                                <i class="fas fa-upload text-green-600 mr-3"></i>
                                <div>
                                    <p class="font-medium text-green-900">Upload Dokumen</p>
                                    <p class="text-sm text-green-700">Upload dokumen yang diperlukan
                                        ({{ $stats['documents_uploaded'] }}/7)</p>
                                </div>
                            </a>
                        @endif

                        @if ($stats['documents_rejected'] > 0)
                            <a href="{{ route('applicant.documents.index') }}"
                                class="flex items-center p-3 bg-red-50 rounded-lg hover:bg-red-100 transition duration-150">
                                <i class="fas fa-exclamation-triangle text-red-600 mr-3"></i>
                                <div>
                                    <p class="font-medium text-red-900">Dokumen Ditolak</p>
                                    <p class="text-sm text-red-700">{{ $stats['documents_rejected'] }} dokumen perlu
                                        diperbaiki</p>
                                </div>
                            </a>
                        @endif

                        <a href="{{ route('applicant.profile.show') }}"
                            class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition duration-150">
                            <i class="fas fa-eye text-gray-600 mr-3"></i>
                            <div>
                                <p class="font-medium text-gray-900">Lihat Profil</p>
                                <p class="text-sm text-gray-700">Review data profil lengkap Anda</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            @if ($recentActivities->count() > 0)
                <!-- Recent Activities -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Aktivitas Terbaru</h3>
                    <div class="space-y-3">
                        @foreach ($recentActivities as $activity)
                            <div class="flex items-center p-3 bg-gray-50 rounded-lg">
                                <i class="fas fa-history text-gray-600 mr-3"></i>
                                <div class="flex-1">
                                    <p class="text-sm font-medium text-gray-900">{{ $activity->status }}</p>
                                    <p class="text-xs text-gray-600">{{ $activity->created_at->diffForHumans() }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        @else
            <!-- No Profile Yet -->
            <div class="bg-white rounded-lg shadow-md p-8 text-center">
                <div class="max-w-md mx-auto">
                    <i class="fas fa-user-plus text-gray-400 text-6xl mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Data Profil</h3>
                    <p class="text-gray-600 mb-6">Silakan lengkapi data profil Anda terlebih dahulu untuk memulai proses
                        pendaftaran RPL.</p>
                    <a href="{{ route('applicant.profile.create') }}"
                        class="inline-flex items-center px-6 py-3 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition duration-150">
                        <i class="fas fa-plus mr-2"></i>
                        Buat Profil Sekarang
                    </a>
                </div>
            </div>
        @endif
    </div>
@endsection
