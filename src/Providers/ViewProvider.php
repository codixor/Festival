<?php
namespace Wandu\Festival\Providers;

use Wandu\DI\ContainerInterface;
use Wandu\DI\ServiceProviderInterface;
use Wandu\Festival\View\RenderInterface;
use Wandu\Festival\View\SimpleTemplate;

class ViewProvider implements ServiceProviderInterface
{
    public function boot(ContainerInterface $app)
    {
    }

    public function register(ContainerInterface $app)
    {
        $app->closure(RenderInterface::class, function (ContainerInterface $app) {
            return new SimpleTemplate($app->path('/views'));
        });
        $app->alias('view', RenderInterface::class);
    }
}
