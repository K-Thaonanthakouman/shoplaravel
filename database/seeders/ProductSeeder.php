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
                'category_id' => 1,
                'name' => 'Borne d\'arcade',
                'slug' => 'borne_d\'arcade',
                'description' => 'Un appareil pour éclater son collègue à Street Fighter par exemple.',
                'price' => 2500,
                'stock' => 26,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'name' => 'Table de poker',
                'slug' => 'table_de_poker',
                'description' => 'Une table pour dépouiller ses collègues au poker.',
                'price' => 800,
                'stock' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'name' => 'BMW Z8',
                'slug' => 'bmw_z8',
                'description' => 'Une voiture pour rentrer dans un platane plus vite que ses collègues.',
                'price' => 80000,
                'stock' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'name' => 'Bonnet',
                'slug' => 'bonnet',
                'description' => 'Un truc qu\'on met au-dessus du crâne pour pas attraper froid.',
                'price' => 20,
                'stock' => 254,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'name' => 'Chemise',
                'slug' => 'chemise',
                'description' => 'Un truc pour avoir l\'air sérieux même quand on l\'est pas.',
                'price' => 30,
                'stock' => 89,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'name' => 'Lit',
                'slug' => 'lit',
                'description' => 'Absolument indispensable pour pouvoir dormir.',
                'price' => 250,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'name' => 'Renault Clio',
                'slug' => 'renault_clio',
                'description' => 'Une voiture qu\'on pourrait limite ranger à la main.',
                'price' => 8000,
                'stock' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'name' => 'Maison1',
                'slug' => 'maison1',
                'description' => 'Simple maison, mais c\'est déjà quand même pas mal.',
                'price' => 150000,
                'stock' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 5,
                'name' => 'Canapé',
                'slug' => 'canape',
                'description' => 'C\'est quand même plus pratique pour s\'asseoir devant sa télé.',
                'price' => 500,
                'stock' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 1,
                'name' => 'TV OLED UHD',
                'slug' => 'tv_oled_uhd',
                'description' => 'Plein d\'acronymes pour une télé.',
                'price' => 1500,
                'stock' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
