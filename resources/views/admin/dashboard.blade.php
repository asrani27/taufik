@extends('admin.layouts.app')

@section('title', 'Dashboard Admin - SMKN 2 SIMPANG EMPAT Tanah Bumbu')

@section('topbar')
<div class="bg-white shadow-md px-8 py-4">
    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Dashboard Admin</h2>
            <p class="text-gray-600">Selamat datang, {{ Auth::user()->name }}!</p>
        </div>
        <div class="flex items-center space-x-4">
            <span class="text-gray-600">{{ now()->format('l, d F Y') }}</span>
        </div>
    </div>
</div>
@endsection

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Total Users -->
    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-blue-900">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm font-semibold">Total Pengguna</p>
                <p class="text-3xl font-bold text-gray-800 mt-1">{{ $totalUsers }}</p>
            </div>
            <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Active Sessions -->
    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-green-600">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm font-semibold">Sesi Aktif</p>
                <p class="text-3xl font-bold text-gray-800 mt-1">1</p>
            </div>
            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- System Status -->
    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-yellow-500">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm font-semibold">Status Sistem</p>
                <p class="text-3xl font-bold text-gray-800 mt-1">Online</p>
            </div>
            <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Messages -->
    <div class="bg-white rounded-xl shadow-lg p-6 border-l-4 border-purple-600">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-gray-600 text-sm font-semibold">Pesan Baru</p>
                <p class="text-3xl font-bold text-gray-800 mt-1">0</p>
            </div>
            <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- Welcome Card -->
<div class="bg-gradient-to-r from-blue-900 to-blue-800 rounded-xl shadow-lg p-8 text-white mb-8">
    <h3 class="text-2xl font-bold mb-2">Selamat Datang di Dashboard Admin</h3>
    <p class="text-blue-100 mb-4">Sistem Informasi Manajemen Sekolah SMKN 2 SIMPANG EMPAT Tanah Bumbu</p>
    <div class="flex items-center space-x-4">
        <a href="#"
            class="bg-white text-blue-900 font-semibold py-2 px-6 rounded-lg hover:bg-blue-50 transition-colors">
            Lihat Panduan
        </a>
        <a href="#"
            class="bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-600 transition-colors">
            Bantuan
        </a>
    </div>
</div>

<!-- Recent Activity -->
<div class="bg-white rounded-xl shadow-lg p-6">
    <h3 class="text-xl font-bold text-gray-800 mb-4">Aktivitas Terbaru</h3>
    <div class="space-y-4">
        <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-lg">
            <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                <svg class="w-5 h-5 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
            <div class="flex-1">
                <p class="font-semibold text-gray-800">{{ Auth::user()->name }} berhasil login</p>
                <p class="text-sm text-gray-600">{{ now()->format('H:i') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection