<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GuestUserSeeder::class,
            CategorySeeder::class,
            FoodSeeder::class,
            BeverageSeeder::class,
<<<<<<< HEAD
            ProduceSeeder::class,
            FrozenSeeder::class,
=======
>>>>>>> b051cb2938ed49afee83102f7e8e5c46e12e4679
        ]);
    }
}
