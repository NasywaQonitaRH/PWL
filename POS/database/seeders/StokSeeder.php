<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'barang_id'    => $i,
                'jumlah_stok'  => rand(10, 100),
                'tanggal_stok' => now()->format('Y-m-d'),
                'created_at'   => now(),
                'updated_at'   => now(),
            ];
        }

        DB::table('t_stok')->insert($data);
    }
}