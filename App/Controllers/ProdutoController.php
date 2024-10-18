<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Produto;
use App\Models\Estoque;
use Exception;


class ProdutoController extends Controller {


    public function index() {

        return require_once __DIR__ . '/../Views/produtos/index.php';
    }

    public function produtoIndividual() {

        return require_once __DIR__ . '/../Views/individual.php';
    }

  
    public function formulario($produto)
    {
       
        $produto['produto'] ??= null;

        $produto = Produto::find($produto['produto']);


        return $this->render('/produtos/formulario.php', [
            'titulo'  => $produto?->id ? "Editar Produto" : "Cadastrar Produto",
            'produto' => $produto
        ]);
    }


    public function salvar($produto)
    {
        try{

            $produto['produto'] ??= null;

            $produto = Produto::find($produto['produto']);

            if (!$produto) {
                $produto = new Produto();
            }

            $produto->nome           = $_POST['nome'];
            $produto->preco          = $_POST['preco'];
            $produto->categoria      = $_POST['categoria'] ;
            $produto->tipo           = $_POST['tipo'] ;
            $produto->foto           = $_POST['foto'];
            $produto->descricao      = $_POST['descricao'];
            $produto->curtido        = 0 ;

            $produto->save();


            return redirect('/produtos')->sucesso('Operação realizada com sucesso');
        }catch(Exception $e){
            var_dump($e->getMessage());
            die();
            return redirect('/produtos')->erro($e->getMessage());
        }
    }


    public function remover($produto){
        try{

            $produto['produto'] ??= null;

            $produto = Produto::find($produto['produto']);

            if(!$produto?->id){
                throw new Exception("Produto não encontrado");
            }
            $produtoId = $produto->id;
            $produto->delete();
            Estoque::where('produto_id', $produtoId)->delete();

            return redirect('/produtos')->sucesso('Operação realizada com sucesso');
        }catch(Exception $e){
            return redirect('/produtos')->erro($e->getMessage());
        }
    }
}