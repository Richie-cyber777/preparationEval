<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Database\Seeders\ProduitsSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(BlogSeeder::class);
    }
}
