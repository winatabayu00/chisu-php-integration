<?php

namespace Chisu\PhpIntegration\Abstracts;
use Illuminate\Routing\Router;

abstract class RouteBinding
{
    protected Router $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
        $this->beforeRegister();
        $this->routes();
    }

    abstract public function routes(): void;
    abstract public function beforeRegister(): void;
}