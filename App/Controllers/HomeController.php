<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Produto;

class HomeController extends Controller {

    public function index() {
        $produtos = Produto::all();

        return $this->render('/../Views/home.php', [
            'produtos' => $produtos
        ]);
    }

    public function contato() {

        return require_once __DIR__ . '/../Views/contato.php';
    }

    public function sobre() {

        return require_once __DIR__ . '/../Views/sobre.php';
    }

    public function loja() {

        $produtos = Produto::all();

       return $this->render('/../Views/loja.php', [
          'produtos' => $produtos
       ]);
       // return require_once __DIR__ . '/../Views/loja.php';
    }

    public function carrinho() {

        return require_once __DIR__ . '/../Views/carrinho.php';


    }

    public function pagamento() {

        return require_once __DIR__ . '/../Views/pagamento.php';
    }
    
}