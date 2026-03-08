@extends('admin.layouts.app')

@section('title', 'Tambah Jenis Pelanggaran - SMKN 2 SIMPANG EMPAT Tanah Bumbu')

@section('topbar')
<div class="bg-white shadow-md px-8 py-4">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Tambah Jenis Pelanggaran</h2>
            <p class="text-gray-600">Tambahkan data jenis pelanggaran baru</p>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.jenis-pelanggaran.index') }}" 
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
<div class="max-w-3xl">
    <div class="bg-white rounded-xl shadow-lg p-8">
        <!-- Success Flash Message -->
        @if(session('success'))
        <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg" role="alert">
            <div class="flex items-center">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        </div>
        @endif

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

        <form action="{{ route('admin.jenis-pelanggaran.store') }}" method="POST">
            @csrf

            <!-- Kode -->
            <div class="mb-6">
                <label for="kode" class="block text-sm font-semibold text-gray-700 mb-2">Kode Pelanggaran <span class="text-red-500">*</span></label>
                <input type="text" 
                    id="kode" 
                    name="kode" 
                    value="{{ old('kode') }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Contoh: P01, P02, P03"
                    required>
                <p class="mt-1 text-sm text-gray-500">Kode unik untuk jenis pelanggaran (maksimal 10 karakter)</p>
            </div>

            <!-- Nama -->
            <div class="mb-6">
                <label for="nama" class="block text-sm font-semibold text-gray-700 mb-2">Nama Jenis Pelanggaran <span class="text-red-500">*</span></label>
                <input type="text" 
                    id="nama" 
                    name="nama" 
                    value="{{ old('nama') }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Contoh: Terlambat Sekolah"
                    required>
                <p class="mt-1 text-sm text-gray-500">Nama lengkap jenis pelanggaran</p>
            </div>

            <!-- Poin -->
            <div class="mb-6">
                <label for="poin" class="block text-sm font-semibold text-gray-700 mb-2">Poin Pelanggaran <span class="text-red-500">*</span></label>
                <input type="number" 
                    id="poin" 
                    name="poin" 
                    value="{{ old('poin') ?? 5 }}"
                    min="0"
                    max="100"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Contoh: 5"
                    required>
                <p class="mt-1 text-sm text-gray-500">Jumlah poin pelanggaran (0-100)</p>
                <div class="mt-2 flex items-center space-x-4 text-sm">
                    <span class="text-green-600">Ringan: 1-19 poin</span>
                    <span class="text-yellow-600">Sedang: 20-49 poin</span>
                    <span class="text-red-600">Berat: 50-100 poin</span>
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex items-center justify-end space-x-4 pt-6 border-t border-gray-200">
                <a href="{{ route('admin.jenis-pelanggaran.index') }}" 
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