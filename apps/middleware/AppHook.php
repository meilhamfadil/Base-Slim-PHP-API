<?php

namespace Middleware;

use Core\Base\App;
use Slim\Http\Request;
use Slim\Http\Response;

class AppHook
{

    public function __invoke(Request $request, Response $response, callable $next)
    {
        App::register($request, $response);
        return $response = $next($request, $response);
    }
}
