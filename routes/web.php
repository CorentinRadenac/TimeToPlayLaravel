<?php
use Illuminate\Http\Request;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Personne 
Route::get('/user', 'userController@index');
Route::get('/user/{id}','userController@show');
Route::post('/user','userController@store');
Route::put('/user/{id}','userController@update');
Route::delete('/user/{id}','userController@destroy');

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