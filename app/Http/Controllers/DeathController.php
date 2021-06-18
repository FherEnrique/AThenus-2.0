<?php

namespace App\Http\Controllers;

use App\Models\Death;
use Illuminate\Http\Request;
use Session;

class DeathController extends Controller
{
    public function destroyTheGame()
    {
        Session::flush();
        redirect()->to('/play/')->send();
    }
    public function listAllDeath()
    {
        return Death::select('description')->get();
    }
}
