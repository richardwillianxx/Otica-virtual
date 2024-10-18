<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Estoque;
use App\Models\Produto;
use Exception;
use Illuminate\Support\Facades\Auth;

class EstoqueController extends Controller
{

    public function index()
    {
        $estoques = Estoque::all();


        return $this->render('/estoques/index.php', [
            'estoques' => $estoques
        ]);
    }


    public function formulario($estoque)
    {

        $estoque['estoque'] ??= null;

        $estoque = Estoque::find($estoque['estoque']);

        $produtos = Produto::doesntHave('estoque')->get();;

        return $this->render('/estoques/formulario.php', [
            'titulo'  => $estoque?->id ? "Editar estoque" : "Cadastrar estoque",
            'estoque' => $estoque,
            'produtos' => $produtos,

        ]);
    }

    public function salvar($estoque)
    {

        try{

            $estoque['estoque'] ??= null;


            $estoque = Estoque::find($estoque['estoque']);


            if (!$estoque) {
                $estoque = new Estoque();
            }

            $estoque->produto_id = $_POST['produto_id'];
            $estoque->quantidade = $_POST['quantidade'];
            $estoque->save();

            return redirect('/estoques')->sucesso('Operação realizada com sucesso');
        }catch(Exception $e){
            return redirect('/estoque')->erro($e->getMessage());
        }
    }

    public function remover($estoque){
        try{

            $estoque['estoque'] ??= null;

            $estoque = Estoque::find($estoque['estoque']);

            if(!$estoque?->id){
                throw new Exception("estoque não encontrado");
            }

            $estoque->delete();

            return redirect('/estoques')->sucesso('Operação realizada com sucesso');
        }catch(Exception $e){
            return redirect('/estoques')->erro($e->getMessage());
        }
    }

  
}