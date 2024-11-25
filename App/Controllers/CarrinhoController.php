<?php

namespace App\Controllers;
use App\Models\Produto;


class CarrinhoController extends Controller {

    public function index() {

        return require_once __DIR__ . '/../Views/carrinho.php';
    }


    public function add($id) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['carrinho'])) {
            $_SESSION['carrinho'] = [];
            $_SESSION['total_carrinho'] = 0.0;
        }

        $produto = Produto::where('id', $id)->first();

        if (!$produto) {
            echo "Produto não encontrado.";
            return;
        }

        $nome = $produto->nome;
        $preco = $produto->preco;
        $idProduto = $produto->id;
        $foto = $produto->foto;

        if (isset($_SESSION['carrinho'][$idProduto])) {
            $_SESSION['carrinho'][$idProduto]['quantidade'] += 1;
            $_SESSION['total_carrinho'] += $preco;
        } else {
            $_SESSION['carrinho'][$idProduto] = [
                'nome' => $nome,
                'preco' => $preco,
                'quantidade' => 1,
                'foto' => $foto,
                'id' => $idProduto
            ];
            $_SESSION['total_carrinho'] += $preco;
        }

        $referer = $_SERVER['HTTP_REFERER'] ?? '/';
        header("Location: $referer");
        exit();
    }

    public function remove($id) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (is_array($id)) {
            $id = reset($id);
        }

        $id = (string) $id;

        if (isset($_SESSION['carrinho'][$id])) {
            // Calcula o valor a ser subtraído do total
            $quantidade = $_SESSION['carrinho'][$id]['quantidade'];
            $preco = $_SESSION['carrinho'][$id]['preco'];
            $valorRemovido = $quantidade * $preco;

            // Atualiza o total do carrinho
            $_SESSION['total_carrinho'] -= $valorRemovido;

            // Remove o item do carrinho
            unset($_SESSION['carrinho'][$id]);
        }

        $referer = $_SERVER['HTTP_REFERER'] ?? '/';
        header("Location: $referer");
        exit();
    }


    public function atualizarQuantidade($id) {




    }
}