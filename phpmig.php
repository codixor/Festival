<?php
use Illuminate\Database\Capsule\Manager;
use Phpmig\Adapter;
use Phpmig\Adapter\Illuminate\Database as DatabaseAdapter;
use Wandu\DI\ContainerInterface;
use Wandu\Festival\Application;

$container = new Application();

$container->alias('db', Manager::class);
$container->closure('phpmig.adapter', function(ContainerInterface $app) {
    return new DatabaseAdapter($app['db'], 'migrations');
});
$container->instance('phpmig.migrations_path', __DIR__.'/migrations');

$container->boot();

return $container;