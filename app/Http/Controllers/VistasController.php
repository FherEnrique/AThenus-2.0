<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistasController extends Controller
{
    public function play()
    {
        return view('play');
    }
    public function about()
    {
        return view('about');
    }
    public function game()
    {
        return view('game');
    }
    public function win()
    {
        return view('winners');
    }
}
