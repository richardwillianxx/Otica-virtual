<?php

namespace App\Controllers;

use App\Controllers\Controller;

class ContatosController extends Controller {

    public function index() {

        return require_once __DIR__ . '/../Views/contato.php';
    }
    
}