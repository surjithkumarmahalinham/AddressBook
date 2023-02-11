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

Route::get('/',['as'=>'contact.index','uses'=>'IndexController@index']);
Route::get('/create',['as'=>'contact.create','uses'=>'IndexController@create']);
Route::post('/store',['as'=>'contact.store','uses'=>'IndexController@store']);
Route::get('/edit/{id}',['as'=>'contact.edit','uses'=>'IndexController@edit']);
Route::put('/update/{id}',['as'=>'contact.update','uses'=>'IndexController@update']);
Route::get('/delete/{id}',['as'=>'contact.delete','uses'=>'IndexController@delete']);