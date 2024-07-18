<?php

namespace src;

use Chisu\PhpIntegration\Contracts\HttpClientInterface;
use Chisu\PhpIntegration\Repositories\HttpClient;
use Illuminate\Support\ServiceProvider;

class ChisuServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(HttpClientInterface::class, HttpClient::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}