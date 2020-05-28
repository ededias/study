<?php

namespace App\Controllers;

use MF\Action;
use App\Controllers\AuthController;

class EmailController extends Action {
    function enviaremail(){
        

        if(isset($_POST['email']) && !empty($_POST['email'])){
    
        $nome = addcslashes($_POST['name'],"utf8");
        $email = addcslashes($_POST['email'], "utf8");
        $assunto = addcslashes($_POST['message'], "utf8");
        $mensagem = addcslashes($_POST['subject'], "utf8");
        
        $to = "contato@edenilson.com";
        $subject = "Contato - Study";
        $body = "Nome: ".$nome. "\r\n".
                "Email: ".$email. "\r\n".
                "Mensagem: ".$mensagem. "\r\n".
                "Assunto: ".$assunto. "\r\n".
        
        $header = "From: contato@edenilson.com". "\r\n".
                "Reply-To:".$email. "\r\n".
                "X=Mailer:PHP/".phpversion();
    
        if(mail($to,$subject,$body,$header)){
    
            echo("Email enviado com sucesso!");
    
        }else {
            echo("O email não pode ser enviado!");
        }
            
    
        }
        
        
    }

   

}

