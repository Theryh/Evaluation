<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PorteEmbarquement;
use Database\Factories\PorteEmbarquementFactory;

class PorteEmbarquementSeeder extends Seeder
{
    public function run()
    {
        PorteEmbarquement::factory()->count(15)->create();
    }
}
