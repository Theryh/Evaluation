<?php

namespace App\Http\Controllers;

use App\Models\Terminal;
use Illuminate\Http\Request;
use App\Models\PorteEmbarquement;

class TerminalController extends Controller
{

    public function liste()
    {
        $terminals = Terminal::withCount('halls')->get();

        $capaciteTotale = PorteEmbarquement::where('est_ouverte', true)->sum('capacite_maximale');

        return view('liste', compact('terminals', 'capaciteTotale'));
    }
    public function index()
    {
        $terminals = Terminal::all();
        return view('terminal.index', compact('terminals'));
    }

    public function create()
    {
        return view('terminal.create');
    }

    public function store(Request $request)
    {
        // Valider et enregistrer le nouveau terminal
    }

    public function edit(Terminal $terminal)
    {
        return view('terminal.edit', compact('terminal'));
    }

    public function update(Request $request, Terminal $terminal)
    {
        // Valider et mettre à jour le terminal
    }

    public function destroy(Terminal $terminal)
    {
        // Supprimer le terminal
    }
}
