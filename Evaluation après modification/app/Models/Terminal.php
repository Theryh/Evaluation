<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Terminal extends Model
{
    use HasFactory;

    protected $factory = TerminalFactory::class;

    public function halls()
    {
        return $this->hasMany(Hall::class);
    }

    public function calculateCapaciteTotale()
    {
        return PorteEmbarquement::where('est_ouverte', true)
            ->sum('capacite_maximale');
    }
}
