<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produits')->insert([
            [
                'nom' => 'Ordinateur Portable',
                'description' => 'Un ordinateur puissant pour le travail et le gaming.',
                'prix' => 1200.99,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom' => 'Smartphone',
                'description' => 'Un smartphone haut de gamme avec une excellente autonomie.',
                'prix' => 899.49,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nom' => 'Casque Bluetooth',
                'description' => 'Un casque sans fil avec réduction de bruit.',
                'prix' => 199.99,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
