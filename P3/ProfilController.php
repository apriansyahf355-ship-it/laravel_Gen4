<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $biodata = [
            'nama'  => 'Fulan',
            'kelas' => 'XII RPL 1',
        ];

        return view('profil', compact('biodata'));
    }
}
