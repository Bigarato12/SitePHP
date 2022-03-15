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



Route::get('/contato', function () {
    return view('contato.index');
})->name("Pagina_De_Contato");

Route::get('/home', function () {
    return view('home.index');
})->name("Pagina_De_Home");

Route::get('/produtos', function () {
    return view('Produtos.index');
})->name("Pagina_De_Produtos");