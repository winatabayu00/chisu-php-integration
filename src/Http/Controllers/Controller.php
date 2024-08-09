<?php

namespace Chisu\PhpIntegration\Http\Controllers;

class Controller
{
    public function view(string $view, array $data = [])
    {
        $viewFactory = $GLOBALS['viewFactory'];
        echo $viewFactory->make($view, $data)->render();
    }
}