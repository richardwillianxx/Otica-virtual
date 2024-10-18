<?php

namespace App\Controllers;

use App\Models\Usuario;
use Exception;
use App\Services\DefaultServices;
use App\Services\RedirectServices;
use App\Controllers\Controller;

class LoginController extends Controller {

    public $validarLogin = false;

    public function index() {
        return require_once __DIR__ . '/../Views/login/login.php';
    }

    public function cadastro() {
        return require_once __DIR__ . '/../Views/login/cadastro.php';
    }

    public function autorizarLogin(){
        try{

            $_POST['email'] ??= null;
            $_POST['senha'] ??= null;

            if(!$_POST['email'] || !$_POST['senha']){
                throw new Exception("Obrigatório inserir email e senha");
            }

            $usuario = Usuario::where([
                ['email', '=', $_POST['email']],
                ['senha', '=', sha1(md5($_POST['senha']))]
            ])->first();

            if(!$usuario){
                throw new Exception("Credenciais incorretas");
            }

            $_SESSION['logado'] = true;
            $_SESSION['email']  = $usuario->email;
            $_SESSION['nome']   = $usuario->nome;
       
            return redirect('/')->sucesso('Operação realizada com sucesso');
        }catch(Exception $e){
            echo($e->getMessage());
        }
    }
    
    public function novoUsuario(){
        try{

            $_POST['nome'] ??= null;
            $_POST['cpf'] ??= null;
            $_POST['email'] ??= null;
            $_POST['senha'] ??= null;
            $_POST['telefone'] ??= null;
            $_POST['senha'] ??= null;
            $_POST['usuario'] ??= null;
            $_POST['cep'] ??= null;
            $_POST['numero'] ??= null;

           $usuario = Usuario::where('email', $_POST['email'])->first();

            if($usuario){
                throw new Exception('Email já cadastrado');
            }

            $usuario = new Usuario();
            $usuario->nome = $_POST['nome'];
            $usuario->cpf = $_POST['cpf'];
            $usuario->usuario = $_POST['usuario'] ;
            $usuario->email = $_POST['email'];
            $usuario->telefone = $_POST['telefone'];
            $usuario->senha = sha1(md5($_POST['senha']));
            $usuario->cep = $_POST['cep'];
            $usuario->numero = $_POST['numero'];
            $usuario->save();

        

            return redirect('/login')->sucesso('Usuario adicionado com sucesso!');
        }catch(Exception $e){
            return redirect('/cadastro')->erro($e->getMessage());
        }
    }

      public function deslogar(){
        try{

            DefaultServices::deslogar();

        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    


}