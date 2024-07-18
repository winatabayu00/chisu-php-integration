<?php

namespace Chisu\PhpIntegration\Config;

class ConfigObject
{
    public function __construct(
        public string       $key,
        public string|array $value,
    )
    {
    }

}