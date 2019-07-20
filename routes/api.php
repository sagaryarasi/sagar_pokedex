<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pokemonapi', 'PokemonController@pokesapi');

Route::get('/pokemonapi/{id}', 'PokemonController@pokemonid');

Route::get('/trainerapi', 'UserController@userdata');

Route::get('/trainerapi/{id}', 'UserController@userid');
