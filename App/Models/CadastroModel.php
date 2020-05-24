<?php

namespace App\Models;

use App\Database\Database;
//use App\Src\Users;
// use \PDOException;
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
    private $img;
    private $perfil;

    function setPerfil($perfil)
    {
        $this->perfil = $perfil;
    }
    function getPerfil()
    {
        return $this->perfil;
    }
    function setImg($img)
    {
        $this->img = $img;
    }
    function getImg()
    {
        return $this->img;
    }

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


    function salvarEnderecoEPerfil()
    {
        $query = "";
        $stmt = self::conn()->prepare($query);
        // $stmt->bindValue(:idUsuario,);
        print_r($this->salvarCadastro());
        // $stmt->execute();

        // 
    }

    function salvarCadastro()
    {
        $query = "INSERT INTO usuario (nome, dataNas, sexo, telefone, email, senha, cpf, rg) 
                    VALUES (:nome, :dataNas, :sexo, :telefone, :email, :senha, :cpf, :rg);
                INSERT INTO endereco (rua, numero, cep, cidade, estado, bairro, complemento, usuario_idUsuario) 
                    VALUES (:rua, :numero, :cep, :cidade, :estado, :bairro, :complemento, LAST_INSERT_ID());
                INSERT INTO perfil(perfil, usuario_idUsuario) VALUES (:perfil, LAST_INSERT_ID());";

        $stmt = self::conn()->prepare($query);
        //  usuario
        $stmt->bindValue(":nome", $this->getnome());
        $stmt->bindValue(":dataNas", $this->getdataNas());
        $stmt->bindValue(":sexo", $this->getsexo());
        $stmt->bindValue(":telefone", $this->gettelefone());
        $stmt->bindValue(":email", $this->getemail());
        $stmt->bindValue(":senha", md5($this->getsenha()));
        $stmt->bindValue(":cpf", $this->getcpf());
        $stmt->bindValue(":rg", $this->getrg());
        // endereco
        $stmt->bindValue(":rua", $this->getendereco());
        $stmt->bindValue(":numero", $this->getnumEnd());
        $stmt->bindValue(":cep", $this->getCEP());
        $stmt->bindValue(":cidade", $this->getcidade());
        $stmt->bindValue(":estado", $this->getestado());
        $stmt->bindValue(":bairro", $this->getbairro());
        $stmt->bindValue(":complemento", $this->getcomplemento());
        // perfil
        $stmt->bindValue(":perfil", $this->getPerfil());

        try {
           
            $stmt->execute();
        } catch (\PDOException $e) {

            return "ERROR" . $e->getMessage();
        }
    }


    function listarCasdastro()
    {
        $query = "SELECT * FROM usuario AS u 
                    INNER JOIN perfil AS p ON 
                        (u.idUsuario = p.usuario_idUsuario)
                    inner join preco as pc
                    inner join materias as m
                WHERE p.perfil = :perfil AND m.idmaterias = pc.materias_idmaterias;";

        $stmt = self::conn()->prepare($query);
        $stmt->bindValue(':perfil', $this->getPerfil());
        $stmt->execute();
        $lista = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $lista;
    }

    function listar1()
    {
        $query = "SELECT idUsuario, nome, sexo, dataNas, endereco, CEP, 
                    numEndereco, complemento, bairro, cidade, 
                    estado, telefonel, email, senha, cpf, rg,
                    perfil, idPerfil, descricao FROM 
                    usuario 
                  WHERE idUsuario = :idUsuario";

        $stmt = self::conn()->prepare($query);

        $stmt->bindValue(":idUsuario", $this->getidUsuario());
        $stmt->execute();
        $listando = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $listando;
    }
}
