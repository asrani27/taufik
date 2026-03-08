<?php

namespace App\Http\Controllers;

use App\Models\PrestasiSiswa;
use App\Models\Siswa;
use App\Models\KepalaSekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        
        $prestasis = PrestasiSiswa::with(['siswa', 'kepalaSekolah'])
            ->when($search, function ($query, $search) {
                $query->where('nomor', 'like', "%{$search}%")
                    ->orWhere('deskripsi', 'like', "%{$search}%")
                    ->orWhereHas('siswa', function ($query) use ($search) {
                        $query->where('nama', 'like', "%{$search}%")
                            ->orWhere('nis', 'like', "%{$search}%");
                    })
                    ->orWhereHas('kepalaSekolah', function ($query) use ($search) {
                        $query->where('nama', 'like', "%{$search}%")
                            ->orWhere('nip', 'like', "%{$search}%");
                    });
            })
            ->latest('tanggal')
            ->latest()
            ->paginate(10);

        return view('admin.prestasi-siswa.index', compact('prestasis', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswas = Siswa::all();
        $kepalaSekolahs = KepalaSekolah::all();
        
        return view('admin.prestasi-siswa.create', compact('siswas', 'kepalaSekolahs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'siswa_id' => 'required|exists:siswas,id',
            'kepala_sekolah_id' => 'required|exists:kepala_sekolahs,id',
            'deskripsi' => 'required|string',
            'catatan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validated['nomor'] = PrestasiSiswa::generateNomor();

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('prestasi-foto', 'public');
            $validated['foto'] = $path;
        }

        PrestasiSiswa::create($validated);

        return redirect()->route('admin.prestasi-siswa.index')
            ->with('success', 'Prestasi siswa berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PrestasiSiswa $prestasiSiswa)
    {
        $siswas = Siswa::all();
        $kepalaSekolahs = KepalaSekolah::all();
        
        return view('admin.prestasi-siswa.edit', compact('prestasiSiswa', 'siswas', 'kepalaSekolahs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PrestasiSiswa $prestasiSiswa)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'siswa_id' => 'required|exists:siswas,id',
            'kepala_sekolah_id' => 'required|exists:kepala_sekolahs,id',
            'deskripsi' => 'required|string',
            'catatan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            // Delete old photo
            if ($prestasiSiswa->foto) {
                Storage::disk('public')->delete($prestasiSiswa->foto);
            }
            
            $path = $request->file('foto')->store('prestasi-foto', 'public');
            $validated['foto'] = $path;
        }

        $prestasiSiswa->update($validated);

        return redirect()->route('admin.prestasi-siswa.index')
            ->with('success', 'Prestasi siswa berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PrestasiSiswa $prestasiSiswa)
    {
        // Delete photo if exists
        if ($prestasiSiswa->foto) {
            Storage::disk('public')->delete($prestasiSiswa->foto);
        }

        $prestasiSiswa->delete();

        return redirect()->route('admin.prestasi-siswa.index')
            ->with('success', 'Prestasi siswa berhasil dihapus.');
    }
}