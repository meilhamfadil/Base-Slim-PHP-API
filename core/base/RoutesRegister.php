<?php

use Core\Base\Routes;

class RoutesRegister
{
    public static $listOfRoutes = array();

    public static function register($name, Routes $routes)
    {
        self::$listOfRoutes[$name] = $routes;
    }
    public static function getRegisteredRoute()
    {
        return self::$listOfRoutes;
    }
}
