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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('missao', 'MissaoValoresController');
Route::resource('documentos', 'DocumentosController');
Route::resource('cursos', 'CursosController');
Route::resource('adm', 'AdminController');
Route::resource('banner', 'BannerController');
Route::resource('grau', 'GrauController');
Route::resource('conquistas', 'ConquistasController');
Route::resource('pages', 'PageController');
Route::resource('noticias', 'NoticiasController');
Route::resource('contacto', 'ContactoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'BannerController@index')->name('home');
Route::get('/qualidade', 'PageController@qualidade')->name('qualidade');
Route::get('/fundamentos', 'PageController@fundamentos')->name('fundamentos');
Route::get('/cooperacao', 'PageController@cooperacao')->name('cooperacao');
Route::get('/info', 'PageController@create')->name('info');
Route::post('adm/status-banner', 'BannerController@changeStatus')->name('status-banner');
Route::get('/investigacao', 'PageController@investigacao')->name('investigacao');
Route::get('/licenciatura', 'PageController@licenciatura')->name('licenciatura');
