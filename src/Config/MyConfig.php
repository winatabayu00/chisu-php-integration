<?php
namespace Chisu\PhpIntegration\Config;

use Chisu\PhpIntegration\Trait\ConfigHelper;

/**
 * @method void set(string|array $key, mixed $value = null)
 * @method mixed getConfig(null|string $key = null)
 * */

class MyConfig
{
    use ConfigHelper;
    public static ?ConfigCollection $configs = null;

    /**
     * @return ConfigCollection
     */
    public static function factory(): ConfigCollection
    {
        if (!static::$configs instanceof ConfigCollection){
            static::$configs = new ConfigCollection();
        }

        return static::$configs;
    }
}