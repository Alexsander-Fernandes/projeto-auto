<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\AbastecimentoController;

    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Route::resource('veiculos', VeiculoController::class);
    Route::prefix('veiculos')->group(function(){
        Route::get('/', [VeiculoController::class, 'index'])->name('veiculos.index');
        Route::get('/create', [VeiculoController::class, 'create'])->name('veiculos.create');

    });

    Route::prefix('oficinas')->group(function (){
        Route::get('/',[OficinaController::class, 'index'])->name('oficinas.index');
        Route::get('/create',[OficinaController::class, 'create'])->name('oficinas.create');
    });

    Route::prefix('abastecimentos')->group(function(){
        Route::get('/',[AbastecimentoController::class, 'index'])->name('abastecimentos.index');
        Route::get('/create',[AbastecimentoController::class, 'create'])->name('abastecimentos.create');


    });

   // Route::resource('oficinas', OficinaController::class);


