@extends('layouts.app')

@section('content')
    <a href="{{ route('porte-embarquement.create') }}" class="btn btn-primary">Ajouter une porte d'embarquement</a>

    @foreach($portesEmbarquement as $porteEmbarquement)
        <h2>{{ $porteEmbarquement->nom }}</h2>
        <p>Est ouverte : {{ $porteEmbarquement->est_ouverte ? 'Oui' : 'Non' }}</p>
        <p>Capacité maximale : {{ $porteEmbarquement->capacite_maximale }}</p>
        <a href="{{ route('porte-embarquement.edit', $porteEmbarquement) }}" class="btn btn-primary">Éditer</a>
        <form method="POST" action="{{ route('porte-embarquement.destroy', $porteEmbarquement) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de supprimer cette porte d\'embarquement?')">Supprimer</button>
        </form>
    @endforeach
@endsection
