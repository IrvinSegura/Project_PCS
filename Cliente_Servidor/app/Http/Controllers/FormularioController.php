<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulario;

class FormularioController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function datos(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'telefono' => 'required',
            'email' => 'required',
            'mensaje' => 'required',
        ]);

        $formularios = new Formulario();
        $formularios->nombre = $request->nombre;    
        $formularios->telefono = $request->telefono;
        $formularios->email = $request->email;
        $formularios->mensaje = $request->mensaje;
        $formularios->save();
        return "Usuario: \n" .$request->nombre. "\nGracias por contactarnos";
    }

    public function mostrar()
    {
        $formularios= Formulario::all();
    }
}