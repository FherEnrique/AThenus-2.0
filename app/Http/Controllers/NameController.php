<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NameController extends Controller
{
    public function play()
    {
        if (empty(session('numberDistricts'))){
            session(['numberDistricts' => 13]);
        }
        $numberDistricts = session('numberDistricts');
        return view('play', compact('numberDistricts'));
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
            $numberName = session('numberDistricts');
            for ($i = 0; $i < $numberName; $i++) {
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
    protected function upDistricts()
    {
        $helper = session('numberDistricts');
        $helper++;
        session(['numberDistricts' => $helper]);
        redirect()->to('/play/')->send();
    }
    protected function downDistricts()
    {
        $helper = session('numberDistricts');
        $helper--;
        $helper = ($helper == 0) ? 1 : $helper;
        session(['numberDistricts' => $helper]);
        redirect()->to('/play/')->send();
    }
}
