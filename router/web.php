<?php

use \Bramus\Router\Router;
use App\Controllers\BlogController;

// Create Router instance
$router = new Router();

$router->get('/', '\App\Controllers\BlogController@index');

// Run it!
$router->run();