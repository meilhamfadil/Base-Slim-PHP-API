<?php

namespace Middleware;

use Core\Base\App;
use Slim\Http\Request;
use Slim\Http\Response;

class AppMiddleware
{

    public function __invoke(Request $request, Response $response, callable $next)
    {
        // if (rand(0, 1) == 0)
        //     return App::sendError("Error from Middleware")->withStatus(400);

        return $response = $next($request, $response);
    }
}
