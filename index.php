<?php 


$database = require 'core/bootstrap.php';


// $router = new Router;

// require 'routes.php';


// $uri = trim($_SERVER['REQUEST_URI'], '/');


// require $router->direct($uri);





$uri = trim($_SERVER['REQUEST_URI'], '/');


$router = Router::load('routes.php');
require $router->direct($uri);