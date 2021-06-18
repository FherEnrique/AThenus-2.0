<?php

namespace App\Http\Controllers;

use App\Models\Action;
use Illuminate\Http\Request;
use App\Http\Controllers\DeathController;
use Illuminate\Support\Facades\DB;

class ActionController extends Controller
{
    public function history()
    {
        //zona de validaciones
        if (empty(session('listLive'))) {
            redirect()->to('/play/')->send();
        }
        $listLive = json_decode(session('listLive'));
        if (count($listLive) <= 1) {
            redirect()->to('ganador/')->send();
        }
        $listDeath = json_decode(session('listDeath'));
        $day = json_decode(session('day'));
        #Zona de los muertos
        //Zona de variables
        $helper = array(); //Ver quienes siguen vivos
        $permanentHelper = array(); // PARA actualizar la variable permanente
        $deathNow = array(); //PARA lista de muertos
        $destailsDeath = app(DeathController::class)->listAllDeath();

        foreach ($listLive as $destailsLive) {
            $destailsLive->dias = $day;
            if ($destailsLive->health < rand(1, 100)) { //Abandonad cualquier esperanza
                array_push($deathNow, "Suena un cañon a lo lejos " . $destailsLive->name . " murio: " . $destailsDeath[rand(0, count($destailsDeath) - 1)]->description);
                array_push($permanentHelper, $destailsLive);
            } else {
                array_push($helper, $destailsLive);
            }
        }
        array_push($listDeath, $permanentHelper); //UNIR los muertos de antes con los de ahora
        #zona de las acciones de ahora
        $actionNow = array(); //Ver las aciones de ahora
        $final = array(); //Para enviar a la sesion con los datos de salud actualizados
        $destailsActions = DB::select("SELECT a.id, a.number_character,a.health,a.description FROM actions a LEFT JOIN helpers x ON a.id = x.id_son WHERE x.id_son IS NULL");

        foreach ($helper as $key) {
            $index = rand(0, count($destailsActions) - 1);
            array_push($actionNow, $key->name . " realiza la " . $destailsActions[$index]->description);
            $key->health = $key->health + $destailsActions[$index]->health;
            $key->health = ($key->health < 0) ? 0 : $key->health;
            $key->health = ($key->health > 100) ? 100 : $key->health;
            array_push($final, $key);
        }
        //Actualizaciones en los session
        $day++;
        session(['day' => $day, 'listDeath' => json_encode($listDeath), 'listLive' => json_encode($final)]);
        return view('history', compact('day', 'actionNow', 'deathNow', 'final'));
    }
    public function win()
    {
        if (session('listDeath') != "") {
            $winner = json_decode(session('listLive'));
            return view('winners', compact('winner'));
        } else {
            redirect()->to('/history/')->send();
        }
    }
}
/* 
<?php
            $accion = array(); //Ver las aciones de ahora
            $final = array(); //Para enviar a la sesion con los datos de salud actualizados
            foreach ($aux as $key) {
                if ($key->arbol != 0) {
                    $amor = DB::select("SELECT a.id, a.cant_personajes, a.salud, a.descripcion FROM auxiliares x INNER JOIN acciones a ON x.id_hijo = a.id WHERE x.id_padre = ".$key->arbol);
                }else{
                    $amor = DB::select("SELECT a.id, cant_personajes,salud,descripcion FROM acciones a LEFT JOIN auxiliares x ON a.id = x.id_hijo WHERE x.id_hijo IS NULL");
                    DB::table('actions')
                        ->select('actions.id', 'actions.number_character', 'actions.health', 'actions.description')
                        ->join('helpers', 'actions.id', '=', 'helpers.id_son')
                        ->whereNull('helpers.id_son')
                        ->get();
                }
                $indice = rand(0, count($amor)-1);
                array_push($accion, $key->nombre." realiza la ".$amor[$indice]->descripcion);
                $key->salud = $key->salud + $amor[$indice]->salud;

                $key->salud = ($key->salud < 0) ? 0 : $key->salud;
                $key->salud = ($key->salud > 100) ? 100 : $key->salud;

                /*
                $super = DB::select("SELECT id FROM auxiliares WHERE id_padre = ".$amor[$indice]->id);
                if (count($super) != 0) {
                    $key->arbol = $amor[$indice]->id;
                }
                array_push($final, $key);
            }
            ?>
*/