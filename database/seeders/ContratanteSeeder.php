<?php

namespace Database\Seeders;

use App\Models\Contratante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContratanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contratante::factory(120)->create();
    }
}
