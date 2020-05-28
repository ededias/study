<?php

namespace App;

use MF\Bootstrap;

// class routes, fazer a seleção das rotas dentro do projeto

class Route extends Bootstrap
{
  // initroutes inicia as rotas e faz as seleções para retornar e/ou incerção de dados do banco de dados;

  function initRoutes()
  {
    
    // exemplo de funcionamento dentro da rota "/"
    // barra define qual indice do array 
    // route define qual a rota a ser exibitda
    // controller chama a classe e arquivo de funcionamento
    // action dispara o nome do metodo que está sendo instanciado na classe de controle

    // rotas da index
    $routes['/'] = array(
      'route' => '/',
      'controller' => 'indexController',
      'action' => 'index'
    );

    $routes['/registrar'] = array(
      'route' => '/registrar',
      'controller' => 'indexController',
      'action' => 'registrar'
    );

    $routes['/contato'] = array(
      'route' => '/contato',
      'controller' => 'indexController',
      'action' => 'contato'
    );

    $routes['/sobre'] = array(
      'route' => '/sobre',
      'controller' => 'indexController',
      'action' => 'sobre'
    );
    $routes['/salvar'] = array(
      'route' => '/salvar',
      'controller' => 'AuthController',
      'action' => 'salvar'
    );
   

    // fim rotas da index


    // Rotas de validacao *******
    
    $routes['/loginValidate'] = array(
      'route' => '/loginValidate',
      'controller' => 'authController',
      'action' => 'loginValidate'
    );

    $routes['/sair'] = array(
      'route' => '/sair',
      'controller' => 'AuthController',
      'action' => 'exit'
    );

    // Fim rotas validacao ****

    // Rotas da aplicacao ****
    $routes['/atualizar'] = array(
      'route' => '/atualizar',
      'controller' => 'AppController',
      'action' => 'atualizar'
    );
    $routes['/comprar'] = array(
      'route' => '/comprar',
      'controller' => 'AppController',
      'action' => 'mercadoPago'
    );
    $routes['/confirmarPagamento'] = array(
      'route' => '/confirmarPagamento',
      'controller' => 'AppController',
      'action' => 'confirmarPagamento'
    );
    $routes['/cursos'] = array(
      'route' => '/cursos',
      'controller' => 'AppController',
      'action' => 'cursos'
    );
    $routes['/aulas'] = array(
      'route' => '/aulas',
      'controller' => 'AppController',
      'action' => 'pagamento'
    );
    $routes['/main'] = array(
      'route' => '/main',
      'controller' => 'AppController',
      'action' => 'main'
    );

    $routes['/perfil'] = array(
      'route' => '/perfil',
      'controller' => 'AppController',
      'action' => 'perfil'
    );
    $routes['/pagamento'] = array(
      'route' => '/pagamento',
      'controller' => 'AppController',
      'action' => 'pagamento'
    );
    $routes['/mercadoPago'] = array(
      'route' => '/mercadoPago',
      'controller' => 'AppController',
      'action' => 'mercadoPago'
    );

    $routes['/atualizarPerfil'] = array(
      'route' => '/atualizarPerfil',
      'controller' => 'AppController',
      'action' => 'atualizarPerfil'
    );

    

    // Fim Rotas da aplicacao ***

    // Inicio rotas chat

    $routes['chat'] = array(
      'route' => '/chat',
      'controller' => 'ChatController',
      'action' => 'chat'
    );
    $routes['sendMsg'] = array(
      'route' => '/sendMsg',
      'controller' => 'ChatController',
      'action' => 'sendMsg'
    );
    $routes['updateMsg'] = array(
      'route' => '/updateMsg',
      'controller' => 'ChatController',
      'action' => 'updateMsg'
    );
    $routes['msg'] = array(
      'route' => '/msg',
      'controller' => 'ChatController',
      'action' => 'msg'
    );
    $routes['chatPersons'] = array(
      'route' => '/chatPersons',
      'controller' => 'ChatController',
      'action' => 'chatPersons'
    );
    $routes['getPersons'] = array(
      'route' => '/getPersons',
      'controller' => 'ChatController',
      'action' => 'getPersons'
    );

    // fim rotas chat 
    
    //rota email
    $routes['enviaremail'] = array(
      'route' => '/enviaremail',
      'controller' => 'EmailController',
      'action' => 'enviaremail'
    );

    //fim rota email

    $this->setRoutes($routes);
  }
}
