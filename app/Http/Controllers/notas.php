<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notas extends Controller
{
    public function mostrarNota($id)
    {
        $notas = modelsNotas::find($id);
        return view('notas.mostrarNota', compact('notas'));
        
    }
}
