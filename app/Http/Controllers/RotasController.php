<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RotasController extends Controller
{
    public function index()
    {
        return view('contato');
    }

    public function processa(Request $request)
    {
        $nome = $request->input('nome');
        return view('processa', ['nome' => $nome]);
    }
}



