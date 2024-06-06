<?php

namespace Database\Seeders;

use App\Models\Acessos;
use Database\Factories\AcessoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcessosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Acessos::factory(50)->create();
    }
}
