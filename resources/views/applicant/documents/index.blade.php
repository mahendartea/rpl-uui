@extends('applicant.layout')

@section('title', 'Dokumen')

@section('content')
    <div class="space-y-6">
        <!-- Header -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-900">Manajemen Dokumen</h2>
            <p class="text-gray-600 mt-1">Upload dan kelola dokumen yang diperlukan untuk pendaftaran RPL</p>
        </div>

        <!-- Upload Form -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Upload Dokumen Baru</h3>

            <form action="{{ route('applicant.documents.store') }}" method="POST" enctype="multipart/form-data"
                class="space-y-4">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="document_type" class="block text-sm font-medium text-gray-700 mb-2">
                            Jenis Dokumen <span class="text-red-500">*</span>
                        </label>
                        <select id="document_type" name="document_type"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('document_type') border-red-500 @enderror"
                            required>
                            <option value="">Pilih Jenis Dokumen</option>
                            @foreach ($requiredDocuments as $type => $doc)
                                @if (!$uploadedDocuments->has($type))
                                    <option value="{{ $type }}"
                                        {{ old('document_type') === $type ? 'selected' : '' }}>
                                        {{ $doc['name'] }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('document_type')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="file" class="block text-sm font-medium text-gray-700 mb-2">
                            File Dokumen <span class="text-red-500">*</span>
                        </label>
                        <input type="file" id="file" name="file" accept=".pdf,.jpg,.jpeg,.png"
                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('file') border-red-500 @enderror"
                            required>
                        <p class="mt-1 text-xs text-gray-500">Format: PDF, JPG, PNG. Maksimal 5MB</p>
                        @error('file')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-2">
                        Catatan (Opsional)
                    </label>
                    <textarea id="notes" name="notes" rows="2"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500"
                        placeholder="Tambahkan catatan atau keterangan dokumen...">{{ old('notes') }}</textarea>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition duration-150">
                        <i class="fas fa-upload mr-2"></i>
                        Upload Dokumen
                    </button>
                </div>
            </form>
        </div>

        <!-- Documents List -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Daftar Dokumen yang Diperlukan</h3>
            </div>

            <div class="p-6">
                <div class="grid gap-4">
                    @foreach ($requiredDocuments as $type => $doc)
                        @php
                            $document = $uploadedDocuments->get($type);
                        @endphp

                        <div
                            class="border border-gray-200 rounded-lg p-4
                        @if ($document) @if ($document->verification_status === 'accepted') border-green-200 bg-green-50
                            @elseif($document->verification_status === 'rejected') border-red-200 bg-red-50
                            @else border-yellow-200 bg-yellow-50 @endif
@else
border-gray-200 bg-gray-50
                        @endif">

                            <div class="flex items-center justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-3">
                                        @if ($document)
                                            @if ($document->verification_status === 'accepted')
                                                <i class="fas fa-check-circle text-green-600 text-xl"></i>
                                            @elseif($document->verification_status === 'rejected')
                                                <i class="fas fa-times-circle text-red-600 text-xl"></i>
                                            @else
                                                <i class="fas fa-clock text-yellow-600 text-xl"></i>
                                            @endif
                                        @else
                                            <i class="fas fa-upload text-gray-400 text-xl"></i>
                                        @endif

                                        <div>
                                            <h4 class="font-medium text-gray-900">{{ $doc['name'] }}</h4>
                                            <p class="text-sm text-gray-600">{{ $doc['description'] }}</p>

                                            @if ($document)
                                                <div class="mt-1 flex items-center space-x-4 text-xs text-gray-500">
                                                    <span><i
                                                            class="fas fa-file mr-1"></i>{{ $document->original_filename }}</span>
                                                    <span><i
                                                            class="fas fa-weight mr-1"></i>{{ number_format($document->file_size / 1024, 1) }}
                                                        KB</span>
                                                    <span><i
                                                            class="fas fa-calendar mr-1"></i>{{ $document->created_at->format('d/m/Y H:i') }}</span>
                                                </div>

                                                @if ($document->notes)
                                                    <p class="mt-1 text-xs text-gray-600 italic">Catatan:
                                                        {{ $document->notes }}</p>
                                                @endif

                                                @if ($document->assessor_notes)
                                                    <div class="mt-2 p-2 bg-blue-50 border border-blue-200 rounded text-xs">
                                                        <strong class="text-blue-800">Catatan Asesor:</strong>
                                                        <p class="text-blue-700 mt-1">{{ $document->assessor_notes }}</p>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-2">
                                    @if ($document)
                                        <!-- Status Badge -->
                                        @if ($document->verification_status === 'accepted')
                                            <span
                                                class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-green-100 text-green-800">
                                                <i class="fas fa-check mr-1"></i> Terverifikasi
                                            </span>
                                        @elseif($document->verification_status === 'rejected')
                                            <span
                                                class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-red-100 text-red-800">
                                                <i class="fas fa-times mr-1"></i> Ditolak
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-yellow-100 text-yellow-800">
                                                <i class="fas fa-clock mr-1"></i> Pending
                                            </span>
                                        @endif

                                        <!-- Action Buttons -->
                                        <a href="{{ route('applicant.documents.download', $document) }}"
                                            class="inline-flex items-center px-2 py-1 text-xs bg-blue-100 text-blue-700 rounded hover:bg-blue-200 transition duration-150"
                                            title="Download">
                                            <i class="fas fa-download"></i>
                                        </a>

                                        @if ($document->verification_status !== 'accepted')
                                            <form action="{{ route('applicant.documents.destroy', $document) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center px-2 py-1 text-xs bg-red-100 text-red-700 rounded hover:bg-red-200 transition duration-150"
                                                    title="Hapus"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus dokumen ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        @endif
                                    @else
                                        <span
                                            class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-gray-100 text-gray-800">
                                            <i class="fas fa-upload mr-1"></i> Belum Upload
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Summary -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Ringkasan Status Dokumen</h3>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="bg-blue-50 rounded-lg p-4">
                    <div class="flex items-center">
                        <i class="fas fa-folder text-blue-600 text-2xl mr-3"></i>
                        <div>
                            <p class="text-sm text-blue-600">Total Dokumen</p>
                            <p class="text-xl font-semibold text-blue-900">{{ $uploadedDocuments->count() }}/7</p>
                        </div>
                    </div>
                </div>

                <div class="bg-green-50 rounded-lg p-4">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-600 text-2xl mr-3"></i>
                        <div>
                            <p class="text-sm text-green-600">Terverifikasi</p>
                            <p class="text-xl font-semibold text-green-900">
                                {{ $uploadedDocuments->where('verification_status', 'accepted')->count() }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-yellow-50 rounded-lg p-4">
                    <div class="flex items-center">
                        <i class="fas fa-clock text-yellow-600 text-2xl mr-3"></i>
                        <div>
                            <p class="text-sm text-yellow-600">Pending</p>
                            <p class="text-xl font-semibold text-yellow-900">
                                {{ $uploadedDocuments->where('verification_status', 'pending')->count() }}</p>
                        </div>
                    </div>
                </div>

                <div class="bg-red-50 rounded-lg p-4">
                    <div class="flex items-center">
                        <i class="fas fa-times-circle text-red-600 text-2xl mr-3"></i>
                        <div>
                            <p class="text-sm text-red-600">Ditolak</p>
                            <p class="text-xl font-semibold text-red-900">
                                {{ $uploadedDocuments->where('verification_status', 'rejected')->count() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            @if ($uploadedDocuments->count() === 7 && $uploadedDocuments->where('verification_status', 'accepted')->count() === 7)
                <div class="mt-4 p-4 bg-green-100 border border-green-300 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle text-green-600 mr-2"></i>
                        <p class="text-green-800 font-medium">
                            Selamat! Semua dokumen telah diupload dan terverifikasi. Aplikasi RPL Anda sudah lengkap.
                        </p>
                    </div>
                </div>
            @elseif($uploadedDocuments->count() < 7)
                <div class="mt-4 p-4 bg-blue-100 border border-blue-300 rounded-lg">
                    <div class="flex items-center">
                        <i class="fas fa-info-circle text-blue-600 mr-2"></i>
                        <p class="text-blue-800">
                            Silakan upload {{ 7 - $uploadedDocuments->count() }} dokumen lagi untuk melengkapi persyaratan
                            RPL.
                        </p>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <script>
        // Auto-select document type when file is chosen
        document.getElementById('file').addEventListener('change', function(e) {
            const filename = e.target.files[0]?.name.toLowerCase();
            const documentTypeSelect = document.getElementById('document_type');

            if (filename && !documentTypeSelect.value) {
                if (filename.includes('ijazah')) {
                    documentTypeSelect.value = 'ijazah';
                } else if (filename.includes('transkrip')) {
                    documentTypeSelect.value = 'transkrip';
                } else if (filename.includes('cv')) {
                    documentTypeSelect.value = 'cv';
                } else if (filename.includes('ktp')) {
                    documentTypeSelect.value = 'ktp';
                } else if (filename.includes('foto')) {
                    documentTypeSelect.value = 'foto';
                }
            }
        });
    </script>
@endsection
