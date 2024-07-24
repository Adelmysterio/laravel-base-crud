@extends('layouts.app')

@section('main-content')
    <main>
        <article class="text-center">
            <h2>Pokemon #{{ $pokemon->id }} {{ $pokemon->name }}</h2>
            @if ($pokemon->id == 6)
                <h3>Best Pokemon Ever</h3>
            @endif
            <img src="{{ $pokemon->img_url }}" alt="{{ $pokemon->name }}">
            <p>Type: {{ $pokemon->type }}</p>
            <p>Ability: {{ $pokemon->ability }}</p>
            <a href="{{ route('pokemon.index', $pokemon) }}" class="btn btn-primary">Back to all Pokemon</a>
            <a href="{{ route('pokemon.edit', $pokemon) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('pokemon.destroy', $pokemon) }}" method="POST" class="d-inline-block">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
            </form>
        </article>
    </main>
@endsection
