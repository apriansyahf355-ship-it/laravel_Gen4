<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SatuanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama_satuan' => 'Buah',  'singkatan' => 'bh'],
            ['nama_satuan' => 'Unit',  'singkatan' => 'unit'],
            ['nama_satuan' => 'Lusin', 'singkatan' => 'lsn'],
            ['nama_satuan' => 'Kodi',  'singkatan' => 'kdi'],
        ];

        foreach ($data as $item) {
            DB::table('satuans')->insert(array_merge($item, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]));
        }
    }
}
