<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GuestUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert an account
        // This way you won't have to make one :)
        // Feel free to change details.

        DB::table('users')->insert([
            'name' => 'Lina',
            'email' => 'lina@gmail.com',
            'password' => Hash::make('Lina1234'),
            'is_admin' => 1,
        ]);
    }
}
 