<?php

namespace Database\Factories;

use App\Models\Clasificasion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clasificasion_id' => rand(1,10),
            'nombre' =>fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'fecha_nacimiento' => fake()->date('Y-m-d', '-18 years'),
            'curp' =>fake()->curp(),
            'telefono_1' =>fake()->numberBetween(1000000000, 9999999999),
        ];
    }
}
