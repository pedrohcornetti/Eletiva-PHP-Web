<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\RoupasController;
use App\Http\Controllers\TipoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TransacaoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('categoria', CategoriaController::class);
    Route::resource('roupas', RoupasController::class);
    Route::resource('tipos', TipoController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('transacoes', TransacaoController::class);
});

require __DIR__.'/auth.php';
