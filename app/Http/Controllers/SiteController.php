<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    /**
     * pagina de contato
     * @return \Illuminate\Contracts\View\View
     */
    function contato()
    {
        return view('contato');
    }

    function sobre()
    {
        return view('sobre');
    }
}