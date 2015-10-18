<?php
use Wandu\Festival\Controllers\HomeController;
use Wandu\Festival\Middlewares\Responsify;
use Wandu\Festival\Middlewares\Sessionify;
use Wandu\Router\Router;

return function (Router $router) {
    $router->group([
        'middleware' => [
            Sessionify::class,
            Responsify::class,
        ]
    ], function (Router $router) {
        $router->get('/', HomeController::class, 'index');
    });
};
