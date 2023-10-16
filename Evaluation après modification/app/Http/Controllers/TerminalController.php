<?php

namespace App\Http\Controllers;

use App\Models\Terminal;
use Illuminate\Http\Request;
use App\Models\PorteEmbarquement;
use Illuminate\Support\Facades\DB;

class TerminalController extends Controller
{

    public function liste()
    {
        $terminals = Terminal::all();

        return view('terminal.index', compact('terminals'));
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
        $data = $request->all();


        DB::table('terminals')->insert([
            'nom' => $data['nom'],
            'emplacement' => $data['emplacement'],
            'date_mise_en_service' => $data['date_mise_en_service'],

        ]);

        return redirect()->route('terminal.index');
    }

    public function edit(Terminal $terminal)
    {
        return view('terminal.edit', compact('terminal'));
    }

    public function update(Request $request, Terminal $terminal)
    {
        $data = $request->all();

        DB::table('terminals')
            ->where('id', $terminal->id)
            ->update([
                'nom' => $data['nom'],
                'emplacement' => $data['emplacement'],
                'date_mise_en_service' => $data['date_mise_en_service'],
            ]);

        return redirect()->route('terminal.index');
    }

    public function destroy(Terminal $terminal)
    {
        $terminal->delete();

        return redirect()->route('terminal.index');
    }
}
