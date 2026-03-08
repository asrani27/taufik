<?php

namespace App\Http\Controllers;

use App\Models\PelanggaranSiswa;
use App\Models\Siswa;
use App\Models\Guru;
use App\Models\JenisPelanggaran;
use Illuminate\Http\Request;

class PelanggaranSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $pelanggarans = PelanggaranSiswa::with(['siswa', 'guru', 'jenisPelanggaran'])
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nomor', 'like', "%{$search}%")
                      ->orWhereHas('siswa', function ($q) use ($search) {
                          $q->where('nama', 'like', "%{$search}%")
                            ->orWhere('nis', 'like', "%{$search}%");
                      })
                      ->orWhereHas('guru', function ($q) use ($search) {
                          $q->where('nama', 'like', "%{$search}%");
                      })
                      ->orWhereHas('jenisPelanggaran', function ($q) use ($search) {
                          $q->where('nama', 'like', "%{$search}%");
                      });
                });
            })
            ->orderBy('tanggal', 'desc')
            ->orderBy('jam', 'desc')
            ->paginate(10);

        return view('admin.pelanggaran-siswa.index', compact('pelanggarans', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswas = Siswa::orderBy('nama')->get();
        $gurus = Guru::orderBy('nama')->get();
        $jenisPelanggarans = JenisPelanggaran::orderBy('nama')->get();
        
        return view('admin.pelanggaran-siswa.create', compact('siswas', 'gurus', 'jenisPelanggarans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'guru_id' => 'required|exists:gurus,id',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'jenis_pelanggaran_id' => 'required|exists:jenis_pelanggarans,id',
            'deskripsi' => 'nullable|string',
            'catatan' => 'nullable|string',
            'tindak_lanjut' => 'nullable|string',
        ]);

        PelanggaranSiswa::create([
            'nomor' => PelanggaranSiswa::generateNomor(),
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'jenis_pelanggaran_id' => $request->jenis_pelanggaran_id,
            'deskripsi' => $request->deskripsi,
            'catatan' => $request->catatan,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);

        return redirect()->route('admin.pelanggaran-siswa.index')
            ->with('success', 'Pelanggaran siswa berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(PelanggaranSiswa $pelanggaranSiswa)
    {
        return redirect()->route('admin.pelanggaran-siswa.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PelanggaranSiswa $pelanggaranSiswa)
    {
        $siswas = Siswa::orderBy('nama')->get();
        $gurus = Guru::orderBy('nama')->get();
        $jenisPelanggarans = JenisPelanggaran::orderBy('nama')->get();
        
        return view('admin.pelanggaran-siswa.edit', compact('pelanggaranSiswa', 'siswas', 'gurus', 'jenisPelanggarans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PelanggaranSiswa $pelanggaranSiswa)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'guru_id' => 'required|exists:gurus,id',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'jenis_pelanggaran_id' => 'required|exists:jenis_pelanggarans,id',
            'deskripsi' => 'nullable|string',
            'catatan' => 'nullable|string',
            'tindak_lanjut' => 'nullable|string',
        ]);

        $pelanggaranSiswa->update([
            'siswa_id' => $request->siswa_id,
            'guru_id' => $request->guru_id,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'jenis_pelanggaran_id' => $request->jenis_pelanggaran_id,
            'deskripsi' => $request->deskripsi,
            'catatan' => $request->catatan,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);

        return redirect()->route('admin.pelanggaran-siswa.index')
            ->with('success', 'Pelanggaran siswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PelanggaranSiswa $pelanggaranSiswa)
    {
        $pelanggaranSiswa->delete();

        return redirect()->route('admin.pelanggaran-siswa.index')
            ->with('success', 'Pelanggaran siswa berhasil dihapus!');
    }
}