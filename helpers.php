<?php

use Illuminate\Http\Request;

/**
 * @return Request
 */
function request(): Request
{
    return Request::createFromGlobals();
}