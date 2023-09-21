<?php

namespace App\Http\Controllers;

use App\Models\PorteEmbarquement;
use Illuminate\Http\Request;

class PorteEmbarquementController extends Controller
{
    public function index()
    {
        $portesEmbarquement = PorteEmbarquement::all();
        return view('portes-embarquement.index', compact('portesEmbarquement'));
    }

    public function create()
    {
        return view('portes-embarquement.create');
    }

    public function store(Request $request)
    {
        // Valider et enregistrer la nouvelle porte d'embarquement
    }

    public function edit(PorteEmbarquement $porteEmbarquement)
    {
        return view('portes-embarquement.edit', compact('porteEmbarquement'));
    }

    public function update(Request $request, PorteEmbarquement $porteEmbarquement)
    {
        // Valider et mettre à jour la porte d'embarquement
    }

    public function destroy(PorteEmbarquement $porteEmbarquement)
    {
        // Supprimer la porte d'embarquement
    }
}
