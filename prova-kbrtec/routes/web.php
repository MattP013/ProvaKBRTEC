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
    return view('index');
});

Route::get('admin', 'UsersController@PaginaAdmin');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/login', 'UsersController@Login')->name('login');
Route::post('/Cproduto', 'ProdutoController@CadastroProduto')->name('Cproduto');
Route::get('/Eproduto/{id}','ProdutoController@EditarProduto')->name('Eproduto');