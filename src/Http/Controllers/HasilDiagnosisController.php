<?php

namespace Chisu\PhpIntegration\Http\Controllers;

use Chisu\PhpIntegration\Http\Controllers\Controller;

class HasilDiagnosisController extends Controller
{
    public function create()
    {
        $this->view('hasil-diagnosis.create');
    }

    public function store()
    {
        return true;
    }
}