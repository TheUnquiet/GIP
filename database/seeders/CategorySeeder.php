<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Food',
            'parent_id' => NULL,
        ]);

        DB::table('categories')->insert([
            'name' => 'Drinks',
            'parent_id' => NULL,
        ]);

        DB::table('categories')->insert([
            'name' => 'Produce',
            'parent_id' => NULL,
        ]);

        DB::table('categories')->insert([
            'name' => 'Frozen',
            'parent_id' => NULL,
        ]);

        // All Foods

        DB::table('categories')->insert([
            'name' => 'Bread & Bakery',
            'parent_id' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Cereal',
            'parent_id' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Meats',
            'parent_id' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Fish',
            'parent_id' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Baking',
            'parent_id' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Pasta & Rice',
            'parent_id' => 1,
        ]);

        DB::table('categories')->insert([
            'name' => 'Sauce',
            'parent_id' => 1,
        ]);

        // All drinks

        DB::table('categories')->insert([
            'name' => 'Water',
            'parent_id' => 2,
        ]);

        DB::table('categories')->insert([
            'name' => 'Soda',
            'parent_id' => 2,
        ]);

        DB::table('categories')->insert([
            'name' => 'Juice',
            'parent_id' => 2,
        ]);

        DB::table('categories')->insert([
            'name' => 'Dairy',
            'parent_id' => 2,
        ]);

        // All Produce

        DB::table('categories')->insert([
            'name' => 'Fruit',
            'parent_id' => 3,
        ]);

        DB::table('categories')->insert([
            'name' => 'Veggies',
            'parent_id' => 3,
        ]);

        // All frozen
        
        DB::table('categories')->insert([
            'name' => 'Pizza',
            'parent_id' => 4,
        ]);

        DB::table('categories')->insert([
            'name' => 'Ice Cream',
            'parent_id' => 4,
        ]);
    }
}
