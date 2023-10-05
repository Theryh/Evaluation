<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Terminal;

class TerminalFactory extends Factory
{
    protected $model = Terminal::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->word,
            'emplacement' => $this->faker->address,
            'date_mise_en_service' => $this->faker->date,
        ];
    }
}
