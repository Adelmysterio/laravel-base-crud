@extends('layouts.app')

@section('main-content')
    <div class="container-fuild">
        <div class="row justify-content-center">
            <form action="{{ route('pokemon.store') }}" method="POST" class="col-6">
                @csrf

                <div class="form-group">
                    <label for="pokedex_index">Indice Pokédex:</label>
                    <input class="form-control" type="number" id="pokedex_index" name="pokedex_index" required>
                </div>

                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input class="form-control" type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="type">Tipo:</label>
                    <input class="form-control" type="text" id="type" name="type" required>
                </div>

                <div class="form-group">
                    <label for="img_url">URL Immagine:</label>
                    <input class="form-control" type="url" id="img_url" name="img_url" required>
                </div>

                <div class="form-group mb-3">
                    <label for="ability">Abilità:</label>
                    <input class="form-control" type="text" id="ability" name="ability" required>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Salva Pokémon</button>
                </div>
            </form>

        </div>
    </div>
@endsection
