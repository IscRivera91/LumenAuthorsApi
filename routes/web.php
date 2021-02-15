<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

/** @var \Laravel\Lumen\Routing\Router $router */


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


Route::group(['prefix'=>'author'], function () {
    Route::get('/','AuthorController@index');
    Route::post('/','AuthorController@store');
    Route::get('/{author}','AuthorController@show');
    Route::put('/{author}','AuthorController@update');
    Route::patch('/{author}','AuthorController@update');
    Route::delete('/{author}','AuthorController@destroy');
});
