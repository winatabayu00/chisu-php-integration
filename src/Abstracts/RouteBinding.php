<?php

namespace Chisu\PhpIntegration\Abstracts;
use Illuminate\Routing\Router;

abstract class RouteBinding
{
    public function __construct(protected Router $router)
    {
        $this->beforeRegister();
        $this->routes();
    }

    abstract public function routes(): void;
    abstract public function beforeRegister(): void;
}