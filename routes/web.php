<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/play/', [NameController::class, 'play']);

Route::post('/takeNames/', [NameController::class, 'takeNames']);

Route::post('/generateNames/', [NameController::class, 'generateNames']);

Route::get('/history/', [ActionController::class, 'history']);

Route::get('/about/', [HelperController::class, 'about']);

/*Route::get('jugar/', [VistasController::class, 'play']); SOLO DE CONSULTA

Route::get('acerca de/', [VistasController::class, 'about']);

Route::post('jugar/random/', [PersonajeController::class, 'generar'])->name('random');

Route::post('jugar/personas/', [PersonajeController::class, 'tomar'])->name('personas');

Route::get('historia/', [VistasController::class, 'game'])->name('game');

Route::get('ganador/', [VistasController::class, 'win']);*/
