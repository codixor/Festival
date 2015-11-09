<?php
namespace Wandu\Festival;

use Wandu\DI\Container;
use Wandu\Http\Psr\Factory\ServerRequestFactory;
use Wandu\Http\Psr\Sender\ResponseSender;

class Application extends Container
{
    public function __construct()
    {
        parent::__construct();

        $this->call(require __DIR__ .'/../app/providers.php');
        $this->call(require __DIR__ .'/../app/routes.php');
    }

    public function execute()
    {
        date_default_timezone_set($this->config('app.timezone'));

        $request = $this->get(ServerRequestFactory::class)->fromGlobals();
        $response = $this->get('router')->dispatch($request);
        $this->get(ResponseSender::class)->send($response);
    }
}
