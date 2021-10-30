<?php

use Illuminate\Database\Seeder;
use App\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'nama' => 'Samsung',
            'stok' => '10',
            'harga' => '20000000',
        ]);

        Barang::create([
            'nama' => 'Oppo',
            'stok' => '15',
            'harga' => '2100000',
        ]);
        Barang::create([
            'nama' => 'Vivo',
            'stok' => '12',
            'harga' => '12500000',
        ]);
        Barang::create([
            'nama' => 'Xiaomi',
            'stok' => '25',
            'harga' => '10000000',
        ]);
    }
}
