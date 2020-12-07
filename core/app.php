<?php

use Core\Base\App as BaseApp;
use Core\Base\Register;
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

$app = new App(array(
    'settings' => array(
        'displayErrorDetails' => ENVIRONMENT != "production" || ENVIRONMENT != 'sandbox',
        'addContentLengthHeader' => true,
        'logger' => [
            'name' => 'app',
            'path' => BASEPATH . "/../logs/" . date("Ymd") . ".log",
        ],
        'database' => [
            'host' => 'localhost',
            'driver' => 'mysql',
            'database' => 'empty',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_general_ci',
            'prefix' => ''
        ]
    )
));

$app->get('/favicon.ico', function (Request $request, Response $response, $args) {
    return BaseApp::sendError("No Content", 204);
});

$app->get("/", function (Request $request, Response $response, $args) {
    return BaseApp::sendError("Forbidden", 403);
});

$app->add(new Register($app->getContainer()));
