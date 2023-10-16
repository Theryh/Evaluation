@extends('layouts.app')

@section('content')
    <h2>Modifier un Terminal</h2>

    <form method="POST" action="{{ route('terminal.update', $terminal) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom du Terminal</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $terminal->nom }}" required>
        </div>

        <div class="form-group">
            <label for="emplacement">Emplacement du Terminal</label>
            <input type="text" name="emplacement" id="emplacement" class="form-control" value="{{ $terminal->emplacement }}" required>
        </div>

        <div class="form-group">
            <label for="date_mise_en_service">Date de mise en service</label>
            <input type="date" name="date_mise_en_service" id="date_mise_en_service" class="form-control" value="{{ $terminal->date_mise_en_service }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
