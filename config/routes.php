<?php

use Cake\Core\Plugin;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::defaultRouteClass(DashedRoute::class);

Router::scope('/benchmark', function (RouteBuilder $routes) {
    $routes->connect('/rest', ['controller' => 'RestApi', 'action' => 'rest']);
    for ($i = 1; $i < 500; $i++) {
        $routes->connect('/test-route-' . $i, ['controller' => 'Unknown', 'action' => 'Unknown']);
    }
});

Plugin::routes();
