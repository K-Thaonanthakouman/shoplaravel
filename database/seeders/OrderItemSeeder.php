<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders_items')->insert([
            [
                'order_id' => 1,
                'product_id' => 2,
                'quantity' => 1,
                'unit_price' => 800,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 2,
                'product_id' => 1,
                'quantity' => 1,
                'unit_price' => 2500,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 2,
                'product_id' => 2,
                'quantity' => 1,
                'unit_price' => 800,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'order_id' => 3,
                'product_id' => 3,
                'quantity' => 1,
                'unit_price' => 80000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
