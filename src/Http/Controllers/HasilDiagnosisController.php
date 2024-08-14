<?php

namespace Chisu\PhpIntegration\Http\Controllers;

use Chisu\PhpIntegration\Actions\SendHasilDiagnosaTB;

class HasilDiagnosisController extends Controller
{
    public function create()
    {
        $this->view('hasil-diagnosis.create');
    }

    public function store()
    {
        try {
            (new SendHasilDiagnosaTB(request()->input()))
                ->handle();
        }catch (\Throwable $e){
            throw $e;
        }
        return true;
    }
}