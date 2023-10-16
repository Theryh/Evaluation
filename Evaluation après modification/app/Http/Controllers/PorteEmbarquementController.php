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

    public function edit(PorteEmbarquement $porteEmbarquement)
{
    return view('porte-embarquement.edit', compact('porteEmbarquement'));
}

    public function store(Request $request)
    {
        $data = $request->all();


        $estOuverte = isset($data['est_ouverte']) && $data['est_ouverte'] == 'on' ? 1 : 0;

        DB::table('porte_embarquements')->insert([
            'nom' => $data['nom'],
            'est_ouverte' => $estOuverte,
            'capacite_maximale' => $data['capacite_maximale'],
        ]);

        return redirect()->route('porte-embarquement.index');
    }

public function update(Request $request, PorteEmbarquement $porteEmbarquement)
{
    $data = $request->all();

    $estOuverte = isset($data['est_ouverte']) && $data['est_ouverte'] == 'on' ? 1 : 0;

    DB::table('porte_embarquements')
        ->where('id', $porteEmbarquement->id)
        ->update([
            'nom' => $data['nom'],
            'est_ouverte' => $estOuverte,
            'capacite_maximale' => $data['capacite_maximale'],
        ]);


    return redirect()->route('porte-embarquement.index');
}


    public function destroy(PorteEmbarquement $porteEmbarquement)
    {
        $porteEmbarquement->delete();

        return redirect()->route('porte-embarquement.index');
    }
}
