<?php

namespace Chisu\PhpIntegration\Trait;

use Chisu\PhpIntegration\Config\ConfigCollection;

trait ConfigHelper
{
    public function getConfig(?string $key = null)
    {
        if (static::$configs instanceof ConfigCollection) {
            $configs = static::$configs
                ->when(!empty($key), function ($query) use ($key) {
                    $query
                        ->where('key', '=', $key);
                });

            if (!empty($key)) {
                if ($configs->has($key)){
                    return $configs[$key];
                }else{
                    return null;
                }
            }

            return $configs;
        }
        return new ConfigCollection();
    }

    /**
     * @param string $key
     * @param string|array $value
     * @return $this
     */
    public function set(string $key, string|array $value): static
    {
        static::$configs = static::factory();

        static::$configs->put(key: $key, value: $value);

        // setSession
        return new static();
    }
}