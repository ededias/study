<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use MF\Action;
use App\Src\Usuarios;

class IndexController extends Action
{
  
  public function index()
  {
    if(isset($_SESSION)) {
      header('location: /main');
    }
    $this->render('corpo', 'index');
  }

  public function contato()
  {
    $this->render('contato', 'index');
  }

  public function sobre()
  {
    $this->render('sobre', 'index');
  }

  public function registrar()
  {
    $this->render('registrar', 'index');
  }
  
}
