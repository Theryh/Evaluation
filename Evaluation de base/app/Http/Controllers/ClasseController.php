<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function __construct()
    {
        // $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(Classe::all()->count());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classe = new Classe();

        $classe->batiment = 'Bâtiment A';
        $classe->numero = '45';
        $classe->nombre_places = 455;
        $classe->is_ouverte = true;

        $classe->save();

        return $this->index();
        // return redirect()->route('classe.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Classe $classe)
    {
        dd($classe->updated_at);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Classe $classe)
    {
        $classe->is_ouverte = !$classe->is_ouverte;

        $classe->save();

        dump($classe->is_ouverte);
        dd($classe->updated_at);
        // return redirect()->route('classe.show', ['classe' => $classe->id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Classe $classe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Classe $classe)
    {
        //
    }

    /**
     * Restore the specified resource from storage.
     */
    public function undelete(Classe $classe)
    {
        //
    }

    function toto(Classe $classe)
    {
        $classe->nombre_places += 2;

        $classe->save();

        dd($classe->nombre_places);
    }
}
