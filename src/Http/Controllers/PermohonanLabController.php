<?php

namespace Chisu\PhpIntegration\Http\Controllers;

use Chisu\PhpIntegration\Http\Controllers\Controller;

class PermohonanLabController extends Controller
{
    public function create()
    {
        $this->view('permohonan-lab.create');
    }

    public function store()
    {
        return true;
    }
}