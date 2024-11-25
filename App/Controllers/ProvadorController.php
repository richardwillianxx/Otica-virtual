<?php

namespace App\Controllers;


class ProvadorController extends Controller {

    public function index() {

        return require_once __DIR__ . '/../Views/provador.php';
    }



}
