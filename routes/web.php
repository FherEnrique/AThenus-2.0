<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\DeathController;
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

Route::get('/ganador/', [ActionController::class, 'win']);

Route::get('/destroyTheGame/', [DeathController::class, 'destroyTheGame']);
