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

Route::get('/', 'HomeController@index');
Route::get('/user', 'UserController@index');
Route::get('/show', 'UserController@show');
Route::get('/user/create', 'UserController@create');
Route::post('/user/store', 'UserController@store');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::post('/user/update/{id} ', 'UserController@update');
Route::get('/user/delete/{id}', 'UserController@delete');
