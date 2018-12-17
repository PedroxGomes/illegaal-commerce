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
Route::get('/contato', function () {
    return view('site.contato');
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
Route::post('/admin/cadastrarprodutos', "adminLogin@cadastrarprodutos")->name('cadastrarprodutos');
Route::get('/admin/cadastrarclientes', "adminLogin@cadastrarclientes")->name('cadastrarclientes');

Route::get('/admin/editarprodutos/{id}', "adminLogin@editarprodutos");
Route::post('/admin/editarprodutos/{id}', "adminLogin@editarprodutos");
Route::get('/admin/excluirproduto/{id}', "adminLogin@excluirproduto");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
