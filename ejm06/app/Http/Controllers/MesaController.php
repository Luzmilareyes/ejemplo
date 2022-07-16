<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mesa;
class MesaController extends Controller
{
    public function mostrar(){
        $mesas = Mesa::get();
        return $mesas;
    }
}
