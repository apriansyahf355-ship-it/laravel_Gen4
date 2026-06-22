<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama_kategori' => 'Elektronik',      'deskripsi' => 'Perangkat elektronik dan gadget'],
            ['nama_kategori' => 'Alat Tulis',       'deskripsi' => 'Perlengkapan kantor dan alat tulis'],
            ['nama_kategori' => 'Komputer',         'deskripsi' => 'Hardware dan aksesoris komputer'],
            ['nama_kategori' => 'Jaringan',         'deskripsi' => 'Peralatan jaringan dan internet'],
        ];

        foreach ($data as $item) {
            DB::table('kategoris')->insert(array_merge($item, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]));
        }
    }
}
