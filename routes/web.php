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

$router->group(['prefix' => 'hukum'], function () use ($router) {
    $router->post('/', 'PelaporanHukumController@createPelaporanHukum');
    $router->get('/', 'PelaporanHukumController@getAllHukum');
    $router->put('/{id_hukum}', 'PelaporanHukumController@update');
    $router->delete('/{id_hukum}', 'PelaporanHukumController@deleteHukum');
});

$router->group(['prefix' => 'kontrak'], function () use ($router) {
    $router->post('/', 'SuratMasukController@createSuratMasuk');
    $router->get('/', 'SuratMasukController@getAllSurat');
    $router->put('/{id_kontrak}', 'SuratMasukController@update');
    $router->delete('/{id_kontrak}', 'SuratMasukController@deleteSurat');
});
$router->group(['prefix' => 'products'], function () use ($router) {
    $router->post('/', 'ProductController@create');
    $router->get('/{product_id}', 'ProductController@read');
    $router->get('/', 'ProductController@readAll');
    $router->put('/{product_id}', 'ProductController@update');
    $router->delete('/{product_id}', 'ProductController@delete');
});
$router->group(['prefix' => 'storagetank'], function () use ($router) {
    $router->post('/', 'StorageTankController@create');
    $router->get('/{id_tangki_penyimpanan}', 'StorageTankController@read');
    $router->get('/', 'StorageTankController@readAll');
    $router->put('/{id_tangki_penyimpanan}', 'StorageTankController@update');
    $router->delete('/{id_tangki_penyimpanan}', 'StorageTankController@delete');
});

$router->group(['prefix' => 'kesehatan'], function () use ($router) {
    $router->post('/', 'KesehatanController@create');
    $router->get('/{id_kesehatan}', 'KesehatanController@read');
    $router->get('/', 'KesehatanController@readAll');
    $router->put('/{id_kesehatan}', 'KesehatanController@update');
    $router->delete('/{id_kesehatan}', 'KesehatanController@delete');
});
$router->group(['prefix' => 'karyawan'], function () use ($router) {
    $router->post('/', 'karyawanController@create');
    $router->get('/{nim}', 'karyawanController@read');
    $router->get('/', 'karyawanController@readAll');
    $router->put('/{nip}', 'karyawanController@update');
    $router->delete('/{nip}', 'karyawanController@delete');
});

$router->group(['prefix' => 'workshop'], function () use ($router) {
    $router->post('/', 'WorkshopController@create');
    $router->get('/{id_workshop}', 'WorkshopController@read');
    $router->get('/', 'WorkshopController@readAll');
    $router->put('/{id_workshop}', 'WorkshopController@update');
    $router->delete('/{id_workshop}', 'WorkshopController@delete');
});

$router->get('/sales[/{sales_id}]', 'SalesController@read');

$router->get('/customers[/{customer_id}]', 'CustomerController@read');

$router->get('/employee-accounts', 'ControllerEmpAcc@read');
