<?php

namespace App\Http\Controllers;

use App\Models\Satuan;

class SatuanController extends Controller
{
    public function index()
    {
        $satuans = Satuan::withCount('barangs')->orderBy('id')->get();
        return view('satuan', compact('satuans'));
    }
}
