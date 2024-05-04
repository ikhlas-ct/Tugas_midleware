<?php

namespace App\Http\Controllers;

use App\Models\KucingKeren;
use Illuminate\Http\Request;

class KucingController extends Controller
{
    public function getForm()
    {
        return view('kucingtambah');
    }

    public function sendRequest(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'umur' => 'required|numeric',
            'berat' => 'required|numeric',
            'harga' => 'required|numeric',
            'stock' => 'required|numeric',
            'kondisi' => 'required',
            'deskripsi' => 'required',
        ], [
            'gambar.required' => 'Gambar harus diisi.',
            'nama.required' => 'Nama harus diisi.',
            'umur.required' => 'Umur harus diisi.',
            'umur.numeric' => 'Umur harus berupa angka.',
            'berat.required' => 'Berat harus diisi.',
            'berat.numeric' => 'Berat harus berupa angka.',
            'harga.required' => 'Harga harus diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'stock.required' => 'Stock harus diisi.',
            'stock.numeric' => 'Stock harus berupa angka.',
            'kondisi.required' => 'Kondisi harus dipilih.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
        ]);
   
        KucingKeren::create([
            'gambar' => $request->gambar,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'berat' => $request->berat,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'kondisi' => $request->kondisi,
            'deskripsi' => $request->deskripsi,
        ]);
        
        

        return redirect('/kucing-amademy')->with('success', 'Data kucing berhasil ditambahkan.');
    }
}
