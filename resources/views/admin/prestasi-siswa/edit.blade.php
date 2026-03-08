@extends('admin.layouts.app')

@section('title', 'Edit Prestasi Siswa - SMKN 2 SIMPANG EMPAT Tanah Bumbu')

@section('topbar')
<div class="bg-white shadow-md px-8 py-4">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Edit Prestasi Siswa</h2>
            <p class="text-gray-600">Form edit data prestasi siswa</p>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.prestasi-siswa.index') }}" 
                class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded-lg transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                <span>Kembali</span>
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <form action="{{ route('admin.prestasi-siswa.update', $prestasiSiswa) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Tanggal -->
            <div class="mb-6">
                <label for="tanggal" class="block text-sm font-semibold text-gray-700 mb-2">Tanggal <span class="text-red-500">*</span></label>
                <input type="date" 
                    id="tanggal" 
                    name="tanggal" 
                    value="{{ old('tanggal', $prestasiSiswa->tanggal->format('Y-m-d')) }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('tanggal') border-red-500 @enderror"
                    required>
                @error('tanggal')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Siswa -->
            <div class="mb-6">
                <label for="siswa_id" class="block text-sm font-semibold text-gray-700 mb-2">Siswa <span class="text-red-500">*</span></label>
                <select id="siswa_id" 
                    name="siswa_id" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('siswa_id') border-red-500 @enderror"
                    required>
                    <option value="">Pilih Siswa</option>
                    @foreach($siswas as $siswa)
                        <option value="{{ $siswa->id }}" {{ old('siswa_id', $prestasiSiswa->siswa_id) == $siswa->id ? 'selected' : '' }}>
                            {{ $siswa->nama }} ({{ $siswa->nis }})
                        </option>
                    @endforeach
                </select>
                @error('siswa_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Kepala Sekolah -->
            <div class="mb-6">
                <label for="kepala_sekolah_id" class="block text-sm font-semibold text-gray-700 mb-2">Kepala Sekolah <span class="text-red-500">*</span></label>
                <select id="kepala_sekolah_id" 
                    name="kepala_sekolah_id" 
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('kepala_sekolah_id') border-red-500 @enderror"
                    required>
                    <option value="">Pilih Kepala Sekolah</option>
                    @foreach($kepalaSekolahs as $kepala)
                        <option value="{{ $kepala->id }}" {{ old('kepala_sekolah_id', $prestasiSiswa->kepala_sekolah_id) == $kepala->id ? 'selected' : '' }}>
                            {{ $kepala->nama }} ({{ $kepala->nip }})
                        </option>
                    @endforeach
                </select>
                @error('kepala_sekolah_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi -->
            <div class="mb-6">
                <label for="deskripsi" class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi Prestasi <span class="text-red-500">*</span></label>
                <textarea id="deskripsi" 
                    name="deskripsi" 
                    rows="5"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('deskripsi') border-red-500 @enderror"
                    placeholder="Deskripsikan prestasi yang dicapai oleh siswa..."
                    required>{{ old('deskripsi', $prestasiSiswa->deskripsi) }}</textarea>
                @error('deskripsi')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Catatan -->
            <div class="mb-6">
                <label for="catatan" class="block text-sm font-semibold text-gray-700 mb-2">Catatan</label>
                <textarea id="catatan" 
                    name="catatan" 
                    rows="3"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('catatan') border-red-500 @enderror"
                    placeholder="Catatan tambahan (opsional)...">{{ old('catatan', $prestasiSiswa->catatan) }}</textarea>
                @error('catatan')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Foto -->
            <div class="mb-6">
                <label for="foto" class="block text-sm font-semibold text-gray-700 mb-2">Foto Prestasi</label>
                <input type="file" 
                    id="foto" 
                    name="foto" 
                    accept="image/*"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('foto') border-red-500 @enderror">
                @error('foto')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                <p class="mt-2 text-sm text-gray-500">Format: JPEG, PNG, JPG, GIF. Maksimal: 2MB</p>
                
                @if($prestasiSiswa->foto)
                    <div class="mt-4">
                        <p class="text-sm font-semibold text-gray-700 mb-2">Foto Saat Ini:</p>
                        <img src="{{ asset('storage/' . $prestasiSiswa->foto) }}" 
                            alt="Foto Prestasi" 
                            class="w-48 h-48 object-cover rounded-lg border border-gray-300">
                    </div>
                @endif
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-end space-x-4">
                <a href="{{ route('admin.prestasi-siswa.index') }}" 
                    class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg transition-colors">
                    Batal
                </a>
                <button type="submit" 
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>
                    </svg>
                    <span>Update</span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection