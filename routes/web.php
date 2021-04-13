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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/hola', function(){
  return view('hola');
});

Route::get('prueba', function(){
  return view('prueba');
});

Route::get('master', function(){
  return view('layouts.master-primario');
});

// Route::get('about', function(){
//   return view('layouts.master-about');
// });

Route::get('welcome', 'HomeController@index')->name('home.index');
Route::get('about', 'AboutController@index')->name('about.index');
