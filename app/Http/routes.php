<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/produtos', 'ProdutosController@lista');
Route::get('/produtos/mostra/{id}', 'ProdutosController@mostra')->where('id', '[0-9]+');
Route::get('/produtos/form','ProdutosController@formulario');
Route::post('/produtos/adicionar','ProdutosController@adicionar');
Route::get('/produtos/deletar/{id}','ProdutosController@deleta');
Route::get('produtos/json','ProdutosController@listaJson');


Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
