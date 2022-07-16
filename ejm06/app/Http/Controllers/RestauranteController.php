<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;

class RestauranteController extends Controller
{
    public function mostrar(){
        $mesaController = new MesaController();

        $restaurantes = Restaurante::get();
        $mesas = $mesaController->mostrar();
        return view("restauranteMostrar")
            ->with("restaurante", $restaurantes)
            ->with("mesas", $mesas);
    }
}
