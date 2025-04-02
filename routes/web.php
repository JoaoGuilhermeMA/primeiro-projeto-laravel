<?php

use App\Http\Controllers\DetalharDiarias;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ListarDiarias;

Route::get('/', ListarDiarias::class)->name('index');

Route::get('/contatos', [SiteController::class, 'contato']);

Route::get('/sobre', [SiteController::class, 'sobre']);

Route::get('/diarias/{id}', DetalharDiarias::class)->name("diarias.show");