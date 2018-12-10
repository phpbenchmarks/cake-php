<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/benchmark', function (RouteBuilder $routes) {
    $routes->connect('/helloworld', ['controller' => 'HelloWorld', 'action' => 'helloWorld']);
});
