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

Route::resource('produto', 'ProdutoController');
