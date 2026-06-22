<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kode_barang'  => 'BRG-001',
                'nama_barang'  => 'Laptop Asus VivoBook 15',
                'kategori_id'  => 3,
                'satuan_id'    => 2,
                'supplier_id'  => 1,
                'stok'         => 12,
                'harga_beli'   => 6800000,
                'harga_jual'   => 7500000,
                'keterangan'   => 'Intel Core i5, RAM 8GB, SSD 512GB',
            ],
            [
                'kode_barang'  => 'BRG-002',
                'nama_barang'  => 'Mouse Wireless Logitech M185',
                'kategori_id'  => 3,
                'satuan_id'    => 1,
                'supplier_id'  => 2,
                'stok'         => 50,
                'harga_beli'   => 120000,
                'harga_jual'   => 175000,
                'keterangan'   => 'Wireless 2.4GHz, baterai AA',
            ],
            [
                'kode_barang'  => 'BRG-003',
                'nama_barang'  => 'Switch TP-Link 8 Port',
                'kategori_id'  => 4,
                'satuan_id'    => 2,
                'supplier_id'  => 4,
                'stok'         => 8,
                'harga_beli'   => 180000,
                'harga_jual'   => 230000,
                'keterangan'   => 'Unmanaged, 10/100 Mbps',
            ],
            [
                'kode_barang'  => 'BRG-004',
                'nama_barang'  => 'Flashdisk Sandisk 32GB',
                'kategori_id'  => 1,
                'satuan_id'    => 1,
                'supplier_id'  => 1,
                'stok'         => 100,
                'harga_beli'   => 55000,
                'harga_jual'   => 80000,
                'keterangan'   => 'USB 3.0, CZ48 Ultra',
            ],
            [
                'kode_barang'  => 'BRG-005',
                'nama_barang'  => 'Buku Tulis Sidu 40 Lembar',
                'kategori_id'  => 2,
                'satuan_id'    => 3,
                'supplier_id'  => 3,
                'stok'         => 30,
                'harga_beli'   => 18000,
                'harga_jual'   => 25000,
                'keterangan'   => '1 lusin isi 12 buku',
            ],
            [
                'kode_barang'  => 'BRG-006',
                'nama_barang'  => 'Keyboard Mechanical Rexus',
                'kategori_id'  => 3,
                'satuan_id'    => 2,
                'supplier_id'  => 2,
                'stok'         => 15,
                'harga_beli'   => 380000,
                'harga_jual'   => 490000,
                'keterangan'   => 'Blue switch, full size, RGB',
            ],
        ];

        foreach ($data as $item) {
            DB::table('barangs')->insert(array_merge($item, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]));
        }
    }
}
