<?php
namespace Wandu\Festival\Providers;

use Wandu\DI\ContainerInterface;
use Wandu\DI\ServiceProviderInterface;
use Wandu\Http\Psr\Factory\ResponseFactory;
use Wandu\Http\Psr\Factory\ServerRequestFactory;
use Wandu\Http\Psr\Factory\UploadedFileFactory;
use Wandu\Http\Psr\Sender\ResponseSender;

class HttpProvider implements ServiceProviderInterface
{
    public function boot(ContainerInterface $app)
    {
    }

    public function register(ContainerInterface $app)
    {
        $app->bind(ServerRequestFactory::class);
        $app->bind(UploadedFileFactory::class);
        $app->bind(ResponseFactory::class);
        $app->bind(ResponseSender::class);
    }
}
