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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('posts',           ['uses' => 'PostController@list']);
    $router->get('posts/{id}',      ['uses' => 'PostController@get']);
    $router->post('posts',          ['uses' => 'PostController@create']);
    $router->delete('posts/{id}',   ['uses' => 'PostController@delete']);
    $router->put('posts/{id}',      ['uses' => 'PostController@update']);

    $router->get('comments',           ['uses' => 'CommentsController@list']);
    $router->get('comments/{id}',      ['uses' => 'CommentsController@get']);
    $router->post('comments',          ['uses' => 'CommentsController@create']);
    $router->delete('comments/{id}',   ['uses' => 'CommentsController@delete']);
    $router->put('comments/{id}',      ['uses' => 'CommentsController@update']);

    $router->get('user',            ['uses' => 'UsersController@list']);
    $router->get('user/{id}',       ['uses' => 'UsersController@get']);
    $router->post('user',           ['uses' => 'UsersController@create']);
    $router->delete('user/{id}',    ['uses' => 'UsersController@delete']);
    $router->put('user/{id}',       ['uses' => 'UsersController@update']);
});