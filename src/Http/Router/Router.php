<?php

namespace Chisu\PhpIntegration\Http\Router;
use Chisu\PhpIntegration\Abstracts\RouteBinding;
use Illuminate\Http\Request;

class Router extends RouteBinding
{

    public function routes(): void
    {
        // dont use prefix '/'
        $this->router->get('/', function (Request $request){
            // do not use anything here
            return 'hehee';
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