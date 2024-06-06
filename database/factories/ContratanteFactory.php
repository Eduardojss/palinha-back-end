<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contratante>
 */
class ContratanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'tipo' => $this->faker->randomElement(['contratante_fisico', 'contratante_juridico']),
            'cpf_cnpj' => $this->faker->randomNumber(8),
            'deleted_at' => $this->faker->optional(0.2)->dateTime
        ];
    }
}
