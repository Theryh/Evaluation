
@extends('layouts.app')

@section('content')
    <h1>Liste des Halls</h1>
    @foreach($halls as $hall)
        <h2>{{ $hall->nom }}</h2>
        <p>Personnel Minimum : {{ $hall->personnel_minimum }}</p>
        <!-- Ajoutez d'autres informations spécifiques aux halls ici -->
    @endforeach
@endsection
