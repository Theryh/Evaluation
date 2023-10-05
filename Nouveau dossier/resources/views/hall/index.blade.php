@extends('layouts.app')

@section('content')
    <h2>Liste des halls</h2>
    @forelse ($halls as $hall)
        <div class="mb-2">
            <ul>
                {{ $hall->nom }}
            </ul>
        @empty
            <li>
                Aucune donnée
            </li>
    @endforelse
@endsection
