<?php

namespace Database\Seeders;

use App\Models\Contrato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contrato::factory(250)->create();
    }
}
