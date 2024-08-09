<?php

namespace Chisu\PhpIntegration\Http\Controllers;

class ControllerTest extends Controller
{
    public function folderWelcome()
    {
        $this->view('sub.welcome');
    }

    public function welcome()
    {
        $this->view('welcome');
    }
}