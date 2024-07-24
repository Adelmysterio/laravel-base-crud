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
            </tr>
        </thead>
        <tbody>
            @foreach ($pokemons as $pokemon)
                <tr>
                    <th scope="row">{{ $pokemon->id }}</th>
                    <td>{{ $pokemon->name }}</td>
                    <td>{{ $pokemon->type }}</td>
                    <td>{{ $pokemon->ability }}</td>
                    <td>
                        <a href="{{ route('pokemon.show', $pokemon) }}" class="btn btn-primary">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
