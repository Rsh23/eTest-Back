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
$router->get('/categories', 'CategoryController@index');
$router->get('/categories/{category}', 'CategoryController@show');


// Product
$router->get('/products', 'ProductController@index');
$router->get('/products/{product}', 'ProductController@show');
$router->get('/search/product', 'ProductController@search');