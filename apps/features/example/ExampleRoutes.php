<?php

namespace Features\Example;

use Core\Base\Routes;
use Slim\App;

class ExampleRoutes extends Routes
{
    public function register(App $app)
    {
        $controller = "Features\Example\ExampleController";

        $app->get("/example", "$controller:example");
    }
}
