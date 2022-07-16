<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function mostrar(){
        $reserva = new Reserva();
        $reservas = $reserva->select("clientes.nombre as cliente","clientes.telefono", "restaurantes.nombre as restaurante", "restaurantes.ubicacion", "reservas.fecha", "reservas.servicio","reservas.estado", "reservas.nro_personas", "reservas.id","mesas.numero","mesas.capacidad")->join("clientes", "clientes.id","=","reservas.id_cliente")->join("unions", "unions.id_reserva","=","reservas.id" )->join("mesas","mesas.id","=","unions.id_mesa")->join("restaurantes","restaurantes.id","=","reservas.id_restaurante")->get();
        return view("reservasMostrar")
            ->with("reservas",$reservas);
    }
}
