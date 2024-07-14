<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run()
    {
        Barang::create([
            'nama' => 'Barang Contoh',
            'kategori' => 'Kategori Contoh',
            'jumlah' => 10,
            'harga' => 10000,
        ]);
    }
}
