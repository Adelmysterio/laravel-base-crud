<?php

use App\Http\Controllers\PokemonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [PokemonController::class, 'index'])->name('admin.index');
Route::post('/', [PokemonController::class, 'store'])->name('admin.store');
Route::get('/create', [PokemonController::class, 'create'])->name('admin.index.create');
Route::get('/{pokemon}', [PokemonController::class, 'show'])->name('admin.index.show');
