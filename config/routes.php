<?php

use App\Controllers\ClienteController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\ProdutoController;
use App\Controllers\EstoqueController;
use App\Controllers\CarrinhoController;
use App\Controllers\ProvadorController;
use App\Controllers\ReceituárioController;

use FastRoute\RouteCollector;

return function(RouteCollector $r) {
    $r->addRoute('GET', '/', [HomeController::class, 'index']);
    $r->addRoute('GET', '/contato', [HomeController::class, 'contato']);
    $r->addRoute('GET', '/sobre', [HomeController::class, 'sobre']);
    $r->addRoute('GET', '/loja', [HomeController::class, 'loja']);
    $r->addRoute('GET', '/pagamento', [HomeController::class, 'pagamento']);

    $r->addRoute('GET', '/carrinho', [CarrinhoController::class, 'index']);
    $r->addRoute('GET', '/carrinho/adicionar/{id}', [CarrinhoController::class, 'add']);
    $r->addRoute('GET', '/carrinho/remover/{id}', [CarrinhoController::class, 'remove']);

    $r->addRoute('GET', '/individual/provador', [ProvadorController::class, 'index']);
    $r->addRoute('GET', '/provador', [ProvadorController::class, 'index']);

    $r->addRoute('GET', '/login', [LoginController::class, 'index']);
    $r->addRoute('GET', '/cadastro', [LoginController::class, 'cadastro']);
    $r->addRoute('POST', '/autorizarLogin', [LoginController::class, 'autorizarLogin']);
    $r->addRoute('POST', '/novousuario', [LoginController::class, 'novoUsuario']);
    $r->addRoute('POST', '/deslogar', [LoginController::class, 'deslogar']);

    $r->addRoute('GET', '/individual/{id}', [ProdutoController::class, 'produtoIndividual']);
    $r->addRoute('GET', '/individual/curtir/{id}', [ProdutoController::class, 'curtir']);
    $r->addRoute('GET', '/curtir/{id}', [ProdutoController::class, 'curtir']);

    $r->addRoute('GET', '/produtos', [ProdutoController::class, 'index']);
    $r->addRoute('GET', '/produtos/cadastro', [ProdutoController::class, 'formulario']);
    $r->addRoute('POST','/produtos/salvar[/{produto}]', [ProdutoController::class, 'salvar']);
    $r->addRoute('GET', '/produtos/editar/{produto}', [ProdutoController::class, 'formulario']);
    $r->addRoute('GET', '/produtos/remover/{produto}', [ProdutoController::class, 'remover']);
    $r->addRoute('GET', '/favoritos', [ProdutoController::class, 'favoritos']);

    $r->addRoute('GET', '/estoques', [EstoqueController::class, 'index']);
    $r->addRoute('GET', '/estoques/cadastro', [EstoqueController::class, 'formulario']);
    $r->addRoute('GET', '/estoques/editar/{estoque}', [EstoqueController::class, 'formulario']);
    $r->addRoute('POST','/estoques/salvar[/{estoque}]', [EstoqueController::class, 'salvar']);
    $r->addRoute('GET', '/estoques/remover/{estoque}', [EstoqueController::class, 'remover']);

    $r->addRoute('GET', '/clientes', [ClienteController::class, 'index']);
    $r->addRoute('GET', '/clientes/cadastro', [ClienteController::class, 'formulario']);
    $r->addRoute('GET', '/clientes/editar/{cliente}', [ClienteController::class, 'formulario']);
    $r->addRoute('POST','/clientes/salvar[/{cliente}]', [ClienteController::class, 'salvar']);
    $r->addRoute('POST','/novocliente', [ClienteController::class, 'novoCliente']);
    $r->addRoute('GET', '/clientes/remover/{cliente}', [ClienteController::class, 'remover']);

    $r->addRoute('POST', '/carrinho/atualizarQuantidade', [CarrinhoController::class, 'atualizarQuantidade']);

    $r->addRoute('GET', '/receituario', [ReceituárioController::class, 'index']);




};