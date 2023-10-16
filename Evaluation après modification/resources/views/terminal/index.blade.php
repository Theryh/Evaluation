@extends('layouts.app')

@section('content')
    <a href="{{ route('terminal.create') }}" class="btn btn-primary">Ajouter un terminal</a>

    @foreach($terminals as $terminal)
        <h2>{{ $terminal->nom }}</h2>
        <p>Emplacement : {{ $terminal->emplacement }}</p>
        <p>Date de mise en service : {{ $terminal->date_mise_en_service }}</p>
        {{--  <p>Capacité totale pour les portes d'embarquement ouvertes : {{ $terminal->calculateCapaciteTotale() }}</p> --}}

        <a href="{{ route('terminal.edit', $terminal) }}" class="btn btn-primary">Éditer</a>

        <form method="POST" action="{{ route('terminal.destroy', $terminal) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de supprimer ce terminal?')">Supprimer</button>
        </form>
    @endforeach
@endsection
