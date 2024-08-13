<?php

namespace Chisu\PhpIntegration\Http\Controllers;

use Chisu\PhpIntegration\Http\Controllers\Controller;

class HasilLabController extends Controller
{
    public function create()
    {
        $this->view('hasil-lab.create');
    }

    public function store()
    {
        return true;
    }
}