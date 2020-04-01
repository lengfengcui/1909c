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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login','LoginController@login');
Route::post('logindo','LoginController@logindo');


Route::prefix('news')->group(function(){
	Route::get('create','NewsController@create');
	Route::post('store','NewsController@store');
	Route::get('index','NewsController@index');
	Route::get('edit/{id}','NewsController@edit');
});
