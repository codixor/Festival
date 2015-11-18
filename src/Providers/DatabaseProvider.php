<?php
namespace Wandu\Festival\Providers;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Wandu\DI\ContainerInterface;
use Wandu\DI\ServiceProviderInterface;

class DatabaseProvider implements ServiceProviderInterface
{
    public function boot(ContainerInterface $app)
    {
		$app->get(Manager::class)->setAsGlobal();
            
		$app->get(Manager::class)->bootEloquent();
    }

    public function register(ContainerInterface $app)
    {
        $app->closure(Manager::class, function (ContainerInterface $app) {
            $capsule = new Capsule;
           
			$default = $app->config('database.default');
            $capsule->addConnection($app->config("database.connections.{$default}"));			
			$capsule->setEventDispatcher(new Dispatcher(new Container));
			
            return $capsule;
        });
    }
}
