<?php

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

$router->group(['prefix' => 'products'], function () use ($router) {
    $router->post('/', 'ProductController@create');
    $router->get('/{product_id}', 'ProductController@read');
    $router->get('/', 'ProductController@readAll');
    $router->put('/{product_id}', 'ProductController@update');
    $router->delete('/{product_id}', 'ProductController@delete');
});

$router->get('/sales[/{sales_id}]', 'SalesController@read');

$router->get('/customers[/{customer_id}]', 'CustomerController@read');

$router->get('/employee-accounts', 'ControllerEmpAcc@read');