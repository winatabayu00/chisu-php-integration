<?php

use Chisu\PhpIntegration\Config\MyConfig;

require_once __DIR__ . '/Core/manual-integration.php';


/**
 * @return MyConfig
 */
function chisuConfig(): MyConfig
{
    return new MyConfig();
}