@extends('admin.layouts.app')

@section('title', 'Edit Pelanggaran Siswa')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white rounded-lg shadow-lg">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200">
            <h2 class="text-2xl font-bold text-gray-800">Edit Pelanggaran Siswa</h2>
        </div>

        <!-- Form -->
        <form action="{{ route('admin.pelanggaran-siswa.update', $pelanggaranSiswa) }}" method="POST" class="p-6">
            @csrf
            @method('PUT')

            <!-- Info Pelanggaran -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Informasi Pelanggaran
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Siswa -->
                    <div>
                        <label for="siswa_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Siswa <span class="text-red-500">*</span>
                        </label>
                        <select id="siswa_id" name="siswa_id" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Pilih Siswa</option>
                            @foreach($siswas as $siswa)
                            <option value="{{ $siswa->id }}" {{ $pelanggaranSiswa->siswa_id == $siswa->id ? 'selected' : '' }}>
                                {{ $siswa->nama }} ({{ $siswa->nis }})
                            </option>
                            @endforeach
                        </select>
                        @error('siswa_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Guru -->
                    <div>
                        <label for="guru_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Guru Pelapor <span class="text-red-500">*</span>
                        </label>
                        <select id="guru_id" name="guru_id" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Pilih Guru</option>
                            @foreach($gurus as $guru)
                            <option value="{{ $guru->id }}" {{ $pelanggaranSiswa->guru_id == $guru->id ? 'selected' : '' }}>
                                {{ $guru->nama }} ({{ $guru->nip }})
                            </option>
                            @endforeach
                        </select>
                        @error('guru_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tanggal -->
                    <div>
                        <label for="tanggal" class="block text-sm font-medium text-gray-700 mb-2">
                            Tanggal Pelanggaran <span class="text-red-500">*</span>
                        </label>
                        <input type="date" id="tanggal" name="tanggal" required
                               value="{{ $pelanggaranSiswa->tanggal->format('Y-m-d') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('tanggal')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Jam -->
                    <div>
                        <label for="jam" class="block text-sm font-medium text-gray-700 mb-2">
                            Jam Pelanggaran <span class="text-red-500">*</span>
                        </label>
                        <input type="time" id="jam" name="jam" required
                               value="{{ $pelanggaranSiswa->jam->format('H:i') }}"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                        @error('jam')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Jenis Pelanggaran -->
                    <div class="md:col-span-2">
                        <label for="jenis_pelanggaran_id" class="block text-sm font-medium text-gray-700 mb-2">
                            Jenis Pelanggaran <span class="text-red-500">*</span>
                        </label>
                        <select id="jenis_pelanggaran_id" name="jenis_pelanggaran_id" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Pilih Jenis Pelanggaran</option>
                            @foreach($jenisPelanggarans as $jenis)
                            <option value="{{ $jenis->id }}" {{ $pelanggaranSiswa->jenis_pelanggaran_id == $jenis->id ? 'selected' : '' }}>
                                {{ $jenis->nama }} (Poin: {{ $jenis->poin }})
                            </option>
                            @endforeach
                        </select>
                        @error('jenis_pelanggaran_id')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Detail Pelanggaran -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                    Detail Pelanggaran
                </h3>
                <div class="grid grid-cols-1 gap-6">
                    <!-- Deskripsi -->
                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700 mb-2">
                            Deskripsi Pelanggaran
                        </label>
                        <textarea id="deskripsi" name="deskripsi" rows="3"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                  placeholder="Jelaskan detail pelanggaran yang terjadi...">{{ $pelanggaranSiswa->deskripsi }}</textarea>
                        @error('deskripsi')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Catatan -->
                    <div>
                        <label for="catatan" class="block text-sm font-medium text-gray-700 mb-2">
                            Catatan Tambahan
                        </label>
                        <textarea id="catatan" name="catatan" rows="3"
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                  placeholder="Catatan tambahan dari guru...">{{ $pelanggaranSiswa->catatan }}</textarea>
                        @error('catatan')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Tindak Lanjut -->
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Tindak Lanjut
                </h3>
                <div>
                    <label for="tindak_lanjut" class="block text-sm font-medium text-gray-700 mb-2">
                        Tindak Lanjut
                    </label>
                    <textarea id="tindak_lanjut" name="tindak_lanjut" rows="3"
                              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                              placeholder="Tindak lanjut yang akan dilakukan...">{{ $pelanggaranSiswa->tindak_lanjut }}</textarea>
                    @error('tindak_lanjut')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Buttons -->
            <div class="flex items-center justify-end space-x-4">
                <a href="{{ route('admin.pelanggaran-siswa.index') }}" 
                   class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-6 rounded-lg transition-colors">
                    Batal
                </a>
                <button type="submit" 
                        class="bg-blue-900 hover:bg-blue-800 text-white font-semibold py-2 px-6 rounded-lg transition-colors">
                    Update Pelanggaran
                </button>
            </div>
        </form>
    </div>
</div>
@endsection