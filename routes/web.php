<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JenisPelanggaranController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KepalaSekolahController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PelanggaranSiswaController;
use App\Http\Controllers\PrestasiSiswaController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

// Redirect root - check authentication first
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('admin.dashboard');
    }
    return redirect()->route('login');
});

// Authentication Routes (only for guests)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

// Admin Routes (require authentication)
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    
    // Guru Routes
    Route::get('/guru', [GuruController::class, 'index'])->name('admin.guru.index');
    Route::get('/guru/create', [GuruController::class, 'create'])->name('admin.guru.create');
    Route::post('/guru', [GuruController::class, 'store'])->name('admin.guru.store');
    Route::get('/guru/{guru}/edit', [GuruController::class, 'edit'])->name('admin.guru.edit');
    Route::put('/guru/{guru}', [GuruController::class, 'update'])->name('admin.guru.update');
    Route::delete('/guru/{guru}', [GuruController::class, 'destroy'])->name('admin.guru.destroy');
    
    // Jurusan Routes
    Route::get('/jurusan', [JurusanController::class, 'index'])->name('admin.jurusan.index');
    Route::get('/jurusan/create', [JurusanController::class, 'create'])->name('admin.jurusan.create');
    Route::post('/jurusan', [JurusanController::class, 'store'])->name('admin.jurusan.store');
    Route::get('/jurusan/{jurusan}/edit', [JurusanController::class, 'edit'])->name('admin.jurusan.edit');
    Route::put('/jurusan/{jurusan}', [JurusanController::class, 'update'])->name('admin.jurusan.update');
    Route::delete('/jurusan/{jurusan}', [JurusanController::class, 'destroy'])->name('admin.jurusan.destroy');
    
    // Jenis Pelanggaran Routes
    Route::get('/jenis-pelanggaran', [JenisPelanggaranController::class, 'index'])->name('admin.jenis-pelanggaran.index');
    Route::get('/jenis-pelanggaran/create', [JenisPelanggaranController::class, 'create'])->name('admin.jenis-pelanggaran.create');
    Route::post('/jenis-pelanggaran', [JenisPelanggaranController::class, 'store'])->name('admin.jenis-pelanggaran.store');
    Route::get('/jenis-pelanggaran/{jenisPelanggaran}/edit', [JenisPelanggaranController::class, 'edit'])->name('admin.jenis-pelanggaran.edit');
    Route::put('/jenis-pelanggaran/{jenisPelanggaran}', [JenisPelanggaranController::class, 'update'])->name('admin.jenis-pelanggaran.update');
    Route::delete('/jenis-pelanggaran/{jenisPelanggaran}', [JenisPelanggaranController::class, 'destroy'])->name('admin.jenis-pelanggaran.destroy');
    
    // Kepala Sekolah Routes
    Route::get('/kepala-sekolah', [KepalaSekolahController::class, 'index'])->name('admin.kepala-sekolah.index');
    Route::get('/kepala-sekolah/create', [KepalaSekolahController::class, 'create'])->name('admin.kepala-sekolah.create');
    Route::post('/kepala-sekolah', [KepalaSekolahController::class, 'store'])->name('admin.kepala-sekolah.store');
    Route::get('/kepala-sekolah/{kepalaSekolah}/edit', [KepalaSekolahController::class, 'edit'])->name('admin.kepala-sekolah.edit');
    Route::put('/kepala-sekolah/{kepalaSekolah}', [KepalaSekolahController::class, 'update'])->name('admin.kepala-sekolah.update');
    Route::delete('/kepala-sekolah/{kepalaSekolah}', [KepalaSekolahController::class, 'destroy'])->name('admin.kepala-sekolah.destroy');
    
    // Siswa Routes
    Route::get('/siswa', [SiswaController::class, 'index'])->name('admin.siswa.index');
    Route::get('/siswa/create', [SiswaController::class, 'create'])->name('admin.siswa.create');
    Route::post('/siswa', [SiswaController::class, 'store'])->name('admin.siswa.store');
    Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('admin.siswa.edit');
    Route::put('/siswa/{siswa}', [SiswaController::class, 'update'])->name('admin.siswa.update');
    Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('admin.siswa.destroy');
    
    // Pelanggaran Siswa Routes
    Route::get('/pelanggaran-siswa', [PelanggaranSiswaController::class, 'index'])->name('admin.pelanggaran-siswa.index');
    Route::get('/pelanggaran-siswa/create', [PelanggaranSiswaController::class, 'create'])->name('admin.pelanggaran-siswa.create');
    Route::post('/pelanggaran-siswa', [PelanggaranSiswaController::class, 'store'])->name('admin.pelanggaran-siswa.store');
    Route::get('/pelanggaran-siswa/{pelanggaranSiswa}/edit', [PelanggaranSiswaController::class, 'edit'])->name('admin.pelanggaran-siswa.edit');
    Route::put('/pelanggaran-siswa/{pelanggaranSiswa}', [PelanggaranSiswaController::class, 'update'])->name('admin.pelanggaran-siswa.update');
    Route::delete('/pelanggaran-siswa/{pelanggaranSiswa}', [PelanggaranSiswaController::class, 'destroy'])->name('admin.pelanggaran-siswa.destroy');
    
    // Prestasi Siswa Routes
    Route::get('/prestasi-siswa', [PrestasiSiswaController::class, 'index'])->name('admin.prestasi-siswa.index');
    Route::get('/prestasi-siswa/create', [PrestasiSiswaController::class, 'create'])->name('admin.prestasi-siswa.create');
    Route::post('/prestasi-siswa', [PrestasiSiswaController::class, 'store'])->name('admin.prestasi-siswa.store');
    Route::get('/prestasi-siswa/{prestasiSiswa}/edit', [PrestasiSiswaController::class, 'edit'])->name('admin.prestasi-siswa.edit');
    Route::put('/prestasi-siswa/{prestasiSiswa}', [PrestasiSiswaController::class, 'update'])->name('admin.prestasi-siswa.update');
    Route::delete('/prestasi-siswa/{prestasiSiswa}', [PrestasiSiswaController::class, 'destroy'])->name('admin.prestasi-siswa.destroy');
    
    // Laporan Routes
    Route::get('/laporan', [LaporanController::class, 'index'])->name('admin.laporan.index');
    Route::get('/laporan/kepalasekolah/pdf', [LaporanController::class, 'kepalaSekolahPDF'])->name('admin.laporan.kepalasekolah.pdf');
    Route::get('/laporan/siswa/pdf', [LaporanController::class, 'siswaPDF'])->name('admin.laporan.siswa.pdf');
    Route::get('/laporan/pelanggaran-siswa/pdf', [LaporanController::class, 'pelanggaranSiswaPDF'])->name('admin.laporan.pelanggaran-siswa.pdf');
    Route::get('/laporan/jenis-pelanggaran/pdf', [LaporanController::class, 'jenisPelanggaranPDF'])->name('admin.laporan.jenis-pelanggaran.pdf');
    Route::get('/laporan/prestasi-siswa/pdf', [LaporanController::class, 'prestasiSiswaPDF'])->name('admin.laporan.prestasi-siswa.pdf');
});
