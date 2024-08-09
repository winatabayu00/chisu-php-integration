<?php

namespace Chisu\PhpIntegration\Http\Controllers;

class ControllerTest extends Controller
{
    public function index()
    {
        $this->view('welcome');
    }
}