<?php

namespace Core\Base;

use Slim\Http\Request;
use Slim\Http\Response;

class App
{
    /** @var Request $request description */
    public static $request;

    /** @var Response $response description */
    public static $response;

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
     * @param string $message Description
     * @param int $code Description
     * @return Response
     * @throws RuntimeException
     **/
    public static function sendError($message, $code = 400, $additional = array())
    {
        return self::$response->withJson(array_merge(
            array("message" => $message),
            $additional
        ))->withStatus($code);
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
        return self::$response->withJson($data)->withStatus(200);
    }
}
