<?php
namespace Wandu\Festival\Providers;

use Illuminate\Database\Capsule\Manager as Capsule;
use Wandu\DI\ContainerInterface;
use Wandu\DI\ServiceProviderInterface;

class DatabaseProvider implements ServiceProviderInterface
{
    public function register(ContainerInterface $app)
    {
        $app->closure(Capsule::class, function (ContainerInterface $app) {
            $capsule = new Capsule();
            $default = $app->config('database.default');
            $capsule->addConnection($app->config("database.connections.{$default}"));
            $capsule->setAsGlobal();
            $capsule->bootEloquent();
            return $capsule;
        });
    }
}
