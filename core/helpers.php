<?php

$helpers = glob(APPSPATH . '/helpers/*.php');

foreach ($helpers as $helper)
    include $helper;
