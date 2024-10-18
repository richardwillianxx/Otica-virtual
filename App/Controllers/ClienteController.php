<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Usuario;
use Exception;


class ClienteController extends Controller {


    public function index() {

        return require_once __DIR__ . '/../Views/clientes/index.php';
    }

    public function formulario($cliente)
    {

        $cliente['cliente'] ??= null;
        $cliente = Usuario::find($cliente['cliente']);

        return $this->render('/clientes/formulario.php', [
            'titulo'  => $cliente?->id ? "Editar cliente" : "Cadastro",
            'cliente' => $cliente
        ]);
    }

    public function salvar($cpf)
    {
        try{

            $_POST['email'] ??= null;
            $_POST['senha'] ??= null;
            $_POST['telefone'] ??= null;
            $_POST['usuario'] ??= null;
            $_POST['cep'] ??= null;
            $_POST['numero'] ??= null;


            $cliente = Usuario::where('cpf', $cpf)->first();

            if(!$cliente){
                $cliente = new Usuario();
                $cliente->nome           = $_POST['nome'];
                $cliente->email          = $_POST['email'];
                $cliente->cpf            = $_POST['cpf'];
                $cliente->senha          = $_POST['senha'];
                $cliente->telefone       = $_POST['telefone'] ;
                $cliente->usuario        = $_POST['usuario'];
                $cliente->cep            = $_POST['cep'];
                $cliente->numero         = $_POST['numero'];
                $cliente->save();

                return redirect('/clientes')->sucesso('Operação realizada com sucesso');
            }

            $cliente->nome           = $_POST['nome'];
            $cliente->email          = $_POST['email'];
            $cliente->telefone       = $_POST['telefone'] ;
            $cliente->usuario        = $_POST['usuario'];
            $cliente->cep            = $_POST['cep'];
            $cliente->numero         = $_POST['numero'];
            $cliente->save();


             return redirect('/clientes')->sucesso('Operação realizada com sucesso');
        }catch(Exception $e){
            var_dump($e->getMessage());
            die();
            return redirect('/clientes')->erro($e->getMessage());
        }
    }



    public function remover($cliente){
        try{

            $cliente['cliente'] ??= null;

            $cliente = Usuario::find($cliente['cliente']);

            if(!$cliente?->id){
                throw new Exception("cliente não encontrado");
            }

            $cliente->delete();

            return redirect('/clientes')->sucesso('Operação realizada com sucesso');
        }catch(Exception $e){
            return redirect('/clientes')->erro($e->getMessage());
        }
    }
}