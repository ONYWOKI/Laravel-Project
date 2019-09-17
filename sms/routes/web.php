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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'IndexController@showIndex')->name('index');
Route::get('/kiswahili','HomeController@kiswahili');
Route::get('english','HomeController@english');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/history', 'HistoryController@history');
Route::get('/germany', 'GermanyController@germany');

Route::get('/edu',function(){
	return view('layouts.edu');

Route::get('/', function){
	return view('insertForm');

Route::post('/insert','Controller@insert');
}
});
