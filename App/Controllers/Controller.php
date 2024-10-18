<?php

namespace App\Controllers;

use App\Services\DefaultServices;

class Controller {

    public $validarLogin = true;

    public function __construct(){

        if($this->validarLogin){
            DefaultServices::verificarLogin();
        }

    }

    public function render(string $view, array $data = [])
    {
        extract($data);

        return require_once(sprintf('%s/../Views%s', __DIR__, $view));
    }

}