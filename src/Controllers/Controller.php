<?php
namespace Wandu\Festival\Controllers;

use Wandu\Festival\View\RenderInterface;
use Wandu\Http\Psr\Factory\ResponseFactory;
use Wandu\Router\Contracts\ControllerInterface;

abstract class Controller implements ControllerInterface
{
    /** @var \Wandu\Http\Psr\Factory\ResponseFactory */
    protected $response;

    /** @var \Wandu\Festival\View\RenderInterface */
    protected $view;

    public function __construct(ResponseFactory $response, RenderInterface $view)
    {
        $this->response = $response;
        $this->view = $view;
    }
}
