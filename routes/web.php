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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/broadcast', 'HomeController@broadcast')->name('broadcast');

Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');



// Route::get('/test', 'ChatsController@test');

// Route::group(['middleware'=> ['web']], function(){
// 	Route::get('/', 'BroadcastController@index');
// });