<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classe>
 */
class ClasseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'batiment' => fake()->realText(15),
            'numero' => Str::upper(fake()->randomLetter()),
            'nombre_places' => fake()->randomNumber(0),
            'is_ouverte' => fake()->boolean(),
        ];
    }
}
