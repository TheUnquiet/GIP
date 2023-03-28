<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert Items
        DB::table('foods')->insert([
            'type' => '',
            'name' => '',
            'price' => 1,
        ]);
    }
}
