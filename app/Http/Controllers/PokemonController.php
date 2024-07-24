<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemon.index', compact('pokemons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newPokemon = new Pokemon($data);
        $newPokemon->save();
        return redirect()->route('pokemon.show', $newPokemon);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        return view('pokemon.show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        return view('pokemon.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pokemon $pokemon)
    {
        $data = $request->all();
        $pokemon->update($data);

        return redirect()->route('pokemon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        
        return redirect()->route('pokemon.index');
    }
}
