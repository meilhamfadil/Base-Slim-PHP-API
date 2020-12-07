<?php

namespace Core\Base;

use Slim\App;

abstract class Routes
{

    /** @var App $app description */
    protected $app = null;

    /**
     * @param App $app Description
     **/
    abstract function register(App $app);
}
