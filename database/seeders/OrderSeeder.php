<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'user_id' => 8,
                'total' => 800,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 10,
                'total' => 3300,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 9,
                'total' => 80000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
