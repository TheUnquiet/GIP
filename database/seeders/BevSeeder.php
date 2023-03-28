<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Water
        DB::table('drinks')->insert([
            'type' => 'water',
            'name' => 'Spa Reine',
            'price' => 1.10,
            'unit' => '1.5 Liter',
        ]);

        DB::table('drinks')->insert([
            'type' => 'water',
            'name' => 'Spa Reine',
            'price' => 0.86,
            'unit' => '1 L',
        ]);

        DB::table('drinks')->insert([
            'type' => 'water',
            'name' => 'Spa Reine',
            'price' => 1.5,
            'unit' => '2 L',
        ]);

        DB::table('drinks')->insert([
            'type' => 'water',
            'name' => 'Spa Reine',
            'price' => 3.20,
            'unit' => '5 L',
        ]);
        // Soda's
        DB::table('drinks')->insert([
            'type' => 'soda',
            'name' => 'Sprite',
            'price' => 1.20,
            'unit' => '1,5 L'
        ]);

        DB::table('drinks')->insert([
            'type' => 'soda',
            'name' => 'Sprite',
            'price' => .87,
            'unit' => '500 ml'
        ]);
    }
}
