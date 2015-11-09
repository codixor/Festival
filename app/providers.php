<?php
use Wandu\DI\ContainerInterface;
use Wandu\Festival\Providers\ContainerProvider;
use Wandu\Festival\Providers\ErrorHandleProvider;
use Wandu\Festival\Providers\HttpProvider;
use Wandu\Festival\Providers\RouterProvider;
use Wandu\Festival\Providers\SessionProvider;
use Wandu\Festival\Providers\ViewProvider;

return function (ContainerInterface $container) {
    $container->register(new ContainerProvider());
    $container->register(new ErrorHandleProvider());
    $container->register(new RouterProvider());
    $container->register(new HttpProvider());
    $container->register(new SessionProvider());
    $container->register(new ViewProvider());
};
