<?php

use Core\Base\BaseRoutes;

class RouteRegister
{
    public static $listOfRoutes = array();

    public static function register($name, BaseRoutes $routes)
    {
        self::$listOfRoutes[$name] = $routes;
    }
    public static function getRegisteredRoute()
    {
        return self::$listOfRoutes;
    }
}
