<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = [
            ['nama_produk' => 'Laptop Asus VivoBook',  'harga' => 7500000],
            ['nama_produk' => 'Mouse Wireless Logitech', 'harga' => 350000],
            ['nama_produk' => 'Keyboard Mechanical',   'harga' => 850000],
            ['nama_produk' => 'Monitor 24 inch FHD',   'harga' => 2200000],
        ];

        return view('produk', compact('produk'));
    }
}
