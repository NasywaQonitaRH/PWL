<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'user_id'            => rand(1,3),
                'tanggal_penjualan'  => now()->format('Y-m-d'),
                'total_harga'        => rand(100000, 500000),
                'created_at'         => now(),
                'updated_at'         => now(),
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}