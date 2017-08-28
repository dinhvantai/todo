<?php

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

$app->group(['prefix' => 'api/v1/'], function () use ($app) {
    $app->get('todos', 'TodoController@index');
    $app->get('todos/{id:[0-9]+}', 'TodoController@show');
    $app->post('todos', 'TodoController@store');
    $app->put('todos/{id:[0-9]+}', 'TodoController@update');
    $app->delete('todos/{id:[0-9]+}', 'TodoController@destroy');
});
