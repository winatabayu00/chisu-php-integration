<?php

namespace Chisu\PhpIntegration\Http\Controllers;

class Controller
{
    public function view(string $view)
    {
        $viewFactory = $GLOBALS['viewFactory'];
        echo $viewFactory->make($view, ['data' => 'Hello, World!'])->render();
    }
}