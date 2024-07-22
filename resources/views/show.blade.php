@extends('layouts.app')

@section('main-content')
    <main>
        <article class="text-center">
            <h2>Pokemon #{{ $pokemon->id }} {{ $pokemon->name }}</h2>
            <img src="{{ $pokemon->img_url }}" alt="{{ $pokemon->name }}">
            <p>{{ $pokemon->type }} {{$pokemon->ability}}</p>
        </article>
    </main>
@endsection
