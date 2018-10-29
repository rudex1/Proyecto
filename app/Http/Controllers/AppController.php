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

    // nombre
    public function postNombre(Request $request)
    {
        return view('calculadora')->with(['nombre' => $request->input("nombre")]);
    }

    //vamos al controlador

    public function calcular(Request $request)
    {
        $nombre    = "nombre";
        $operacion = $request->input('operacion');
        $numero1   = $request->input('numero1');
        $numero2   = $request->input('numero2');
        $error     = false;
        switch ($operacion) {
            case 'Suma':
                $resultado = $numero1 + $numero2;
                break;
            case 'Resta':
                $resultado = $numero1 - $numero2;
                break;
            case 'Multiplicacion':
                $resultado = $numero1 * $numero2;
                break;
            case 'Division':
                if ($numero1 == 0 || $numero2 == 0) {
                    $resultado = "No es divisible por: 0";
                    $error     = true;
                } else {
                    $resultado = $numero1 / $numero2;
                }
                break;
            case 'potencia':
                $resultado = pow($numero1, $numero2);
                break;
            default:
                $resultado = "Eso no es un numero";
                break;
        }
        return view('calculadora', [
            'nombre'    => $request->input("nombre"),
            'numero1'   => $numero1,
            'numero2'   => $numero2,
            'error'     => $error,
            'resultado' => $resultado]);
    }

}
