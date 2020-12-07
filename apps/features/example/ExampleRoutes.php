<?php

namespace Features\Example;

use Core\Base\BaseRoutes;
use Middleware\AppMiddleware;
use Slim\App;

class ExampleRoutes extends BaseRoutes
{
    public function register(App $app)
    {
        $controller = "Features\Example\ExampleController";

        $app->get("/example", "$controller:example")
            ->add(new AppMiddleware());
    }
}
