<?php

namespace App\Models;

use App\Database\Database;
//use App\Src\Users;

class CadastroModel extends Database

{

    private $nome;
    private $dataNas;
    private $CEP;
    private $endereco;
    private $numEnd;
    private $complemento;
    private $bairro;
    private $cidade;
    private $estado;
    private $telefone;
    private $email;
    private $senha;
    private $cpf;
    private $rg;
    private $sexo;
    private $idUsuario;

    //COMENTARIO
    function getnome()
    {
        return $this->nome;
    }
    function getdataNas()
    {
        return $this->dataNas;
    }
    function getsexo()
    {
        return $this->sexo;
    }
    function getCEP()
    {
        return $this->CEP;
    }
    function getendereco()
    {
        return $this->endereco;
    }
    function getnumEnd()
    {
        return $this->numEnd;
    }
    function getcomplemento()
    {
        return $this->complemento;
    }
    function getbairro()
    {
        return $this->bairro;
    }
    function getcidade()
    {
        return $this->cidade;
    }
    function getestado()
    {
        return $this->estado;
    }
    function gettelefone()
    {
        return $this->telefone;
    }
    function getemail()
    {
        return $this->email;
    }
    function getsenha()
    {
        return $this->senha;
    }
    function getcpf()
    {
        return $this->cpf;
    }
    function getrg()
    {
        return $this->rg;
    }

    function getidUsuario()
    {
        return $this->idUsuario;
    }
    //COMENTARIO
    function setnome($nome)
    {
        $this->nome = $nome;
    }
    function setdataNas($dataNas)
    {
        $this->dataNas = $dataNas;
    }
    function setsexo($sexo)
    {
        $this->sexo = $sexo;
    }
    function setCEP($CEP)
    {
        $this->CEP = $CEP;
    }
    function setendereco($endereco)
    {
        $this->endereco = $endereco;
    }
    function setnumEnd($numEnd)
    {
        $this->numEnd = $numEnd;
    }
    function setcomplemento($complemento)
    {
        $this->complemento = $complemento;
    }
    function setbairro($bairro)
    {
        $this->bairro = $bairro;
    }
    function setcidade($cidade)
    {
        $this->cidade = $cidade;
    }
    function setestado($estado)
    {
        $this->estado = $estado;
    }
    function settelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    function setemail($email)
    {
        $this->email = $email;
    }
    function setsenha($senha)
    {
        $this->senha = $senha;
    }
    function setcpf($cpf)
    {
        $this->cpf = ($cpf);
    }
    function setrg($rg)
    {
        $this->rg = $rg;
    }
    function setidUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    


    function salvarCadastro()
    {

        $query = "insert into produto(nome, dataNas, bairro, endereco, CEP, numEnd, complemento,bairro, cidade, estado, telefone, email, senha, cpf, rg) values(:nome, :dataNas, :sexo, :CEP, :endereco, :numEnd, :complemento,:bairro, :ciade, :estado, :telefone, :email, :senha, :cpf, :rg)";

        $stmt = self::conn()->prepare($query);

        $stmt->bindValue(":nome", $this->getnome());
        $stmt->bindValue(":dataNas", $this->getdataNas());
        $stmt->bindValue(":sexo", $this->getsexo());
        $stmt->bindValue(":CEP", $this->getCEP());
        $stmt->bindValue(":endereco", $this->getendereco());
        $stmt->bindValue(":numEnd", $this->getnumEnd());
        $stmt->bindValue(":complemento", $this->getcomplemento());
        $stmt->bindValue(":bairro", $this->getbairro());
        $stmt->bindValue(":cidade", $this->getcidade());
        $stmt->bindValue(":estado", $this->getestado());
        $stmt->bindValue(":telefone", $this->gettelefone());
        $stmt->bindValue(":email", $this->getemail());
        $stmt->bindValue(":senha", $this->getsenha());
        $stmt->bindValue(":cpf", $this->getcpf());
        $stmt->bindValue(":rg", $this->getrg());
        

        $stmt->execute();
    }


    function listarCasdastro()
    {
        $query = "SELECT idUsuario, nome, sexo, dataNas, endereco, CEP, numEndereco, complemento, bairro, cidade, estado,  telefonel, email, senha, cpf, rg, perfil, idPerfil, descricao FROM usuario";

        $stmt = self::conn()->prepare($query);


        $stmt->execute();
        $cadastrando = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $cadastrando;

    }

    function listar1()
    {
        $query = "SELECT idUsuario, nome, sexo, dataNas, endereco, CEP, numEndereco, complemento, bairro, cidade, estado, telefonel, email, senha, cpf, rg, perfil, idPerfil, descricao FROM usuario WHERE idUsuario=:idUsuario" ;

        $stmt = self::conn()->prepare($query);

        $stmt->bindValue(":idUsuario", $this->getidUsuario());
        $stmt->execute();
        $listando = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $listando;


    }
}
?>