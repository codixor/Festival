<?php
namespace Wandu\Festival\Providers;

use Wandu\DI\ContainerInterface;
use Wandu\DI\ServiceProviderInterface;
use Whoops\Handler\PlainTextHandler;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

class ErrorHandleProvider implements ServiceProviderInterface
{
    public function boot(ContainerInterface $app)
    {
        $whoops = new Run();
        if ($app->config('app.debug', true)) {
            $whoops->pushHandler(new PrettyPageHandler());
        } else {
            $whoops->pushHandler(new PlainTextHandler());
        }
        $whoops->register();
    }

    public function register(ContainerInterface $app)
    {
    }
}
