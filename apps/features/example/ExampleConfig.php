<?php

namespace Features\Example;

use Features\Example\ExampleRoutes;
use Psr\Container\ContainerInterface;
use RoutesRegister;

RoutesRegister::register("example", new ExampleRoutes($app));

$container["data"] = function (ContainerInterface $c) {
    return array(
        array("name" => "Ilham"),
        array("name" => "Fadil"),
        array("name" => "Oktora"),
    );
};
