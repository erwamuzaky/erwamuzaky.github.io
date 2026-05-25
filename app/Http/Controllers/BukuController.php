<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use App\Models\Penerbit;
use App\Models\Kategori;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbuku = Buku::all();
        return view('buku.index', compact('allbuku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        return view('buku.create', compact('penerbit', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //buat validasi input
        $validatedData = $request->validate([
            'judul_buku' => 'required|max:100',
            'pengarang' => 'required|max:100',
            'tahun_terbit' => 'required|max:100',
            'kategori_id' => 'required|max:100',
            'penerbit_id' => 'required|max:100',
        ]);

        //simpan data ke database
        Buku::create($validatedData);

        //redirect ke halaman index
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $Buku)
    {
        return view('buku.show', compact('Buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $Buku)
    {
        $penerbit = Penerbit::all();
        $kategori = Kategori::all();
        return view('Buku.edit', compact('Buku', 'penerbit', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $Buku)
    {
        //buat validasi input
        $validatedData = $request->validate([
            'judul_buku' => 'required|max:100',
            'pengarang' => 'required|max:100',
            'tahun_terbit' => 'required|max:100',
            'kategori_id' => 'required|max:100',
            'penerbit_id' => 'required|max:100',
        ]);

        //simpan data ke database
        $Buku->update($validatedData);

        //redirect ke halaman index
        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $Buku)
    {
        $Buku->delete();
        return redirect()->route('buku.index');
    }
}

