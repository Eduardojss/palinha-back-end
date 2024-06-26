<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contrato>
 */
class ContratoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contratante_id' => \App\Models\Contratante::factory(),
            'musico_id' => \App\Models\Musico::factory(),
            'data_apresentação' => $this->faker->date(),
            'valor_contrato' => $this->faker->randomNumber(6),
        ];
    }
}
