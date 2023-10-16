@extends('layouts.app')

@section('content')
    <h2>Créer un Terminal</h2>

    <form method="POST" action="{{ route('terminal.store') }}">
        @csrf

        <div class="form-group">
            <label for="nom">Nom du Terminal</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="emplacement">Emplacement du Terminal</label>
            <input type="text" name="emplacement" id="emplacement" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="date_mise_en_service">Date de mise en service</label>
            <input type="date" name="date_mise_en_service" id="date_mise_en_service" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection
