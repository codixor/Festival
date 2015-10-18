<?php
namespace Wandu\Festival\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Wandu\Router\Contracts\ControllerInterface;

class HomeController implements ControllerInterface
{
    public function index(ServerRequestInterface $request)
    {
        $session = $request->getAttribute('session');
        //$session->flash('hello', "good morning~");
        //$session->set('hello', 'world');
        return 'Hello World :D' . $session->get('hello');
    }
}
