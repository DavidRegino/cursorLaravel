<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function alumnos(){
        return view('alumno');
    }

    public function inicio(){
        return view('inicio');
    }
}
