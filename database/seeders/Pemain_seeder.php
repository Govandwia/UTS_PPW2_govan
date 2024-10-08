<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Pemain_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('pemain')->insert([
                'nama_pemain' => fake() -> sentence(3) ,
                'no_punggung' => fake() -> numberBetween(1, 100),
                'posisi' => fake()->sentence(1),
            ]);
        }
    }
}
