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
        </article>
    </main>
@endsection
