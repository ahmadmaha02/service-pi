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
