<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NameController extends Controller
{
    public function play()
    {
        return view('play');
    }
    public function takeNames(Request $request)
    {
        $listLive = array();
        foreach ($request->boy as $key) {
            $helper = array(
                'name' => $key,
                'health' => 100,
                'sex' => 'm',
                'tree' => 0,
                'ally' => 0,
                'days' => 0
            );
            array_push($listLive, $helper);
        }
        foreach ($request->girl as $key) {
            $helper = array(
                'name' => $key,
                'health' => 100,
                'sex' => 'f',
                'tree' => 0,
                'ally' => 0,
                'days' => 0
            );
            array_push($listLive, $helper);
        }
        session(['listLive' => json_encode($listLive), 'day' => 1, 'listDeath' => json_encode(array())]);
        return redirect()->to('/history/')->send();
    }
    public function generateNames()
    {
        try {
            $listLive = array();
            $nameBoy = Name::where('sex', '=', 'm')->get();
            $nameGirl = Name::where('sex', '=', 'f')->get();
            for ($i = 0; $i < 10; $i++) {
                $helperBoy = array(
                    'name' => $nameBoy[rand(0, count($nameBoy) - 1)]->name,
                    'health' => 100,
                    'sex' => 'm',
                    'tree' => 0,
                    'ally' => 0,
                    'days' => 0
                );
                $helperGirl = array(
                    'name' => $nameGirl[rand(0, count($nameGirl) - 1)]->name,
                    'health' => 100,
                    'sex' => 'f',
                    'tree' => 0,
                    'ally' => 0,
                    'days' => 0
                );
                array_push($listLive, $helperBoy);
                array_push($listLive, $helperGirl);
            }
            session(['listLive' => json_encode($listLive), 'day' => 1, 'listDeath' => json_encode(array())]);
            return redirect()->to('/history/')->send();
        } catch (\Throwable $th) {
            echo "alert('Se ha producido un error volver a ingresarlo')";
            return redirect()->to('/play/')->send();
        }
    }
}
