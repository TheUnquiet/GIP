<?php

namespace Database\Seeders;

use App\Models\Categories;
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
        // \App\Models\User::factory(10)->create();

        $this->call([
            GuestUserSeeder::class,
        ]);

        Categories::factory()
            ->times(2)
            ->create(['parent_id' => null])
            ->each(
                fn (Categories $category) => Categories::factory()
                ->times(2)
                ->create(['parent_id' => $category->id])
                ->each(
                    fn (Categories $category) => Categories::factory()
                    ->times(2)
                    ->create(['parent_id' => $category->id])
                    ->each(
                        fn (Categories $category) => Categories::factory()
                        ->times(2)
                        ->create(['parent_id' => $category->id])
                    )
    
                )
            );
    }
}
