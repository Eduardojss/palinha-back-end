<?php

namespace Database\Seeders;

use App\Models\Musico;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Musico::factory(150)->create();
    }
}
