<?php

use Illuminate\Http\Request;

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Personne 
Route::get('/personne', 'personneController@index');
Route::get('/personne/{id}','personneController@show');
Route::post('/personne','personneController@store');
Route::put('/personne/{id}','personneController@update');
Route::delete('/personne/{id}','personneController@destroy');

//Organisation

Route::get('/organisation', 'organisationController@index');
Route::get('/organisation/{id}','organisationController@show');
Route::post('/organisation','organisationController@store');
Route::put('/organisation/{id}','organisationController@update');
Route::delete('/organisation/{id}','organisationController@destroy');

//Evenement
Route::get('/evenement', 'evenementController@index');
Route::get('/evenement/{id}','evenementController@show');
Route::post('/evenement','evenementController@store');
Route::put('/evenement/{id}','evenementController@update');
Route::delete('/evenement/{id}','evenementController@destroy');

//Lieux_Culte
Route::get('/lieuCulte', 'lieuCulteController@index');
Route::get('/lieuCulte/{id}','lieuCulteController@show');
Route::post('/lieuCulte','lieuCulteController@store');
Route::put('/lieuCulte/{id}','lieuCulteController@update');
Route::delete('/lieuCulte/{id}','lieuCulteController@destroy');

//Type
Route::get('/type', 'typeController@index');
Route::get('/type/{id}','typeController@show');
Route::post('/type','typeController@store');
Route::put('/type/{id}','typeController@update');
Route::delete('/type/{id}','typeController@destroy');

//Jeux
Route::get('/jeu', 'jeuController@index');
Route::get('/jeu/{id}','jeuController@show');
Route::post('/jeu','jeuController@store');
Route::put('/jeu/{id}','jeuController@update');
Route::delete('/jeu/{id}','jeuController@destroy');