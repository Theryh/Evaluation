<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PorteEmbarquement;

class PorteEmbarquementFactory extends Factory
{
    protected $model = PorteEmbarquement::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'est_ouverte' => $this->faker->boolean,
            'capacite_maximale' => $this->faker->numberBetween(50, 200),
        ];
    }
}
