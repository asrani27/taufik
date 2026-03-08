<?php

namespace App\Http\Controllers;

use App\Models\KepalaSekolah;
use Illuminate\Http\Request;

class KepalaSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        
        $kepalaSekolahs = KepalaSekolah::query()
            ->when($search, function($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%')
                      ->orWhere('nip', 'like', '%' . $search . '%')
                      ->orWhere('pangkat', 'like', '%' . $search . '%');
            })
            ->orderBy('tanggal_menjabat', 'desc')
            ->paginate(10);
            
        return view('admin.kepala-sekolah.index', compact('kepalaSekolahs', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kepala-sekolah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|string|max:20|unique:kepala_sekolahs',
            'nama' => 'required|string|max:255',
            'pangkat' => 'required|string|max:255',
            'tanggal_menjabat' => 'required|date',
        ]);

        KepalaSekolah::create($validated);

        return redirect()->route('admin.kepala-sekolah.index')
            ->with('success', 'Data kepala sekolah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KepalaSekolah $kepalaSekolah)
    {
        return view('admin.kepala-sekolah.edit', compact('kepalaSekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KepalaSekolah $kepalaSekolah)
    {
        $validated = $request->validate([
            'nip' => 'required|string|max:20|unique:kepala_sekolahs,nip,' . $kepalaSekolah->id,
            'nama' => 'required|string|max:255',
            'pangkat' => 'required|string|max:255',
            'tanggal_menjabat' => 'required|date',
        ]);

        $kepalaSekolah->update($validated);

        return redirect()->route('admin.kepala-sekolah.index')
            ->with('success', 'Data kepala sekolah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KepalaSekolah $kepalaSekolah)
    {
        $kepalaSekolah->delete();

        return redirect()->route('admin.kepala-sekolah.index')
            ->with('success', 'Data kepala sekolah berhasil dihapus');
    }
}
