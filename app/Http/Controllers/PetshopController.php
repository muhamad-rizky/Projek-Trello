<?php

namespace App\Http\Controllers;

use App\Models\petshop;
use Illuminate\Http\Request;

class PetshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pets = petshop::all();
        return view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'nama' => 'required',
                'jenis' => 'required',
                'pemilik' => 'required',
            ],);
            petshop::create($request->all());

            return redirect()->back()->with('success', 'Berhasil Menambah Data hewan!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(petshop $petshop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $petshop = petshop::find($id);
        return view('pets.edit', compact('petshop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'pemilik' => 'required'
        ]);
        petshop::where('id', $id)->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'pemilik' => $request->pemilik
        ]);

        return redirect()->route('pets.index')->with('success', 'Berhasil Mengubah Data hewan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        petshop::where('id', $id)->delete();

        return redirect()->back()->with('delete', 'Berhasil Menghapus Data hewan!');
    }
}
