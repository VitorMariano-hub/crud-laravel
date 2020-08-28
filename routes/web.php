<?php

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

Route::get('/', 'HomeController@index')->name('home');

//Rota para listar produto a ser deletado
Route::get('/produtos/delete/{id}', 'ProdutoController@delete')->name('produtos.delete');

Route::resource('produtos', 'ProdutoController');
