<?php

use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\CarrinhoController;
use App\Controllers\OculosController;
use App\Controllers\PagamentoController;
use App\Controllers\MostruarioController;
use App\Controllers\ContatosController;
use App\Controllers\SobreController;


use FastRoute\RouteCollector;

return function(RouteCollector $r) {
    $r->addRoute('GET', '/', [HomeController::class, 'index']);


    $r->addRoute('GET', '/login', [LoginController::class, 'index']);
    $r->addRoute('GET', '/cadastro', [LoginController::class, 'cadastro']);
    $r->addRoute('POST', '/autorizarLogin', [LoginController::class, 'autorizarLogin']);
    $r->addRoute('POST', '/novousuario', [LoginController::class, 'novoUsuario']);
    $r->addRoute('POST', '/deslogar', [LoginController::class, 'deslogar']);

    $r->addRoute('GET', '/carrinho', [CarrinhoController::class, 'index']);

    $r->addRoute('GET', '/oculos', [OculosController::class, 'index']);

    $r->addRoute('GET', '/pagamento', [PagamentoController::class, 'index']);

    $r->addRoute('GET', '/mostruario', [MostruarioController::class, 'index']);

    $r->addRoute('GET', '/contato', [ContatosController::class, 'index']);

    $r->addRoute('GET', '/sobre', [SobreController::class, 'index']);

    
    
};