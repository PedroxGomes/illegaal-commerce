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
    return view('illegaal');
});

Route::get('/illegaal', function () {
    return view('illegaal');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::post('/cadastro', "cadastroLogin@cadastrar");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/listagemprodutos', "adminLogin@listagemprodutos");

Route::get('/admin/cadastrarprodutos', "adminLogin@cadastrarprodutos");

Route::get('/admin/editarprodutos', "adminLogin@editarprodutos");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
