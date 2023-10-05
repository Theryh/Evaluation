<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PorteEmbarquement extends Model
{
    use HasFactory;

    protected $factory = PorteEmbarquementFactory::class;
    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }
}
