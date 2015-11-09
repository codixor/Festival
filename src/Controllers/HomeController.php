<?php
namespace Wandu\Festival\Controllers;

use Psr\Http\Message\ServerRequestInterface;

class HomeController extends Controller
{
    public function index(ServerRequestInterface $request)
    {
        return $this->view->render('welcome', [
            'who' => 'Festival'
        ]);
    }
}
