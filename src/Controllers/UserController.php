<?php
namespace Wandu\Festival\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Wandu\Router\Contracts\ControllerInterface;

class UserController implements ControllerInterface
{
    public function index(ServerRequestInterface $request)
    {
        return 'Hello World :D';
    }
}
