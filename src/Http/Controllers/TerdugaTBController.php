<?php

namespace Chisu\PhpIntegration\Http\Controllers;

use Chisu\PhpIntegration\Http\Controllers\Controller;

class TerdugaTBController extends Controller
{
    public function create()
    {
        $this->view('terduga-tb.create');
    }

    public function store()
    {
        return true;
    }
}