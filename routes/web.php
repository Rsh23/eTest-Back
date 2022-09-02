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

// Category
$router->get('/category', 'CategoryController@index');
// $router->get('/category/{category}', 'CategoryController@show');


// Product
$router->get('/product', 'ProductController@index');
$router->get('/product/{product}', 'ProductController@show');