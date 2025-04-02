<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diaria;

class ListarDiarias extends Controller
{
    /**
     *Lista de diarias
     */
    public function __invoke()
    {
        $diarias = Diaria::get();

        return view("listar_diarias")->with("diarias", $diarias);
    }
}