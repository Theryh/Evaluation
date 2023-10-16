@extends('layouts.app')

@section('content')
    <a href="{{ route('hall.create') }}" class="btn btn-primary">Ajouter un hall</a>

    @foreach($halls as $hall)
        <h2>{{ $hall->nom }}</h2>
        <p>Personnel minimum : {{ $hall->personnel_minimum }}</p>
        <!-- Ajoutez d'autres données spécifiques aux halls ici -->
        <a href="{{ route('hall.edit', $hall) }}" class="btn btn-primary">Éditer</a>
        <form method="POST" action="{{ route('hall.destroy', $hall) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de supprimer ce hall?')">Supprimer</button>
        </form>
    @endforeach
@endsection
