<?php

namespace Features\Auth;

use Core\Base\Routes;
use Slim\App;

class AuthRoutes extends Routes
{
    public function register(App $app)
    {
        $controller = "Features\Auth\AuthController";

        $app->post("/login", "$controller:login");
    }
}
