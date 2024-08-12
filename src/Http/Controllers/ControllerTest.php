<?php

namespace Chisu\PhpIntegration\Http\Controllers;

use Illuminate\Http\Request;

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