<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama_supplier' => 'PT Maju Jaya Elektronik',
                'telepon'       => '031-5551234',
                'email'         => 'info@majujaya.co.id',
                'alamat'        => 'Jl. Raya Darmo No. 10, Surabaya',
            ],
            [
                'nama_supplier' => 'CV Berkah Komputer',
                'telepon'       => '0341-665599',
                'email'         => 'sales@berkahkomp.com',
                'alamat'        => 'Jl. Besar Ijen No. 5, Malang',
            ],
            [
                'nama_supplier' => 'UD Sumber Teknik',
                'telepon'       => '0321-881122',
                'email'         => 'sumberteknik@gmail.com',
                'alamat'        => 'Jl. Wahid Hasyim No. 20, Jombang',
            ],
            [
                'nama_supplier' => 'Toko Abadi Digital',
                'telepon'       => '021-7778899',
                'email'         => 'abadidigital@yahoo.com',
                'alamat'        => 'Jl. Mangga Dua Raya No. 3, Jakarta',
            ],
        ];

        foreach ($data as $item) {
            DB::table('suppliers')->insert(array_merge($item, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]));
        }
    }
}
