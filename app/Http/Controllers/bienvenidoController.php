<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenidoController extends Controller
{
    public function bienvenido(){
        $nombre = "David";
        $alumnos = ['Kyan', 'Alan', 'Erick', 'Julio', 'Gugavo', 'Waltuh', 'Jesi'];
        $datos= array(['nombre' => 'Kyan', 'edad' => 17, 'turno' => 'Vespertino'],
                      ['nombre' => 'Alan', 'edad' => 17, 'turno' => 'Nocturno'],
                      ['nombre' => 'Erick', 'edad' => 20, 'turno' => 'Vespertino'],
                      ['nombre' => 'Julio', 'edad' => 17, 'turno' => 'Vespertino'],
                      ['nombre' => 'Gugavo', 'edad' => 50, 'turno' => 'Matutino'],
                      ['nombre' => 'Waltuh', 'edad' => 52, 'turno' => 'Matutino'],
                      ['nombre' => 'Jesi', 'edad' => 30, 'turno' => 'Matutino']);
        return view ('bienvenido', compact('nombre', 'alumnos', 'datos'));
    }
}
