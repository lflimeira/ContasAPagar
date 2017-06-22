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

Route::get('/contas', "ContasPagarController@listar");

Route::get('/cadastro', "ContasPagarController@cadastro");

Route::post('/salvar', "ContasPagarController@salvar");

Route::get('/editar/{id}', "ContasPagarController@editar");

Route::post('/update/{id}', "ContasPagarController@update");

Route::get('/apagar/{id}', "ContasPagarController@apagar");