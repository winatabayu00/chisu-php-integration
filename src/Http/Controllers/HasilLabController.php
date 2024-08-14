<?php

namespace Chisu\PhpIntegration\Http\Controllers;

use Chisu\PhpIntegration\Actions\SendHasilLab;

class HasilLabController extends Controller
{
    public function create()
    {
        $this->view('hasil-lab.create');
    }

    public function store()
    {
        try {
            (new SendHasilLab(request()->input()))
                ->handle();
        }catch (\Throwable $e){
            throw $e;
        }
        return true;
    }
}