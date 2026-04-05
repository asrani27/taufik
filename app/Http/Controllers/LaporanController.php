<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    /**
     * Display laporan index page.
     */
    public function index()
    {
        return view('admin.laporan.index');
    }

    /**
     * Generate PDF for Kepala Sekolah report.
     */
    public function kepalaSekolahPDF()
    {
        // Get Kepala Sekolah data
        $kepalaSekolahs = \App\Models\KepalaSekolah::orderBy('tanggal_menjabat', 'desc')->get();

        $pdf = Pdf::loadView('admin.laporan.pdf.kepalasekolah', compact('kepalaSekolahs'))
            ->setPaper('a4', 'landscape');
        
        return $pdf->stream('laporan-kepala-sekolah-' . date('Y-m-d') . '.pdf');
    }

    /**
     * Generate PDF for Siswa report.
     */
    public function siswaPDF()
    {
        // Get Siswa data with jurusan relationship
        $siswas = \App\Models\Siswa::with('jurusan')->orderBy('nama')->get();

        $pdf = Pdf::loadView('admin.laporan.pdf.siswa', compact('siswas'))
            ->setPaper('a4', 'landscape');
        
        return $pdf->stream('laporan-siswa-' . date('Y-m-d') . '.pdf');
    }

    /**
     * Generate PDF for Pelanggaran Siswa report.
     */
    public function pelanggaranSiswaPDF()
    {
        // Get Pelanggaran Siswa data with relationships
        $pelanggaranSiswas = \App\Models\PelanggaranSiswa::with(['siswa', 'guru', 'jenisPelanggaran'])
            ->orderBy('tanggal', 'desc')
            ->orderBy('jam', 'desc')
            ->get();

        $pdf = Pdf::loadView('admin.laporan.pdf.pelanggaran-siswa', compact('pelanggaranSiswas'))
            ->setPaper('a4', 'landscape');
        
        return $pdf->stream('laporan-pelanggaran-siswa-' . date('Y-m-d') . '.pdf');
    }

    /**
     * Generate PDF for Jenis Pelanggaran report.
     */
    public function jenisPelanggaranPDF()
    {
        // Get Jenis Pelanggaran data
        $jenisPelanggarans = \App\Models\JenisPelanggaran::orderBy('kode')->get();

        $pdf = Pdf::loadView('admin.laporan.pdf.jenis-pelanggaran', compact('jenisPelanggarans'))
            ->setPaper('a4', 'landscape');
        
        return $pdf->stream('laporan-jenis-pelanggaran-' . date('Y-m-d') . '.pdf');
    }

    /**
     * Generate PDF for Prestasi Siswa report.
     */
    public function prestasiSiswaPDF()
    {
        // Get Prestasi Siswa data with relationships
        $prestasiSiswas = \App\Models\PrestasiSiswa::with(['siswa', 'kepalaSekolah'])
            ->orderBy('tanggal', 'desc')
            ->get();

        $pdf = Pdf::loadView('admin.laporan.pdf.prestasi-siswa', compact('prestasiSiswas'))
            ->setPaper('a4', 'landscape');
        
        return $pdf->stream('laporan-prestasi-siswa-' . date('Y-m-d') . '.pdf');
    }
}
