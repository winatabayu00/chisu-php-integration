<?php

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

use Illuminate\Container\Container;
use Illuminate\Session\SessionManager;
use Illuminate\Session\SessionServiceProvider;
use Illuminate\Support\Facades\Facade;
use Illuminate\Translation\ArrayLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory as ValidatorFactory;

require __DIR__.'/../vendor/autoload.php';

$container = new Container();
Facade::setFacadeApplication($container);

$container->bind('validator', function ($app) {
    $translator = new Translator(new ArrayLoader(), 'en'); // Adjust locale as needed

    return new ValidatorFactory($translator, $app);
});

//$config = new Illuminate\Config\Repository(require __DIR__ . '/../config/session.php');
//$container->instance('config', $config);
//// Initialize SessionManager
//$container->bind('session', function ($app) {
//    return (new SessionManager($app))->driver('file');
//});
//
//// Bind the session manager into the container
//$container->bind('session', function ($app) {
//    // Instantiate SessionServiceProvider and register it
//    $sessionServiceProvider = new SessionServiceProvider($app);
//    $sessionServiceProvider->register();
//
//    // Retrieve the session manager from the container
//    return new SessionManager($app);
//});
//
//// Resolve the session manager instance from the container
//$sessionManager = $container->make('session');
//
//// Start the session
//$sessionManager->start();