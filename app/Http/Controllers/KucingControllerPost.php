<?php

namespace App\Http\Controllers;

use App\Models\kucingkeren;
use Illuminate\Http\Request;

class KucingControllerPost extends Controller
{
    // crud
    // create
    // read (done)
    // update
    // delete
    // filter
    // search


    public function index() {
        // $posts = kucingkeren::paginate();
        // $posts = kucingkeren::all();
        // $posts = kucingkeren::get();
        $posts = kucingkeren::latest()->paginate(10);

        return view('posts.index',compact('posts'));
    }
    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = new kucingkeren();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'post created successfully');

    }
    
    public function edit($id) {
        $post = kucingkeren::findOrFail($id);
        return view('posts.edit', compact('post'));
    }
    
    public function update(Request $request, $id) {
        $request->validate([
            'gambar' => 'required',
            'nama' => 'required',
            'stock' => 'required',
            'berat' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'kondisi' => 'required',
        ]);
    
        $post = kucingkeren::findOrFail($id);
        $post->update([
            'gambar' => $request->gambar,
            'nama' => $request->nama,
            'stock' => $request->stock,
            'berat' => $request->berat,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'kondisi' => $request->kondisi,
        ]);
    
        return redirect()->route('posts.index')->with('success', 'post updated successfully');
    }
    public function delete($id) {
        $post = kucingkeren::find($id);
        $post->delete();
    
        return redirect()->route('posts.index')->with('success', 'post deleted successfully');
    }
    
}
