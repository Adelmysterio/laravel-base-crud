@extends('layouts.app')

@section('main-content')
    <h1 class="text-center mb-5">Natural Animal Reserve (Pokèmon)</h1>
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Ability</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokemons as $pokemon)
                <tr>
                    <th scope="row">{{ $pokemon->pokedex_index }}</th>
                    <td>{{ $pokemon->name }}</td>
                    <td>{{ $pokemon->type }}</td>
                    <td>{{ $pokemon->ability }}</td>
                    <td>
                        <a href="{{ route('pokemon.show', $pokemon) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('pokemon.edit', $pokemon) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pokemon.destroy', $pokemon) }}" method="POST" class="d-inline-block">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
