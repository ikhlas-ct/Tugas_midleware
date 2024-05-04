<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KucingControllerProduct extends Controller
{
    public function index()
    {
        $produk = DB::table('kucingkeren')->get();

        return view('kucingtampil', compact('produk'));

    }  
}
