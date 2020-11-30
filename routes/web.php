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

Route::get('map','MapController@map');
Route::get('indexx','MainController@index');
Route::get('create','MainController@create');
Route::post('store','MainController@store');
Route::get('destroy/{id}','MainController@destroy');
Route::get('addImageS/{id}','MainController@addImageS');
Route::post('addImage/{id}','MainController@addImage');
Route::get('activity/{id}','MainController@activity');

Route::get('/','WebControoller@index')->middleware("auth");

Route::get('showDetails/{id}','WebControoller@showDetails');
Route::get('addToCart/{product}','WebControoller@addToCart');
Route::get('showCart','WebControoller@showCart');
Route::put('update/{product}', 'WebControoller@update');
Route::delete('remove/{product}', 'WebControoller@remove');

Route::post('like','WebControoller@postLikePost');
Route::get('checkout/{amount}','WebControoller@checkout');
Route::post('charge','WebControoller@charge');
Route::get('like/{id}','WebControoller@like');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/logout" , function(){

	Auth::logout();
return redirect('/login');
});
