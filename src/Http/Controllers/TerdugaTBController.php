<?php

namespace Chisu\PhpIntegration\Http\Controllers;

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