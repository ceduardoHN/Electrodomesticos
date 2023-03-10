<?php

namespace App;

use App\Http\Controllers\TipoElectrodomesticoController;
use App\Http\Controllers\ElectrodomesticoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;

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

//RUTAS DE TIPOELECTRODOMESTICO
Route::get('/tipoElectrodomesticos', function(){
    $tipoE=Models\tipoElectrodomestico::all();
    return view('tipoElectrodomesticos',compact("tipoE"));
})->name("tipo.mant");

Route::get('/nuevoTipo', function()
{
    return view('nuevoTipo');
})->name("tipo.create");

Route::post("/nuevoTipo/store",[TipoElectrodomesticoController::class,"store"])->name("tipo.store");
Route::get("/nuevoTipo/editar/{id}",[TipoElectrodomesticoController::class,"edit"])->name("tipo.edit");
Route::put("/nuevoTipo/update/{id}",[TipoElectrodomesticoController::class,"update"])->name("tipo.update");
Route::get("/nuevoTipo/destroy/{id}",[TipoElectrodomesticoController::class,"destroy"])->name("tipo.destroy");

//RUTAS DE ELECTROCOMESTICOS
Route::get('/electrodomesticos', function(){
    $e=Models\Electrodomestico::all();
    return view('electrodomesticos',compact("e"));
})->name("e.mant");

Route::get('/nuevoElectrodomestico', function(){
    $tipoE=Models\tipoElectrodomestico::all();
    return view('nuevoElectrodomestico',compact("tipoE"));
})->name("e.create");

Route::post("/nuevoElectrodomestico/store",[ElectrodomesticoController::class,"store"])->name("e.store");
Route::get("/nuevoElectrodomestico/editar/{id}",[ElectrodomesticoController::class,"edit"])->name("e.edit");
Route::put("/nuevoElectrodomestico/update/{id}",[ElectrodomesticoController::class,"update"])->name("e.update");
Route::get("/nuevoElectrodomestico/destroy/{id}",[ElectrodomesticoController::class,"destroy"])->name("e.destroy");
