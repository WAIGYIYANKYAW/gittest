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
Route::resource('receipe','ReceipeController');
// Route::get('create_receipe','ReceipeController@createReceipeForm');
// Route::post('receipe','ReceipeController@create');