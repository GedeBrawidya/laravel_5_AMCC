<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class produkcontroller extends Controller
{
    public  function index() {
        $produks = produk::all();
        return view('produk',[
            'produks' => $produks
        ]);
    }
}
