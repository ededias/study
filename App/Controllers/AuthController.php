<?php

namespace App\Controllers;

use App\Models\CadastroModel;
use App\Models\UsuarioModel;
use App\Src\Users;
// classe de autenticacao que extende a usuariomodel
class AuthController extends UsuarioModel
{

  // funcao para validar o login
  public function loginValidate()
  {
    print_r($_POST);
    $this->__set('email', $_POST['email']);
    $this->__set('password', $_POST['password']);
   
    $result = $this->validar();
    print_r($result);
    if (empty($result)) { 
      header('location: /?erro=0');
    } else {
      session_start();
      $_SESSION = $result;
      header('location: /main');
    }
  }

  // salvar os dados preenchidos do registrase que está no corpo
  public function salvarCadastro()
  {
        $cadastrar = new CadastroModel();
        
        $cadastrar->setnome($_POST['nome']);
        $cadastrar->setdataNas($_POST['dataNascimento']);
        $cadastrar->setCEP($_POST['CEP']);
        $cadastrar->setendereco($_POST['endereco']);
        $cadastrar->setnumEnd($_POST['numeroEndereco']);
        $cadastrar->setcomplemento($_POST['complemento']);
        $cadastrar->settelefone($_POST['telefone']);
        $cadastrar->setemail($_POST['email']);
        $cadastrar->setsenha($_POST['senha']);
        $cadastrar->setcpf($_POST['cpf']);
        $cadastrar->setrg($_POST['rg']);   

  }

  public function validate()
  {

    session_start();
    $_SESSION;
    print_r('teste');
    if (empty($_SESSION) && isset($_SESSION)) {
      header('location: /?autenticar=erro');
    } 
    
  }

  public function exit()
  {
    session_start();
    session_destroy();
    header('location: /');
  }
}
