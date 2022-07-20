<?php

use \Bramus\Router\Router;
use App\Controllers\BlogController;

// Create Router instance
$router = new Router();

// Add routes
$router->get('/', '\App\Controllers\BlogController@index');

$router->mount('/auth', function() use ($router) {
    $router->post('/register', '\App\Controllers\AuthController@register');
    $router->post('/login', '\App\Controllers\AuthController@login');
});

// Run it!
$router->run();