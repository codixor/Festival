<?php
namespace Wandu\Festival\Providers;

use Wandu\DI\ContainerInterface;
use Wandu\DI\ServiceProviderInterface;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class ErrorHandleProvider implements ServiceProviderInterface
{
    public function boot(ContainerInterface $app)
    {
        $whoops = new Run();
        $whoops->pushHandler(new PrettyPageHandler());
        $whoops->register();
    }

    public function register(ContainerInterface $app)
    {
    }
}
