<?php

namespace Features\Example;

use Core\Base\Routes;
use Middleware\AppMiddleware;
use Slim\App;

class ExampleRoutes extends Routes
{
    public function register(App $app)
    {
        $controller = "Features\Example\ExampleController";

        $app->post("/example", "$controller:example")
            ->add(new AppMiddleware());
    }
}
