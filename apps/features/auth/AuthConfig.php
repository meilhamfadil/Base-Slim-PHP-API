<?php

namespace Features\Example;

use Features\Auth\AuthRoutes;
use RoutesRegister;

RoutesRegister::register("auth", new AuthRoutes($app));
