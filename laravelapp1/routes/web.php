<?php
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
    return view('home');
});
// Crea una nova categoria
Route::get('/categoria/crea', "CreaCategoriaController@create");
Route::post('/categoria/crea', "CreaCategoriaController@store");

// Crea un nou producte a una categoria existent
Route::get('/producte/crea', "CreaProducteController@create");
Route::post('/producte/crea', "CreaProducteController@store");

// Mostra productes
Route::get('/producte/{id}', "MostraProducteController@index");

// Mostra categories
Route::get('/categoria/{id}', "MostraCategoriaController@index");

// Crea una nova comanda
Route::get('/comanda/crea', "CreaComandaController@create");
Route::post('/comanda/crea', "CreaComandaController@store");

// Crea una nova comanda
Route::get('/comanda/{id}/crea', "ComandaController@create");
Route::post('/comanda/{id}/crea', "ComandaController@store");

// Edita la comanda
Route::get('/comanda/{id}/edita', "EditaController@create");
Route::post('/comanda{id}/edita', "EditaController@store");

?>

