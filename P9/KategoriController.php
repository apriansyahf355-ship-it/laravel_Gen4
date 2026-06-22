<?php

namespace App\Http\Controllers;

use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::withCount('barangs')->orderBy('id')->get();
        return view('kategori', compact('kategoris'));
    }
}
