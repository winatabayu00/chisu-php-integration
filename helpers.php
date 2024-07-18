<?php

require __DIR__ . '/Core/manual-integration.php';

/**
 * @return \Chisu\PhpIntegration\Config\MyConfig
 */
function config(): \Chisu\PhpIntegration\Config\MyConfig
{
    return new \Chisu\PhpIntegration\Config\MyConfig();
}