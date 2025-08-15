<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    // READ
    public function index()
    {
        $mobil = Mobil::all();
        return view('mobil.index', compact('mobil'));
    }

    // CREATE FORM
    public function create()
    {
        $mobil = Mobil::all();
        return view('mobil.create');
    }

    // CREATE ACTION
    public function store(Request $request)
    {
        $request->validate([
            'merek' => 'required|max:16',
            'tipe' => 'required|max:32',
            'warna' => 'required|max:16',
            'jumlah_roda' => 'required|integer',
            'nomor_mesin' => 'required|max:64',
            'gambar' => 'nullable|max:255'
        ]);

        Mobil::create($request->all());
        return redirect()->route('mobil.index')->with('success', 'Data berhasil ditambahkan');
    }

    // EDIT FORM
    public function edit(Mobil $mobil)
    {
        $mobil = Mobil::find();
        return view('mobil.edit', compact('mobil'));
    }

    public function show(Mobil $mobil)
    {
        $mobil = Mobil::find();
        return view('mobil.show', compact('mobil'));
    }

    // UPDATE ACTION
    public function update(Request $request, Mobil $mobil)
    {
        $request->validate([
            'merek' => 'required|max:16',
            'tipe' => 'required|max:32',
            'warna' => 'required|max:16',
            'jumlah_roda' => 'required|integer',
            'nomor_mesin' => 'required|max:64',
            'gambar' => 'nullable|max:255'
        ]);

        $mobil->update($request->all());
        return redirect()->route('mobil.index')->with('success', 'Data berhasil diupdate');
    }

    // DELETE
    public function destroy(Mobil $mobil)
    {
        $mobil->delete();
        return redirect()->route('mobil.index')->with('success', 'Data berhasil dihapus');
    }
}