@extends('admin.layouts.app')

@section('title', 'Pelanggaran Siswa - SMKN 2 SIMPANG EMPAT Tanah Bumbu')

@section('topbar')
<div class="bg-white shadow-md px-8 py-4">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Pelanggaran Siswa</h2>
            <p class="text-gray-600">Kelola data pelanggaran siswa</p>
        </div>
        <div class="flex items-center space-x-4">
            <a href="{{ route('admin.pelanggaran-siswa.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span>Tambah Pelanggaran</span>
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="space-y-6">
    <!-- Search Bar -->
    <div class="bg-white rounded-xl shadow-lg p-6">
        <form action="{{ route('admin.pelanggaran-siswa.index') }}" method="GET" class="flex items-center space-x-4">
            <div class="flex-1">
                <input type="text" name="search" value="{{ $search ?? '' }}"
                    placeholder="Cari berdasarkan nomor, nama siswa, NIS, nama guru, atau jenis pelanggaran..."
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <span>Cari</span>
            </button>
            @if($search)
            <a href="{{ route('admin.pelanggaran-siswa.index') }}"
                class="bg-gray-200 hover:bg-gray-300 text-gray-700 font-semibold py-3 px-6 rounded-lg transition-colors">
                Reset
            </a>
            @endif
        </form>
    </div>

    <!-- Success Flash Message -->
    @if(session('success'))
    <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-lg" role="alert">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    </div>
    @endif

    <!-- Data Table -->
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="overflow-x-auto">

            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Nomor</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Siswa</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Guru</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Tanggal & Jam</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Jenis Pelanggaran</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Tindak Lanjut</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                            Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($pelanggarans as $pelanggaran)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                            {{ $pelanggaran->nomor }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <p class="font-medium text-gray-900">{{ $pelanggaran->siswa->nama }}</p>
                            <p class="text-gray-500">{{ $pelanggaran->siswa->nis }}</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <p class="text-gray-900">{{ $pelanggaran->guru->nama }}</p>
                            <p class="text-gray-500">{{ $pelanggaran->guru->nip }}</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <p class="text-gray-900">{{ $pelanggaran->tanggal->format('d/m/Y') }}</p>
                            <p class="text-gray-500">{{ $pelanggaran->jam->format('H:i') }}</p>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <p class="text-gray-900">{{ $pelanggaran->jenisPelanggaran->nama }}</p>
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                Poin: {{ $pelanggaran->jenisPelanggaran->poin }}
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            @if($pelanggaran->tindak_lanjut)
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                {{ Str::limit($pelanggaran->tindak_lanjut, 20) }}
                            </span>
                            @else
                            <span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                Belum ada
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('admin.pelanggaran-siswa.edit', $pelanggaran) }}"
                                    class="text-blue-600 hover:text-blue-800 transition-colors" title="Edit">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </a>
                                <form action="{{ route('admin.pelanggaran-siswa.destroy', $pelanggaran) }}"
                                    method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus pelanggaran ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 transition-colors"
                                        title="Hapus">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <p class="text-gray-500 text-lg">Tidak ada data pelanggaran siswa</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($pelanggarans->hasPages())
        <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
            {{ $pelanggarans->appends(['search' => $search])->links() }}
        </div>
        @endif
    </div>
</div>
@endsection