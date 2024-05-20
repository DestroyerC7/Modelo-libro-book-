<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


/*Gestion de Clientes*/
Route::get('/clientes',[ClientController::class, 'listClient']);
/*Busqueda de un Cliente*/
Route::get('/clientes/buscar/{codigo}',[ClientController::class, 'findClient']);
/*Registrar un nuevo Cliente*/
Route::post('clientes/save', [ClientController::class, 'saveClient']);
/*Actualizar un Cliente*/
Route::put('clientes/update/{codigo}', [ClientController::class, 'updateClient']);

Route::get('/listado', [BookController::class, 'listBook']);
/*Busqueda de un Libro*/
Route::get('/libros/buscar/{codigo}',[ClientController::class, 'findBook']);
/*Registrar un nuevo Libro*/
Route::post('libros/save', [ClientController::class, 'saveBook']);
/*Actualizar un Libro*/
Route::put('libros/update/{codigo}', [ClientController::class, 'updateBook']);