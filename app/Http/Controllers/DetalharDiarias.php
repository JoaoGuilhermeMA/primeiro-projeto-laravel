<?php

namespace App\Http\Controllers;

use App\Models\Diaria;

class DetalharDiarias extends Controller
{
    public function __invoke(int $id)
    {
        $diaria = Diaria::findOrFail($id);

        return view('detalhar_diarias')->with('diaria', $diaria);
    }
}

// $diaria = Diaria::find($id);
// $diaria = Diaria::where("id", $id)->first();