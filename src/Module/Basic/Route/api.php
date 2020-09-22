<?php

use FastRoute\RouteCollector;

return [
    '/basic' => function (RouteCollector $route) {
        $route->addRoute(['POST'], '/depot', '/Basic/Depot/insert');
        $route->addRoute(['PUT'], '/depot', '/Basic/Depot/updateById');
        $route->addRoute(['DELETE'], '/depot', '/Basic/Depot/DeleteById');
    },
];
