<?php

use Middleware\AppHook;
use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

$app = new App(array(
    'settings' => array(
        'displayErrorDetails' => ENVIRONMENT != "production" || ENVIRONMENT != 'sandbox',
        'determineRouteBeforeAppMiddleware' => true,
        'addContentLengthHeader' => false,
        'encryption_key' => "",
        'jwt' => array(
            'key' => "ingDLMRuGe9UKHRNjs7cYckS2yul4lc3",
            'lifetime' => strtotime('+8 hours')
        ),
    )
));


$app->get('/favicon.ico', function (Request $request, Response $response, $args) {
    return $response->withStatus(204, "No Content");
});

$app->get("/", function (Request $request, Response $response, $args) {
    return $response->withStatus(403)->write("Forbidden");
});

$app->add(new AppHook());
