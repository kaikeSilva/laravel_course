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

Route::get('produtos', function() {
    return view('outras.produtos');
})->name('produtos');

Route::get('departamentos', function() {
    return view('outras.departamentos');
})->name('departamentos');

Route::get('nome','MeuControlador@nome');

Route::get('multiplicar/{n1}/{n2}','MeuControlador@multiplicar');

Route::resource('clientes','ClienteController');


Route::get('opcoes/{opcao?}',function($opcao = null) {
    return view('outras.opcoes',compact(['opcao']));
})->name('opcoes');

Route::get('exemplo',function() {
    return view('outras.exemplo');
})->name('exemplo');