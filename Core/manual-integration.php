<?php
require __DIR__ . "/../vendor/autoload.php";


use Illuminate\Container\Container;
use Illuminate\Events\Dispatcher;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\CallableDispatcher;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Facade;
use Illuminate\Translation\ArrayLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory as ValidatorFactory;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;
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

$filesystem = new Filesystem();
$viewPaths = [__DIR__ . '/../src/views']; // Adjust this path if needed
$cachePath = __DIR__ . '/../cache'; // Adjust this path if needed

$fileViewFinder = new FileViewFinder($filesystem, $viewPaths);

$bladeCompiler = new BladeCompiler($filesystem, $cachePath);
$phpEngine = new PhpEngine($filesystem);
$compilerEngine = new CompilerEngine($bladeCompiler);

$engineResolver = new Illuminate\View\Engines\EngineResolver();
$engineResolver->register('php', function () use ($phpEngine) {
    return $phpEngine;
});
$engineResolver->register('blade', function () use ($compilerEngine) {
    return $compilerEngine;
});

$viewFactory = new Factory($engineResolver, $fileViewFinder, $events);

// Make $viewFactory available globally
$GLOBALS['viewFactory'] = $viewFactory;

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
