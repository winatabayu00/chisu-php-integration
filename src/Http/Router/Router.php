<?php

namespace Chisu\PhpIntegration\Http\Router;
use Chisu\PhpIntegration\Abstracts\RouteBinding;
use Chisu\PhpIntegration\Http\Controllers\ControllerTest;
use Chisu\PhpIntegration\Http\Controllers\HasilDiagnosisController;
use Chisu\PhpIntegration\Http\Controllers\HasilLabController;
use Chisu\PhpIntegration\Http\Controllers\PermohonanLabController;
use Chisu\PhpIntegration\Http\Controllers\TerdugaTBController;
use Illuminate\Http\Request;

class Router extends RouteBinding
{
    public function routes(): void
    {
        $this->router->get('terduga-tb', function (){
            // do not use anything here
            return (new TerdugaTBController())->create();
        });

        $this->router->post('terduga-tb', function (){
            // do not use anything here
            return (new TerdugaTBController())->store();
        });

        $this->router->get('permohonan-lab', function (){
            // do not use anything here
            return (new PermohonanLabController())->create();
        });

        $this->router->post('permohonan-lab', function (){
            // do not use anything here
            return (new PermohonanLabController())->store();
        });

        $this->router->get('hasil-lab', function (){
            // do not use anything here
            return (new HasilLabController())->create();
        });

        $this->router->post('hasil-lab', function (){
            // do not use anything here
            return (new HasilLabController())->store();
        });

        $this->router->get('hasil-diagnosis', function (){
            // do not use anything here
            return (new HasilDiagnosisController())->create();
        });

        $this->router->post('hasil-diagnosis', function (){
            // do not use anything here
            return (new HasilDiagnosisController())->store();
        });

      /*  $this->router->get('terduga-tb', function (){
            return (new ControllerTest())->folderWelcome();
        });

        $this->router->get('hasil-lab', function (){
            return (new ControllerTest())->folderWelcome();
        });*/
    }

    public function beforeRegister(): void
    {

    }
}