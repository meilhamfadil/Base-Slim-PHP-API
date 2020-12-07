<?php

namespace Core\Base;

use Core\Base\App;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class Register
{
    /** @var ContainerInterface $container description */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __invoke(Request $request, Response $response, callable $next)
    {
        App::register($request, $response);
        App::container($this->container);
        App::$logger->info("--------------------------------------------------");
        App::$logger->info("Start");
        App::$logger->info("Header : ", $request->getHeaders());
        return $response = App::$response = $next($request, $response);
    }
}
