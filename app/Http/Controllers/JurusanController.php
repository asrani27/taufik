<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->query('search');
        
        $jurusans = Jurusan::query()
            ->when($search, function($query) use ($search) {
                $query->where('kode', 'like', '%' . $search . '%')
                      ->orWhere('nama', 'like', '%' . $search . '%');
            })
            ->orderBy('kode', 'asc')
            ->paginate(10);
            
        return view('admin.jurusan.index', compact('jurusans', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:10|unique:jurusans',
            'nama' => 'required|string|max:255',
        ]);

        Jurusan::create($validated);

        return redirect()->route('admin.jurusan.index')
            ->with('success', 'Data jurusan berhasil ditambahkan');
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
    public function edit(Jurusan $jurusan)
    {
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $validated = $request->validate([
            'kode' => 'required|string|max:10|unique:jurusans,kode,' . $jurusan->id,
            'nama' => 'required|string|max:255',
        ]);

        $jurusan->update($validated);

        return redirect()->route('admin.jurusan.index')
            ->with('success', 'Data jurusan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();

        return redirect()->route('admin.jurusan.index')
            ->with('success', 'Data jurusan berhasil dihapus');
    }
}
