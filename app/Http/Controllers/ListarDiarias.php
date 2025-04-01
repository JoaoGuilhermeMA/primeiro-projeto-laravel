<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarDiarias extends Controller
{
    /**
     *Lista de diarias
     */
    public function __invoke()
    {
        return view("welcome");
    }
}