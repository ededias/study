<?php

namespace App\Models;

use App\Database\Database;
use App\Src\Users;

class UsuarioModel extends Database
{
  private $name = '';
  private $CPF = '';
  private $RG = '';
  private $age = 0;
  private $description = '';
  private $street = '';
  private $photo = '';
  private $password = '';
  private $email = '';

  // private $chatMensagem;

  public function __get($attribute)
  {

    return $this->$attribute;
    
  }

  public function __set($attribute, $value)
  {
    $this->$attribute = $value;
  }

  function validar()
  {

    try {

      $query = "SELECT * FROM `usuario` WHERE email=:email and senha = :senha";
      $stmt = self::conn()->prepare($query);

      $stmt->bindValue(':email',$this->__get('email'));
      $stmt->bindValue(':senha', md5($this->__get('password')));
      
      $stmt->execute();

      $user = $stmt->fetch(\PDO::FETCH_ASSOC);
      return ($user);

     
    } catch (\PDOException $e) {
      echo $e->getMessage();
    }
  }
}
