<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = [
            'nama'          => 'Fulan',
            'nim'           => '2024001234',
            'program_studi' => 'Sistem Informasi',
            'semester'      => 2,
            'hobi'          => 'Menulis Kode',
            'email'         => 'fulan@example.com',
            'program'       => 'PeTIK II Jombang',
            'instansi'      => 'YBM PLN',
        ];

        return view('about', compact('about'));
    }
}
