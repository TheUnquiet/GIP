<?php

namespace Database\State;

use Illumination\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EnsureUsersArePresent
{

    public function __invoke()

    {
        if ($this->present()) {

            return;
        }

        DB::table('users')->insert([
            'name' => 'Lina',
            'email' => 'lina@gmail.com',
            'password' => Hash::make('Lina1234'),
        ]);
    }

    private function present()
    {

        return DB::table('users')->count() > 0;
    }
}