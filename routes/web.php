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
    dd($router);
});

//Ver todas las multas
$router->get('/multas', 'MultasController@index');

//Crear multa
$router->post('/multas', 'MultasController@store');

//Ver datos de patente
$router->get('/multas/{patente}', 'MultasController@show');

//Pagar
$router->patch('/multas/{patente}/pagar', 'MultasController@pay');

//Multar
$router->patch('/multas/{patente}/cursar', 'MultasController@penalize');

//Actualizar
$router->put('/multas/{patente}', 'MultasController@update');

//Ver todos los modelos
$router->get('/modelos', 'ModelosController@index');