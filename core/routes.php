<?php

$features = glob(APPSPATH . '/features/*/*.php');
foreach ($features as $feature)
    if (preg_match("/Config/", $feature))
        include $feature;

$routes = RoutesRegister::getRegisteredRoute();
foreach ($routes as $route) {
    $route->register($app);
}
