<?php

namespace App\Controllers;

use App\Models\ChatModels;
use MF\Action;
use App\Controllers\AuthController;

class ChatController extends Action
{
  // atributotos das mensagem 
  // msgData recebe a msg e id do usuario
  // idrecebedor é o id da pessoa que irá receber a mensagem
  private $msgData;
  private $idRecebedor;


  // getters e setters
  function setIdRecebedor($idRecebedor)
  {
    $this->idRecebedor = $idRecebedor;
  }
  function getIdRecebedor()
  {
    return $this->idRecebedor;
  }

  function setMsgData($msgData)
  {
    $this->msgData = $msgData;
  }

  function getMsgData()
  {
    return $this->msgData;
  }

  // define a rota do chat para exibicao das views
  function chat()
  {
    // authcontroller validate valida a sessacao do usuario
    // no sistema
    (new AuthController())->validate();
    $this->render('chat', 'main');
  }

  // enviar mensagem
  function sendMsg()
  {
    (new AuthController())->validate();

    // transforma em um array passando a mensagem e o id do usuario
    $msgData = [$_POST['msg'], $_SESSION['idUsuario']];
   
    $this->setMsgData($msgData);

    $this->setIdRecebedor($_POST['idRecebedor']);
    // chama o model do chat passando o this como parametro
    (new ChatModels())->saveMsg($this);
  }

  function msg()
  {

    (new AuthController())->validate();
    // atualiza o feed de mensagens do chat passando o id do usuario como parametro
    // $this->view-updateMsg recebe o model de atualizacao
    
    $this->view->updateMsg = (new ChatModels())->updateMsg($_GET);
    
    // chama a funcao render que mostra na tela o conteudo das mensagens
    // recebendo dois parametros 'view', e 'layout'
    $this->render('msg', '');
  }

  function chatPersons()
  {
    
    (new AuthController())->validate();
    // faz um array com as informacoes do perfil do usuario
    // idUsuario e Idperfil onde idPerfil recebe somente dois tipos de valores 1 ou 2 
    // sendo 1 aluno e 2 professor
    $userInf = [
      'idUsuario' => $_SESSION['idUsuario'],
      'perfil' => $_SESSION['perfil']
    ];
    // renderiza as pessoas com quem o aluno/professor tem uma 
    // conexao prévia ou no canto para poderem iniciar uma conversa
    
    ($this->view->renderPersons = (new ChatModels())->getUsers($userInf));
  
    // renderiza a view como foi explicado a cima
    $this->render('chatpersons', '');
  }
}
