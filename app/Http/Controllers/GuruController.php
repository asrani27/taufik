<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $gurus = Guru::when($search, function ($query, $search) {
            return $query->where('nama', 'like', "%{$search}%")
                ->orWhere('nip', 'like', "%{$search}%")
                ->orWhere('jabatan', 'like', "%{$search}%");
        })
        ->orderBy('nama', 'asc')
        ->paginate(10);

        return view('admin.guru.index', compact('gurus', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nip' => 'required|string|max:20|unique:gurus',
            'nama' => 'required|string|max:255',
            'tmt' => 'required|date',
            'pangkat' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        Guru::create($validated);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        $validated = $request->validate([
            'nip' => [
                'required',
                'string',
                'max:20',
                Rule::unique('gurus')->ignore($guru->id),
            ],
            'nama' => 'required|string|max:255',
            'tmt' => 'required|date',
            'pangkat' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $guru->update($validated);

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('admin.guru.index')
            ->with('success', 'Data guru berhasil dihapus.');
    }
}