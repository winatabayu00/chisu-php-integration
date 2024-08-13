<?php

namespace Chisu\PhpIntegration\Http\Controllers;

use Chisu\PhpIntegration\Actions\SendPermohonanLab;
use GuzzleHttp\Exception\GuzzleException;
use Mediator\SatuSehat\Lib\Client\ApiException;
use Mediator\SatuSehat\Lib\Client\Profiles\ValidationException;

class PermohonanLabController extends Controller
{
    public function create()
    {
        $this->view('permohonan-lab.create');
    }

    /**
     * @return true
     * @throws ApiException
     * @throws GuzzleException
     * @throws ValidationException
     * @throws \Throwable
     */
    public function store()
    {
        try {
            (new SendPermohonanLab(request()->input()))
                ->handle();
        }catch (\Throwable $e){
            dd($e->getMessage());
        }
        return true;
    }
}