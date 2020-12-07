<?php

namespace Features\Example;

use Core\Base\App;
use Slim\Http\Request;
use Slim\Http\Response;

class ExampleController
{

    public function example(Request $request, Response $response, array $args)
    {
        return App::send(array(
            array("name" => "Ilham"),
            array("name" => "Faisal"),
            array("name" => "Ahmad")
        ));
    }
}
