<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ListarDiarias;

Route::get('/', ListarDiarias::class);

Route::get('/contatos', [SiteController::class, 'contato']);

Route::get('/sobre', [SiteController::class, 'sobre']);