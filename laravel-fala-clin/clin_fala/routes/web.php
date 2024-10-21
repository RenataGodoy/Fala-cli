<?php

use App\Http\Controllers\RamaisController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pessoas/create', [PessoasController::class, 'create'])->name('pessoas.create');
Route::post('pessoas', [PessoasController::class, 'store'])->name('pessoas.store');
Route::get('pessoas', [PessoasController::class, 'index'])->name('pessoas.index');

Route::get('ramais/create', [RamaisController::class, 'create'])->name('ramais.create');
Route::post('ramais', [RamaisController::class, 'store'])->name('ramais.store');
Route::get('ramais', [RamaisController::class, 'index'])->name('ramais.index');

