@extends('applicant.layout')

@section('title', 'Buat Profil')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-md">
            <div class="px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-semibold text-gray-900">Buat Data Profil RPL</h2>
                <p class="text-gray-600 mt-1">Lengkapi data profil Anda untuk memulai proses pendaftaran RPL</p>
            </div>

            <form action="{{ route('applicant.profile.store') }}" method="POST" class="p-6 space-y-6">
                @csrf

                <!-- Personal Information -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Informasi Pribadi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="full_name" class="block text-sm font-medium text-gray-700 mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('full_name') border-red-500 @enderror"
                                required>
                            @error('full_name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="place_of_birth" class="block text-sm font-medium text-gray-700 mb-2">
                                Tempat Lahir <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="place_of_birth" name="place_of_birth"
                                value="{{ old('place_of_birth') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('place_of_birth') border-red-500 @enderror"
                                required>
                            @error('place_of_birth')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="date_of_birth" class="block text-sm font-medium text-gray-700 mb-2">
                                Tanggal Lahir <span class="text-red-500">*</span>
                            </label>
                            <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('date_of_birth') border-red-500 @enderror"
                                required>
                            @error('date_of_birth')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="gender" class="block text-sm font-medium text-gray-700 mb-2">
                                Jenis Kelamin <span class="text-red-500">*</span>
                            </label>
                            <select id="gender" name="gender"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('gender') border-red-500 @enderror"
                                required>
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('gender')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="md:col-span-2">
                            <label for="address" class="block text-sm font-medium text-gray-700 mb-2">
                                Alamat Lengkap <span class="text-red-500">*</span>
                            </label>
                            <textarea id="address" name="address" rows="3"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('address') border-red-500 @enderror"
                                required>{{ old('address') }}</textarea>
                            @error('address')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone_number" class="block text-sm font-medium text-gray-700 mb-2">
                                Nomor Telepon <span class="text-red-500">*</span>
                            </label>
                            <input type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                placeholder="08xxxxxxxxxx"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('phone_number') border-red-500 @enderror"
                                required>
                            @error('phone_number')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr class="border-gray-200">

                <!-- Academic Information -->
                <div>
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Informasi Akademik</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="graduate_category_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Kategori Lulusan <span class="text-red-500">*</span>
                            </label>
                            <select id="graduate_category_id" name="graduate_category_id"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('graduate_category_id') border-red-500 @enderror"
                                required>
                                <option value="">Pilih Kategori Lulusan</option>
                                @foreach ($graduateCategories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('graduate_category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('graduate_category_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="study_program_id" class="block text-sm font-medium text-gray-700 mb-2">
                                Program Studi RPL <span class="text-red-500">*</span>
                            </label>
                            <select id="study_program_id" name="study_program_id"
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('study_program_id') border-red-500 @enderror"
                                required>
                                <option value="">Pilih Program Studi</option>
                                @foreach ($studyPrograms as $program)
                                    <option value="{{ $program->id }}"
                                        {{ old('study_program_id') == $program->id ? 'selected' : '' }}>
                                        {{ $program->name }} ({{ $program->degree }})
                                    </option>
                                @endforeach
                            </select>
                            @error('study_program_id')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>

                <hr class="border-gray-200">

                <!-- Motivation -->
                <div>
                    <label for="motivation" class="block text-sm font-medium text-gray-700 mb-2">
                        Motivasi dan Tujuan Mengikuti RPL
                    </label>
                    <textarea id="motivation" name="motivation" rows="4"
                        class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-red-500 focus:border-red-500 @error('motivation') border-red-500 @enderror"
                        placeholder="Jelaskan motivasi dan tujuan Anda mengikuti program RPL...">{{ old('motivation') }}</textarea>
                    <p class="mt-1 text-sm text-gray-500">Opsional: Ceritakan mengapa Anda tertarik mengikuti program RPL
                    </p>
                    @error('motivation')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                    <a href="{{ route('applicant.dashboard') }}"
                        class="inline-flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition duration-150">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali
                    </a>

                    <button type="submit"
                        class="inline-flex items-center px-6 py-2 bg-red-600 text-white font-medium rounded-lg hover:bg-red-700 transition duration-150">
                        <i class="fas fa-save mr-2"></i>
                        Simpan Profil
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Auto format phone number
        document.getElementById('phone_number').addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('0')) {
                e.target.value = value;
            } else if (value.startsWith('62')) {
                e.target.value = '0' + value.substring(2);
            }
        });
    </script>
@endsection
