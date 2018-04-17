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

Route::get('/', ['as' => 'home_path', 'uses' => function () {
    return view('welcome');
}]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/ajoutJeu', 'ajoutJeu');
Route::view('/ajoutEvent', 'ajoutEvent');
Route::view('/vosEvenements', 'vosEvenements');

//Personne 
Route::get('/user', 'userController@index');
Route::post('/user','userController@store');
Route::put('/user/{id}','userController@update');
Route::delete('/user/{id}','userController@destroy');

//Organisation

Route::get('/organisation', 'organisationController@index')->name('organisation.affiche');
Route::post('/organisation','organisationController@store');
//Route::put('/organisation/{id}','organisationController@update');
// Route::delete('/organisation/{id}','organisationController@destroy')->name('organisation.destroy');
Route::get('/organisation/delete/{id}','organisationController@destroy')->name('organisation.destroy');

//Evenement
Route::get('/evenement', 'evenementController@index');
Route::get('/evenement/{id}','evenementController@show');
Route::post('/evenement','evenementController@store');
Route::put('/evenement/{id}','evenementController@update');
Route::delete('/evenement/{id}','evenementController@destroy');

//Lieux_Culte
Route::get('/lieuCulte', 'lieuCulteController@index');
Route::post('/lieuCulte','lieuCulteController@store');
Route::put('/lieuCulte/{id}','lieuCulteController@update');
Route::delete('/lieuCulte/{id}','lieuCulteController@destroy');


//Jeux
Route::get('/jeu', 'jeuController@index');;
Route::post('/jeu','jeuController@store');
Route::put('/jeu/{id}','jeuController@update');
Route::delete('/jeu/{id}','jeuController@destroy');