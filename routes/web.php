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

// API routes for Task Management
$router->group(['prefix' => 'api'], function () use ($router) {
    // Get all tasks with optional filtering and pagination
    $router->get('tasks', 'TaskController@index');
    
    // Get a specific task by ID
    $router->get('tasks/{id}', 'TaskController@show');
    
    // Create a new task
    $router->post('tasks', 'TaskController@store');
    
    // Update an existing task
    $router->put('tasks/{id}', 'TaskController@update');
    
    // Delete a task
    $router->delete('tasks/{id}', 'TaskController@destroy');
});
