<?php
require __DIR__ . "/../vendor/autoload.php";


use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\CallableDispatcher;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Facade;
use Illuminate\Translation\ArrayLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory as ValidatorFactory;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

$app = new Container();
Facade::setFacadeApplication($app);

$app->bind('validator', function ($app) {
    $translator = new Translator(new ArrayLoader(), 'en'); // Adjust locale as needed

    return new ValidatorFactory($translator, $app);
});

$events = new Dispatcher($app);
$app->singleton('Illuminate\Routing\Contracts\CallableDispatcher', function ($app) {
    return new CallableDispatcher($app);
});

$router = new Router($events, $app);
new \Chisu\PhpIntegration\Http\Router\Router($router);
$request = Request::createFromGlobals();

if (PHP_SAPI !== 'cli') {
    try {
        $response = $router->dispatch($request);
    } catch (NotFoundHttpException $e) {
        $response = new Response();
    } catch (Exception $e) {
        throw $e;
    }

    $response->send();
}

