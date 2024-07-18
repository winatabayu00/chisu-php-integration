<?php

namespace Chisu\PhpIntegration\Trait;

use Illuminate\Support\Facades\Session;

trait SessionHelper
{

    public function __construct()
    {
        if (!Session::isStarted()){
            echo 'session is not started';
            Session::start();
        }
    }

    public function set(string $key, string $value)
    {
        Session::put($key, $value);
    }

    public function get(string $key)
    {
        return Session::get($key);
    }

    public function delete(string $key)
    {
        Session::forget($key);
    }

    public function has(string $key)
    {
        return Session::has($key);
    }

    public function all()
    {
        return Session::all();
    }

    public function clear()
    {
        Session::flush();
    }
}