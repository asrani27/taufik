<?php

namespace App\Http\Controllers;

use App\Models\JenisPelanggaran;
use Illuminate\Http\Request;

class JenisPelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisPelanggarans = JenisPelanggaran::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.jenis-pelanggaran.index', compact('jenisPelanggarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jenis-pelanggaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:10|unique:jenis_pelanggarans,kode',
            'nama' => 'required|string|max:255',
            'poin' => 'required|integer|min:0|max:100',
        ]);

        JenisPelanggaran::create($validated);

        return redirect()->route('admin.jenis-pelanggaran.index')
            ->with('success', 'Jenis pelanggaran berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisPelanggaran $jenisPelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisPelanggaran $jenisPelanggaran)
    {
        return view('admin.jenis-pelanggaran.edit', compact('jenisPelanggaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisPelanggaran $jenisPelanggaran)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:10|unique:jenis_pelanggarans,kode,' . $jenisPelanggaran->id,
            'nama' => 'required|string|max:255',
            'poin' => 'required|integer|min:0|max:100',
        ]);

        $jenisPelanggaran->update($validated);

        return redirect()->route('admin.jenis-pelanggaran.index')
            ->with('success', 'Jenis pelanggaran berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisPelanggaran $jenisPelanggaran)
    {
        $jenisPelanggaran->delete();

        return redirect()->route('admin.jenis-pelanggaran.index')
            ->with('success', 'Jenis pelanggaran berhasil dihapus!');
    }
}
