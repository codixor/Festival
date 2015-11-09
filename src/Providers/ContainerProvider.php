<?php
namespace Wandu\Festival\Providers;

use Wandu\DI\Helper\ConfigLoader;
use Wandu\DI\ContainerInterface;
use Wandu\DI\Helper\PathLoader;
use Wandu\DI\ServiceProviderInterface;

class ContainerProvider implements ServiceProviderInterface
{
    public function boot(ContainerInterface $app)
    {
    }

    public function register(ContainerInterface $app)
    {
        $app->closure('path', function () {
            return new PathLoader(realpath(__DIR__ . '/../..'));
        });
        $app->closure('config', function (ContainerInterface $app) {
            return new ConfigLoader($app->path('/config'));
        });
    }
}
