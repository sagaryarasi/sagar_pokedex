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

// Route::get('/data', 'MainController@user_data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/pokemo', 'PokeaddController@index');
Route::post('/capture','CapturesController@capt');
//Route::view('/home', 'pokemo.index');
//Route::resource('/capture', 'capture');
//Route::post('/captured', 'CapturesController@capt');
Route::resource('pokemo', 'PokeaddController');
// Route::get('/main', 'MainController@index');
// Route::post('/main/checklogin', 'MainController@checklogin');
// Route::post('/login', 'MainController@index');
// Route::get('/main/successlogin', 'MainController@successlogin');
// Route::get('/main/logout', 'MainController@logout');
// Route::view('/register','register');
// Route::post('/store', 'MainController@store');
//Route::view('/pokemo/create');
Route::post('/pokemo/show','PokeaddController@showbyid');
Route::get('/captured', 'CapturesController@cap_poke');
