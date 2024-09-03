<?php

namespace App\Controllers;

use App\Controllers\Controller;

class PagamentoController extends Controller {

    public function index() {

        return require_once __DIR__ . '/../Views/pagamento.php';
    }
    
}