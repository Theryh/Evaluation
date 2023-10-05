
@extends('layouts.app')

@section('content')
@foreach($terminals as $terminal)
    <h2>{{ $terminal->nom }}</h2>
    <p>Emplacement : {{ $terminal->emplacement }}</p>
    <p>Date de mise en service : {{ $terminal->date_mise_en_service }}</p>
    <p>Nombre de halls : {{ $terminal->halls->count() }}</p>
    <p>Capacité totale pour les portes d'embarquement ouvertes : {{ $terminal->calculateCapaciteTotale() }}</p>
@endforeach
