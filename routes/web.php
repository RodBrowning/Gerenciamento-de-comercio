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

Route::get('/', ['as' => 'pages.index','uses' => 'PagesController@index']);
Route::get('estoque',['as' => 'pages.estoque', 'uses' => 'PagesController@estoque']);
Route::get('vendas',['as' => 'pages.vendas', 'uses' => 'PagesController@vendas']);
Route::get('compras',['as' => 'pages.compras', 'uses' => 'PagesController@compras']);
Route::get('produtos',['as' => 'pages.produtos', 'uses' => 'PagesController@produtos']);

//Controllers produto e categoria
Route::resource('produto', 'ProdutosController\ProdutoController');
Route::resource('categoria', 'ProdutosController\CategoriasController\CategoriaController');

//Rota para o 'Delete categoria' que apenas deixa a inativa.
Route::get('categoria/delete/{categorium}', ['as'=>'categoria.delete', 'uses'=>'ProdutosController\CategoriasController\CategoriaController@deletar']);

Route::get('categoria/{id}/restaurar_categoria',['as'=>'categoria.restaurar', 'uses'=>'ProdutosController\CategoriasController\CategoriaController@restaurar']);

Route::get('categorias/excluidas',['as'=>'categoria.excluidas','uses'=>'ProdutosController\CategoriasController\CategoriaController@excluidas']);
