<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::with(['kategori', 'satuan', 'supplier'])
                         ->orderBy('kode_barang')
                         ->get();
        return view('barang', compact('barangs'));
    }
}
