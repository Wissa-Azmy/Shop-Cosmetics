<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('about', 'PagesController@home');

route::get('items', 'ItemsController@index');

route::get('items/{item}', 'ItemsController@show');

route::get('suppliers', 'SuppliersController@index');

route::get('suppliers/{supplier}', 'SuppliersController@show');

route::post('suppliers/{supplier}/items', 'ItemsController@store');
