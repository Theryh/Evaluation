@extends('layouts.app')

@section('content')
    <h2>Créer un Hall</h2>

    <form method="POST" action="{{ route('hall.store') }}">
        @csrf

        <div class="form-group">
            <label for="nom">Nom du Hall</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="personnel_minimum">Personnel Minimum</label>
            <input type="number" name="personnel_minimum" id="personnel_minimum" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
@endsection
