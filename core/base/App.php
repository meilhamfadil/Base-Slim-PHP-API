<?php

namespace Core\Base;

use FastRoute\RouteParser\StdTest;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use RuntimeException;
use Slim\Http\Request;
use Slim\Http\Response;

class App
{
    /** @var ContainerInterface $container description */
    public static $container;

    /** @var Request $request description */
    public static $request;

    /** @var Response $response description */
    public static $response;

    /** @var LoggerInterface $logger description */
    public static $logger;

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Request $request Description
     * @param Response $response Description
     * @return static
     * @throws RuntimeException
     **/
    public static function register(Request $request, Response $response)
    {
        self::$request = $request;
        self::$response = $response;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param ContainerInterface $container Description
     * @return static
     * @throws RuntimeException
     **/
    public static function container(ContainerInterface $container)
    {
        self::$container = $container;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @return object
     * @throws RuntimeException
     **/
    public static function getParsedBody()
    {
        $body = self::$request->getParsedBody();
        if (!is_null($body)) {
            self::$logger->info("Body :", $body);
        }
        return (object) $body;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @return object
     * @throws RuntimeException
     **/
    public static function getParams()
    {
        $params = self::$request->getParams();
        if (!is_null($params)) {
            self::$logger->info("Params :", $params);
        }
        return (object) $params;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param string $message Description
     * @param int $code Description
     * @return Response
     * @throws RuntimeException
     **/
    public static function sendError($message, $code = 400, $additional = array())
    {
        self::$response = self::$response->withJson(array_merge(
            array("message" => $message),
            $additional
        ))->withStatus($code);
        return self::$response;
    }

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param string $message Description
     * @return Response
     * @throws RuntimeException
     **/
    public static function send($data)
    {
        self::$response = self::$response->withJson($data)->withStatus(200);
        return self::$response;
    }

    /**
     * @template T
     * @param T $className
     * @return T
     */
    public static function load(string $className)
    {
        return new $className(self::$container->get("db"));
    }
}
