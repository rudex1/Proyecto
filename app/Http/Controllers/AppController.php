<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function inicio()
    {
        return "Hola";
    }

    public function nombre()
    {
        return view("saludo");
    }
    public function inicionombre($nombre)
    {
        return view("saludo", ['nombre' => $nombre]);
    }

    public function iniciocolor($nombre, $color)
    {
        return view("saludocolor", ['nombre' => $nombre, 'color' => $color]);
    }

    public function contacto()
    {
        $nom = request()->get('Nombre') . " " . request()->get('Apellido');
        return view("saludocolor", ['nombre' => $nom, 'color' => request()->get('Color')]);
    }

    public function contacto_req(Request $request)
    {
        $nom = $request->input("Nombre") . " " . $request->input("Apellido");
        return view("saludocolor", ['nombre' => $nom, 'color' => $request->input("Color")]);
    }

    public function contactomulti(Request $request)
    {
        return view("multi", ['nombre' => $request->input("Nombre")]);
    }
    public function intNombre(Request $request)
    {
        return view("saludo")->with(['nombre' => $request->input("nombre")]);
    }

//vamos al controlador

    public function calcular(request $request)
    {

    }
}
