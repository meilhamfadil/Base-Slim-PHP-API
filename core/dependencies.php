<?php

use Buki\Pdox;
use Core\Base\App;
use Core\Base\BaseController;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Psr\Container\ContainerInterface;

$container = $app->getContainer();

$container['logger'] = function (ContainerInterface $c) {
    $settings = $c->get("settings")['logger'];
    $logger = new Logger($settings['name'], array(
        new StreamHandler($settings['path'], Logger::DEBUG)
    ));
    App::$logger = $logger;
    return $logger;
};

$container['db'] = function (ContainerInterface $c){
    $settings = $c->get("settings")['database'];
    return new Pdox($settings);
};