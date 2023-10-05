<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hall;
use App\Models\Terminal;

class HallFactory extends Factory
{
    protected $model = Hall::class;

    public function definition()
    {
        $terminalId = Terminal::first()->id;
        return [
            'nom' => $this->faker->word,
            'personnel_minimum' => $this->faker->numberBetween(5, 20),
            'terminal_id' => $terminalId,
        ];
    }
}
