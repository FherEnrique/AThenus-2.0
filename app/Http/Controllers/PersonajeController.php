<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonajeController extends Controller
{
    public function generar()
    {
        try {
            $listaVivo = array();
            $nombre = DB::select('SELECT nombre FROM nombres WHERE sexo = ?', ['m']);
            $nombre2 = DB::select('SELECT nombre FROM nombres WHERE sexo = ?', ['f']);
            for ($i = 0; $i < 10; $i++) {
                $actual = array(
                    'nombre' => $nombre[rand(0, count($nombre) - 1)]->nombre,
                    'salud' => 100, //AQUI CAMBIE
                    'sexo' => 'm',
                    'arbol' => 0,
                    'compi' => 0,
                    'dias' => 0
                );
                $actual2 = array(
                    'nombre' => $nombre2[rand(0, count($nombre2) - 1)]->nombre,
                    'salud' => 99, //AQUI CAMBIE
                    'sexo' => 'f',
                    'arbol' => 0,
                    'compi' => 0,
                    'dias' => 0
                );
                array_push($listaVivo, $actual);
                array_push($listaVivo, $actual2);
            }
            session(['listaVivo' => json_encode($listaVivo), 'diaActual' => 1, 'listaMuerto' => json_encode(array())]);
            return redirect()->to('historia/')->send();
        } catch (\Throwable $th) {
            echo "alert('Se ha producido un error volver a ingresarlo')";
            return redirect()->to('jugar/')->send();
        }
    }

    public function tomar(Request $request)
    {
        $listaVivo = array();
        foreach ($request->chico as $key) {
            $actual = array(
                'nombre' => $key,
                'salud' => 100,
                'sexo' => 'm',
                'arbol' => 0,
                'compi' => 0,
                'dias' => 0
            );
            array_push($listaVivo, $actual);
        }
        foreach ($request->chica as $key) {
            $actual = array(
                'nombre' => $key,
                'salud' => 100,
                'sexo' => 'f',
                'arbol' => 0,
                'compi' => 0,
                'dias' => 0
            );
            array_push($listaVivo, $actual);
        }
        session(['listaVivo' => json_encode($listaVivo), 'diaActual' => 1, 'listaMuerto' => json_encode(array())]);
        return redirect()->to('historia/')->send();
    }
}
