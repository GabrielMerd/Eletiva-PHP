<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ManutencaoController;

Route::get('/', function () {
    return view('welcome');
});

// Rota para o dashboard, protegida pela autenticação
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotas para a troca de senha
    Route::get('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::patch('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

    Route::resource('categoria', CategoriaController::class);
    Route::resource('equipamentos', EquipamentoController::class);
    Route::resource('manutencoes', ManutencaoController::class);
});

// Inclui as rotas de autenticação (login, registro, etc.)
require __DIR__.'/auth.php';
