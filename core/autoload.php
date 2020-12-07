<?php

require_once VENDORPATH . "/autoload.php";

// Require Apps
require BASEPATH . "/app.php";

// Require Routes
require APPSPATH . "/config/routes.php";

$app->run();
