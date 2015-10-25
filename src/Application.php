<?php
namespace Wandu\Festival;

use Wandu\DI\Container;
use Wandu\Http\Psr\Factory\ServerRequestFactory;
use Wandu\Http\Psr\Sender\ResponseSender;

class Application extends Container
{
    public function boot()
    {
        $this->call(require __DIR__ .'/../app/providers.php');
        $this->call(require __DIR__ .'/../app/routes.php');

        date_default_timezone_set($this->config('app.timezone'));
    }

    public function execute()
    {
        $request = $this->get(ServerRequestFactory::class)->fromGlobals();
        $response = $this->get('router')->dispatch($request);
        $this->get(ResponseSender::class)->send($response);
    }
}
