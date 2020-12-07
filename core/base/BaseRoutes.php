<?php

namespace Core\Base;

use Slim\App;

abstract class BaseRoutes
{

    /** @var App $app description */
    protected $app = null;

    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param App $app Description
     **/
    abstract function register(App $app);

    /**
     * Add GET route
     *
     * @param  string          $pattern  The route URI pattern
     * @param  callable|string $callable The route callback routine
     *
     * @return RouteInterface
     */
    public function get($pattern, $callable)
    {
        return $this->app->get($pattern, $callable);
    }

    /**
     * Add POST route
     *
     * @param  string          $pattern  The route URI pattern
     * @param  callable|string $callable The route callback routine
     *
     * @return RouteInterface
     */
    public function post($pattern, $callable)
    {
        return $this->app->post($pattern, $callable);
    }

    /**
     * Add PUT route
     *
     * @param  string          $pattern  The route URI pattern
     * @param  callable|string $callable The route callback routine
     *
     * @return RouteInterface
     */
    public function put($pattern, $callable)
    {
        return $this->app->put($pattern, $callable);
    }

    /**
     * Add DELETE route
     *
     * @param  string          $pattern  The route URI pattern
     * @param  callable|string $callable The route callback routine
     *
     * @return RouteInterface
     */
    public function delete($pattern, $callable)
    {
        return $this->app->delete($pattern, $callable);
    }
}
