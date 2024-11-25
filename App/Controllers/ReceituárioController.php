<?php

namespace App\Controllers;


class ReceituárioController extends Controller {

    public function index() {

        return require_once __DIR__ . '/../Views/receituario.php';
    }

}