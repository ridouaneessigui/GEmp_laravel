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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('projet/create','Projetcontroller@create');

Route::post('projet/enregistrer','Projetcontroller@store');
Route::get('projet/{id}/show','Projetcontroller@show');

Route::get('/fr', function () {
    return view('projet/imprime');
});
Route::get('Employeur/create','Employeurcontroller@create');

Route::post('employeur/enregistrer','Employeurcontroller@store');
Route::get('Employeur/{id}/show','Employeurcontroller@show');