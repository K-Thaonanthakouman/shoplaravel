<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'last_name' => 'Coin',
                'first_name' => 'Coin',
                'email' => 'coin@coin.com',
                'password' => 'CC',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Pouêt',
                'first_name' => 'Pouêt',
                'email' => 'pouet@pouet.com',
                'password' => 'PP',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'last_name' => 'Ouille',
                'first_name' => 'Aïe',
                'email' => 'aie@ouille.com',
                'password' => 'AO',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
