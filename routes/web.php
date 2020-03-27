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
Route::get('/','HomeController@index');
Route::get('js','HomeController@js');
// Route::get('/', function () {
//     return view('home',[
//         'name'=>'homepage'
//     ]);
// });
Route::get('php', function () {
    return view('php')->with('name','php page');
});
// Route::get('js', function () {
//     return view('js',[
//         'data'=>[
//             'lesson1'=>'this is lesson 1',
//             'lesson2'=>'this is lesson 2',
//             'lesson3'=>'this is lesson 3'
//         ]
//     ]);
// });
