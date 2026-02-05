<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'category_id' => 16,
                'name' => 'Borne d\'arcade',
                'slug' => 'borne_d\'arcade',
                'description' => 'Un appareil pour éclater son collègue à Street Fighter par exemple.',
                'price' => 2500,
                'stock' => 26,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 20,
                'name' => 'Table de poker',
                'slug' => 'table_de_poker',
                'description' => 'Une table pour dépouiller ses collègues au poker.',
                'price' => 800,
                'stock' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 19,
                'name' => 'BMW Z8',
                'slug' => 'bmw_z8',
                'description' => 'Une voiture pour rentrer dans un platane plus vite que ses collègues.',
                'price' => 80000,
                'stock' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
