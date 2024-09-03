<?php

namespace App\Controllers;

use App\Controllers\Controller;

class CarrinhoController extends Controller {

    public function index() {

        return require_once __DIR__ . '/../Views/carrinho.php';
    }
    
}