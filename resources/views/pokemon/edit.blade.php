@extends('layouts.app')

@section('main-content')
    <div class="container-fuild">
        <h2>Edit {{ $pokemon->name }}</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <form action="{{ route('pokemon.update', $pokemon) }}" method="POST" class="col-6">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="pokedex_index">Indice Pokédex:</label>
                    <input class="form-control" type="number" id="pokedex_index" name="pokedex_index" required
                        value="{{ $pokemon->pokedex_index }}">
                </div>

                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input class="form-control" type="text" id="name" name="name" required
                        value="{{ $pokemon->name }}">
                </div>

                <div class="form-group">
                    <label for="type">Tipo:</label>
                    <input class="form-control" type="text" id="type" name="type" required
                        value="{{ $pokemon->type }}">
                </div>

                <div class="form-group">
                    <label for="img_url">URL Immagine:</label>
                    <input class="form-control" type="url" id="img_url" name="img_url" required
                        value="{{ $pokemon->img_url }}">
                </div>

                <div class="form-group mb-3">
                    <label for="ability">Abilità:</label>
                    <input class="form-control" type="text" id="ability" name="ability" required
                        value="{{ $pokemon->ability }}">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Edit {{ $pokemon->name }}</button>
                </div>
            </form>

        </div>
    </div>
@endsection
