<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PorteEmbarquement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PorteEmbarquementController extends Controller
{
    public function index()
    {
        $portesEmbarquement = PorteEmbarquement::all();
        return view('porte-embarquement.index', compact('portesEmbarquement'));
    }

    public function create()
    {
        return view('porte-embarquement.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // Convertir la valeur 'est_ouverte' en un vrai booléen
        $estOuverte = $data['est_ouverte'] == 'ON' ? true : false;

        DB::table('porte_embarquements')->insert([
            'nom' => $data['nom'],
            'est_ouverte' => $estOuverte,
            'capacite_maximale' => $data['capacite_maximale'],
        ]);

        return redirect()->route('porte-embarquement.index');
    }

    public function update(Request $request, PorteEmbarquement $porteEmbarquement)
    {
        $data = $request->validate([
            'nom' => 'required|string',
            'est_ouverte' => 'required|boolean',
            'capacite_maximale' => 'required|integer',
       ]);

        $porteEmbarquement->update($data);

        return redirect()->route('porte-embarquement.index');
    }

    public function destroy(PorteEmbarquement $porteEmbarquement)
    {
        $porteEmbarquement->delete();

        return redirect()->route('porte-embarquement.index');
    }
}
