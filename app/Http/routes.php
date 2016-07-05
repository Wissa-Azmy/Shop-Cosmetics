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

/***********************************/

route::get('items', 'ItemsController@index');

route::get('items/{item}', 'ItemsController@show');

route::get('items/{item}/edit', 'ItemsController@edit');

route::patch('items/{item}', 'ItemsController@update');

/***********************************/

route::get('invoices', 'InvoicesController@index');

route::get('invoices/{invoice}', 'InvoicesController@show');

route::get('invoices/{invoice}/edit', 'InvoicesController@edit');

route::patch('invoices/{invoice}', 'InvoicesController@update');

/***********************************/

route::get('suppliers', 'SuppliersController@index');

route::get('suppliers/{supplier}', 'SuppliersController@show');

route::post('suppliers/{supplier}/items', 'ItemsController@store');

route::post('suppliers', 'SuppliersController@store');

/***********************************/

route::get('customers', 'CustomersController@index');

route::get('customers/{customer}', 'CustomersController@show');

route::post('customers/{customer}/invoices', 'InvoicesController@store');

route::post('customers', 'CustomersController@store');


