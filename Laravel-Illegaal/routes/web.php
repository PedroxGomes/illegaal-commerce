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
    return view('site.home');
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

Route::get('/admin', "adminLogin@home")->name('admin');

Route::get('/admin/listagemprodutos', "adminLogin@listagemprodutos")->name('listagemprodutos');

Route::get('/admin/cadastrarprodutos', "adminLogin@cadastrarprodutos")->name('cadastrarprodutos');

Route::get('/admin/cadastrarclientes', "adminLogin@cadastrarclientes")->name('cadastrarcliente');

Route::get('/admin/editarprodutos', "adminLogin@editarprodutos")->name('editarprodutos');

Route::get('/admin/editarprodutos', "adminLogin@editarprodutos");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
