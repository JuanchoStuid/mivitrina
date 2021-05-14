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

// Route::get('/', function () {
//     return view('welcome');
// });


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

Route::get('master-producto', function(){
  return view('layouts.master-product1');
});

Route::get('welcome', 'HomeController@index')->name('home.index');
Route::get('', 'HomeController@index')->name('home.index');
Route::get('about', 'AboutController@index')->name('about.index');
Route::get('producto', 'ProductController@index')->name('product.index');
Route::get('product{id}', 'ProductController@show')->name('product.show');
Route::get('media', 'MediaController@index')->name('media.index');
Route::get('blog{id}', 'BlogController@show')->name('blog.show');
Route::get('shop', 'ShopController@index')->name('shop.index');
