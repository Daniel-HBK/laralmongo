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

// Names...
Route::get('/', 'Controller\TestController@index')->name('names.all');
Route::get('/name/edit/{id}', 'Controller\TestController@edit')->name('name.edit');
Route::get('/name/add', 'Controller\TestController@add')->name('name.add');
Route::post('/name/create', 'Controller\TestController@create')->name('name.create');
Route::put('/name/update/{id}', 'Controller\TestController@update')->name('name.update');
Route::delete('/name/delete/{id}', 'Controller\TestController@destroy')->name('name.delete');