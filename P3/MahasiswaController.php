<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            ['nama' => 'Ahmad Fauzi',    'jurusan' => 'Teknik Informatika'],
            ['nama' => 'Siti Rahmawati', 'jurusan' => 'Sistem Informasi'],
            ['nama' => 'Budi Santoso',   'jurusan' => 'Teknik Komputer'],
            ['nama' => 'Dewi Lestari',   'jurusan' => 'Manajemen Informatika'],
        ];

        return view('mahasiswa', compact('mahasiswa'));
    }
}
