<!-- Sidebar -->
<div class="fixed left-0 top-0 h-full w-64 bg-blue-900 text-white shadow-xl z-50">
    <!-- School Logo and Title -->
    <div class="p-6 border-b border-blue-800">
        <div class="flex items-center space-x-3">
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center">
                <svg class="w-8 h-8 text-blue-900" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                </svg>
            </div>
            <div>
                <h1 class="font-bold text-lg leading-tight">SMKN 2</h1>
                <p class="text-blue-200 text-sm">SIMPANG EMPAT</p>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="p-4">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-blue-800 text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.guru.index') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Guru</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.kepala-sekolah.index') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Kepala Sekolah</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.jurusan.index') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                    <span>Jurusan</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.jenis-pelanggaran.index') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <span>Jenis Pelanggaran</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.siswa.index') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <span>Siswa</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pelanggaran-siswa.index') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>Pelanggaran Siswa</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.prestasi-siswa.index') }}"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                    </svg>
                    <span>Prestasi Siswa</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <span>Laporan</span>
                </a>
            </li>
        </ul>
    </nav>

    <!-- User Info -->
    <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-blue-800 bg-blue-900">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-blue-700 rounded-full flex items-center justify-center">
                <span class="font-bold text-lg">{{ substr(Auth::user()->name, 0, 1) }}</span>
            </div>
            <div class="flex-1 min-w-0">
                <p class="font-semibold text-sm truncate">{{ Auth::user()->name }}</p>
                <p class="text-blue-200 text-xs truncate">{{ Auth::user()->username }}</p>
            </div>
        </div>
        <form action="{{ route('admin.logout') }}" method="POST" class="mt-3">
            @csrf
            <button type="submit"
                class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors flex items-center justify-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span>Keluar</span>
            </button>
        </form>
    </div>
</div>