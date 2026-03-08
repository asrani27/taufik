@extends('admin.layouts.app')

@section('title', 'Tambah Siswa - SMKN 2 SIMPANG EMPAT Tanah Bumbu')

@section('topbar')
<div class="bg-white shadow-md px-8 py-4">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Tambah Siswa</h2>
            <p class="text-gray-600">Tambah data siswa baru</p>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.siswa.index') }}" 
                class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded-lg transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span>Kembali</span>
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="max-w-4xl">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <!-- Validation Errors -->
        @if ($errors->any())
        <div class="bg-red-50 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-lg" role="alert">
            <div class="flex items-start">
                <svg class="w-5 h-5 mr-3 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                </svg>
                <div>
                    <p class="font-medium mb-2">Mohon perbaiki kesalahan berikut:</p>
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endif

        <form action="{{ route('admin.siswa.store') }}" method="POST">
            @csrf

            <!-- Informasi Pribadi -->
            <div class="mb-8">
                <h3 class="text-lg font-bold text-gray-800 mb-4 pb-2 border-b border-gray-200">Informasi Pribadi</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- NIS -->
                    <div>
                        <label for="nis" class="block text-sm font-semibold text-gray-700 mb-2">NIS <span class="text-red-500">*</span></label>
                        <input type="text" 
                            id="nis" 
                            name="nis" 
                            value="{{ old('nis') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Contoh: 12345"
                            required>
                    </div>

                    <!-- Nama -->
                    <div>
                        <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" 
                            id="nama" 
                            name="nama" 
                            value="{{ old('nama') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Contoh: Ahmad Fauzi"
                            required>
                    </div>

                    <!-- Tempat Lahir -->
                    <div>
                        <label for="tempat_lahir" class="block text-sm font-semibold text-gray-700 mb-2">Tempat Lahir <span class="text-red-500">*</span></label>
                        <input type="text" 
                            id="tempat_lahir" 
                            name="tempat_lahir" 
                            value="{{ old('tempat_lahir') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Contoh: Banjarmasin"
                            required>
                    </div>

                    <!-- Tanggal Lahir -->
                    <div>
                        <label for="tanggal_lahir" class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Lahir <span class="text-red-500">*</span></label>
                        <input type="date" 
                            id="tanggal_lahir" 
                            name="tanggal_lahir" 
                            value="{{ old('tanggal_lahir') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div>
                        <label for="jenis_kelamin" class="block text-sm font-semibold text-gray-700 mb-2">Jenis Kelamin <span class="text-red-500">*</span></label>
                        <select id="jenis_kelamin" 
                            name="jenis_kelamin" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <!-- Jurusan -->
                    <div>
                        <label for="jurusan_id" class="block text-sm font-semibold text-gray-700 mb-2">Jurusan <span class="text-red-500">*</span></label>
                        <select id="jurusan_id" 
                            name="jurusan_id" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                            <option value="">Pilih Jurusan</option>
                            @foreach($jurusans as $jurusan)
                            <option value="{{ $jurusan->id }}" {{ old('jurusan_id') == $jurusan->id ? 'selected' : '' }}>
                                {{ $jurusan->nama }} ({{ $jurusan->kode }})
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- Informasi Orang Tua -->
            <div class="mb-8">
                <h3 class="text-lg font-bold text-gray-800 mb-4 pb-2 border-b border-gray-200">Informasi Orang Tua</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nama Ayah -->
                    <div>
                        <label for="nama_ayah" class="block text-sm font-semibold text-gray-700 mb-2">Nama Ayah <span class="text-red-500">*</span></label>
                        <input type="text" 
                            id="nama_ayah" 
                            name="nama_ayah" 
                            value="{{ old('nama_ayah') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Nama lengkap ayah"
                            required>
                    </div>

                    <!-- Pekerjaan Ayah -->
                    <div>
                        <label for="pekerjaan_ayah" class="block text-sm font-semibold text-gray-700 mb-2">Pekerjaan Ayah <span class="text-red-500">*</span></label>
                        <input type="text" 
                            id="pekerjaan_ayah" 
                            name="pekerjaan_ayah" 
                            value="{{ old('pekerjaan_ayah') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Contoh: Petani"
                            required>
                    </div>

                    <!-- Nama Ibu -->
                    <div>
                        <label for="nama_ibu" class="block text-sm font-semibold text-gray-700 mb-2">Nama Ibu <span class="text-red-500">*</span></label>
                        <input type="text" 
                            id="nama_ibu" 
                            name="nama_ibu" 
                            value="{{ old('nama_ibu') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Nama lengkap ibu"
                            required>
                    </div>

                    <!-- Pekerjaan Ibu -->
                    <div>
                        <label for="pekerjaan_ibu" class="block text-sm font-semibold text-gray-700 mb-2">Pekerjaan Ibu <span class="text-red-500">*</span></label>
                        <input type="text" 
                            id="pekerjaan_ibu" 
                            name="pekerjaan_ibu" 
                            value="{{ old('pekerjaan_ibu') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Contoh: Ibu Rumah Tangga"
                            required>
                    </div>
                </div>
            </div>

            <!-- Informasi Kontak -->
            <div class="mb-8">
                <h3 class="text-lg font-bold text-gray-800 mb-4 pb-2 border-b border-gray-200">Informasi Kontak</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Alamat -->
                    <div class="md:col-span-2">
                        <label for="alamat" class="block text-sm font-semibold text-gray-700 mb-2">Alamat <span class="text-red-500">*</span></label>
                        <textarea id="alamat" 
                            name="alamat" 
                            rows="3"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Alamat lengkap siswa"
                            required>{{ old('alamat') }}</textarea>
                    </div>

                    <!-- Telepon -->
                    <div>
                        <label for="telp" class="block text-sm font-semibold text-gray-700 mb-2">Nomor Telepon</label>
                        <input type="text" 
                            id="telp" 
                            name="telp" 
                            value="{{ old('telp') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            placeholder="Contoh: 08123456789">
                        <p class="mt-1 text-sm text-gray-500">Opsional</p>
                    </div>

                    <!-- Tanggal Masuk -->
                    <div>
                        <label for="tanggal_masuk" class="block text-sm font-semibold text-gray-700 mb-2">Tanggal Masuk <span class="text-red-500">*</span></label>
                        <input type="date" 
                            id="tanggal_masuk" 
                            name="tanggal_masuk" 
                            value="{{ old('tanggal_masuk') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required>
                    </div>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.siswa.index') }}" 
                    class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 px-6 rounded-lg transition-colors">
                    Batal
                </a>
                <button type="submit" 
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M5 13l4 4L19 7"/>
                    </svg>
                    <span>Simpan</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection