<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Électronique',
                'slug' => 'electronique',
                'description' => 'des trucs qui fonctionnent avec l\'électricité',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vêtements',
                'slug' => 'vetements',
                'description' => 'des trucs qu\'on porte pour pas être à poil',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Maison',
                'slug' => 'maison',
                'description' => 'des trucs pour pas avoir froid et pour pas qu\'on nous voie depuis dehors',
                'created_at' => now(),
                'updated_at' => now(),
            ],
                        [
                'name' => 'Voiture',
                'slug' => 'voiture',
                'description' => 'des trucs pour nous transporter relativement rapidement d\'un point A vers un point B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
                        [
                'name' => 'Meuble',
                'slug' => 'meuble',
                'description' => 'des trucs pour mettre des trucs dedans',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
