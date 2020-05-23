<?php

namespace App\Controllers;

use MF\Action;
use App\Controllers\AuthController;
use App\Models\CadastroModel;
use MercadoPago\SDK;
use MercadoPago\Item;
use MercadoPago\Preference;
use MercadoPago\Payment;

class AppController extends Action
{
  // public function __construct()
  // {
  //   (new AuthController())->validate();
  // }
  public function main()
  {
    //session_start();
    //$_SESSION;
    $infPessoais=(new CadastroModel())->listarCasdastro();
   
    (new AuthController())->validate();
    print_r($_SESSION);
    if($_SESSION['idPerfil']==1){
      $this->view->main = json_encode($infPessoais);
      $this->render('professor', 'main');

    }
    else{
    $this->view->main = json_encode($infPessoais);
    $this->render('main', 'main');
    }
  }

  public function perfil()
  {

    $preference = $this->mercadoPago();
    $infPessoais=(new CadastroModel());
    $infPessoais->setidUsuario(1);
    $lista=$infPessoais->listar1($infPessoais);
    $this->view->perfil =["pessoais" => $lista, "api" => $preference->id];
    $this->render('perfil', 'main');

    
  }

  function pagamento()
  {

    $this->render('pagamento', 'main');
  }
  function mercadoPago()
  {
    SDK::setAccessToken("TEST-6434990738409266-042216-48fcbcf4f026f3daae6eaebda11128e4-327719278");
    // Cria um objeto de preferência
    $preference = new Preference();

    // Cria um item na preferência
    $item = new Item();
    $item->title = 'Meu produto';
    $item->quantity = 1;
    $item->unit_price = 1;
    $preference->items = array($item);
    $preference->save();
    
  }
}
