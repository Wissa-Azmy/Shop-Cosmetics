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


	Route::get('/', function () {return view('welcome');});

	route::get('about', 'PagesController@home');

	/***********************************/

	route::get('items', 'ItemsController@index')->middleware('auth');

	route::get('items/{item}', 'ItemsController@show')->middleware('auth');

	route::get('items/{item}/edit', 'ItemsController@edit')->middleware('auth');

	route::patch('items/{item}', 'ItemsController@update')->middleware('auth');

	route::delete('items/{item}', 'ItemsController@delete')->middleware('auth');

	/***********************************/

	route::get('invoices', 'InvoicesController@index')->middleware('auth');

	route::get('invoices/{invoice}', 'InvoicesController@show')->middleware('auth');

	route::get('invoices/{invoice}/edit', 'InvoicesController@edit')->middleware('auth');

	route::patch('invoices/{invoice}', 'InvoicesController@update')->middleware('auth');

	/***********************************/

	route::get('suppliers', 'SuppliersController@index')->middleware('auth');

	route::get('suppliers/{supplier}', 'SuppliersController@show')->middleware('auth');

	route::post('suppliers/{supplier}/items', 'ItemsController@store')->middleware('auth');

	route::post('suppliers', 'SuppliersController@store')->middleware('auth');

	/***********************************/

	route::get('customers', 'CustomersController@index')->middleware('auth');

	route::get('customers/{customer}', 'CustomersController@show')->middleware('auth');

	route::post('customers/{customer}/invoices', 'InvoicesController@store')->middleware('auth');

	route::post('customers', 'CustomersController@store')->middleware('auth');


	Route::auth();

	Route::get('/home', 'HomeController@index');



