<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;

class MensajeController extends Controller
{
    public function index()
    {
        $mensajes = Mensaje::all();
        //dd($mensajes);
        return view('lista-mensaje', compact('mensajes'));
    }


    public function create()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        // dd( $request->all(), $request->correo );
        
        // dd('si llego a esta ruta');

        // Validar formulario

        // Guardar a DB
        $mensaje = new Mensaje();
        $mensaje->nombre = $request->nombre;
        $mensaje->correo = $request->correo;
        $mensaje->mensaje = $request->mensaje;
        $mensaje->ciudad = 'Guadalajara';

        $mensaje->save();

        // Redirigir
        return redirect('/contacto');
    }
}