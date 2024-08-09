<?php

namespace Chisu\PhpIntegration\Http\Router;
use Chisu\PhpIntegration\Abstracts\RouteBinding;
use Chisu\PhpIntegration\Http\Controllers\ControllerTest;
use Illuminate\Http\Request;

class Router extends RouteBinding
{
    public function routes(): void
    {
        // dont use prefix '/'
        $this->router->get('/', function (Request $request){
            // do not use anything here
            return (new ControllerTest())->index();
        });

        $this->router->get('test', function (){
            return 'this is path of prefix test';
        });

        $this->router->get('view', function (){
            return 'this is path of prefix view';
        });
    }

    public function beforeRegister(): void
    {

    }
}