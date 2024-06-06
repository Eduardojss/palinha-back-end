<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Musico>
 */
class MusicoFactory extends Factory
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
            'ativo' => $this->faker->boolean,
            'perfil_completo' => $this->faker->boolean,
            'deleted_at' => $this->faker->optional(0.3)->dateTime,
        ];
    }
}
