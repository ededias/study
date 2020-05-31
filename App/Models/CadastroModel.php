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
    private $idDescricao;
    private $descricaoAula;
    private $descricaoPerfil;
    private $idPreco;


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

    function setIdDescricao($idDescricao)
    {
        $this->idDescricao = $idDescricao;
    }
    function getIdDescricao()
    {
        return $this->idDescricao;
    }

    function setDescricaoAula($descricaoAula)
    {
        $this->descricaoAula = $descricaoAula;
    }
    function getDescricaoAula()
    {
        return $this->descricaoAula;
    }

    function setDescricaoPerfil($descricaoPerfil)
    {
        $this->descricaoPerfil = $descricaoPerfil;
    }
    function getDescricaoPerfil()
    {
        return $this->descricaoPerfil;
    }

    function setIdMaterias($idMaterias)
    {
        $this->idMaterias = $idMaterias;
    }
    function getIdMaterias()
    {
        return $this->idMaterias;
    }

    function setIdAluno($idAluno)
    {
        $this->idAluno = $idAluno;
    }
    function getIdAluno()
    {
        return $this->idAluno;
    }
    function setIdProfessor($idProfessor)
    {
        $this->idProfessor = $idProfessor;
    }
    function getIdProfessor()
    {
        return $this->idProfessor;
    }

    function setPagamentoStatus($statusPagamento)
    {
        $this->statusPagamento = $statusPagamento;
    }

    function getPagamentoStatus()
    {
        return $this->statusPagamento;
    }
    function setPagamentoId($idPagamento)
    {
        $this->idPagamento = $idPagamento;
    }
    function getPagamentoId()
    {
        return $this->idPagamento;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }
    function getValor()
    {
        return $this->valor;
    }
    function setPagamentoOrdem($pagamentoOrdem)
    {
        $this->pagamentoOrdem = $pagamentoOrdem;
    }
    function getPagamentoOrdem()
    {
        return $this->pagamentoOrdem;
    }
    function setIdPreco($idPreco)
    {
        $this->idPreco = $idPreco;
    }
    function getIdPreco()
    {
        return $this->idPreco;
    }

    function selecionarEmail()
    {
        $query = "SELECT count(email) FROM usuario WHERE email = :email";
        $stmt = self::conn()->prepare($query);
        $stmt->bindValue(':email', $this->getemail());

        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        if ($result >= 0) {
            return false;
        } else {
            return true;
        }
    }

    function salvarCadastro()
    {
        $query = "INSERT INTO usuario (nome, dataNas, sexo, telefone, email, senha, img, cpf, rg) 
                    VALUES (:nome, :dataNas, :sexo, :telefone, :email, :senha, :img, :cpf, :rg);
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
        $stmt->bindValue(":img", $this->getImg());
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
            $result = $this->selecionarEmail();
            if ($result == true) {
                return false;
            } else {
                $stmt->execute();
                return true;
            }
        } catch (\PDOException $e) {

            return "ERROR" . $e->getMessage();
        }
    }

    function atualizarPerfil()
    {
        if (empty($this->getsenha())) {
            $query = "UPDATE usuario SET nome = :nome, telefone = :telefone WHERE idUsuario = :idUsuario";
            $stmt = self::conn()->prepare($query);
            $stmt->bindValue(':nome', $this->getnome());
            $stmt->bindValue(':telefone', $this->gettelefone());
        } else {

            $query = "UPDATE usuario SET nome = :nome, telefone = :telefone, senha = :senha WHERE idUsuario = :idUsuario";

            $stmt = self::conn()->prepare($query);
            $stmt->bindValue(':nome', $this->getnome());
            $stmt->bindValue(':telefone', $this->gettelefone());
        }

        $stmt->bindValue(':idUsuario', $this->getidUsuario());

        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }



    function atualizarCad()
    {
        $result = $this->getIdDescricao();
        echo $result;
        if (!empty($result)) {

            $query = "UPDATE descricao SET descricaoAula = :descricaoAula, descricaoPerfil = :descricaoPerfil 
                        WHERE idDescricao = :idDescricao AND usuario_idUsuario = :idUsuario;
                      UPDATE preco SET valor = :valor, materias_idmaterias = :idMateria WHERE idPreco = :idPreco";
            $stmt = self::conn()->prepare($query);
            $stmt->bindValue(':idDescricao', $this->getidDescricao());
            $stmt->bindValue(':idPreco', $this->getIdPreco());
        } else {

            $query = "INSERT INTO descricao(descricaoAula, descricaoPerfil, usuario_idUsuario) VALUES 
                        (:descricaoAula, :descricaoPerfil, :idUsuario);
                      INSERT INTO preco(usuario_idUsuario, valor, materias_idMaterias) VALUES (:idUsuario, :valor, :idMateria)";
            $stmt = self::conn()->prepare($query);
        }


        $stmt->bindValue(':descricaoAula', $this->getDescricaoAula());
        $stmt->bindValue(':descricaoPerfil', $this->getDescricaoPerfil());

        $stmt->bindValue(':valor', $this->getValor());

        $stmt->bindValue(':idMateria', $this->getIdMaterias());
        $stmt->bindValue(':idUsuario', $this->getIdUsuario());

        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    function listarCasdastro()
    {
        $query = "SELECT * FROM usuario AS u 
                    INNER JOIN perfil AS p ON
                    (u.idUsuario = p.usuario_idUsuario)
                    inner join preco as pc ON
                    (u.idUsuario = pc.usuario_idUsuario)
                    inner join materias as m
                WHERE p.perfil = :perfil AND m.idmaterias = pc.materias_idmaterias;";

        $stmt = self::conn()->prepare($query);
        $stmt->bindValue(':perfil', $this->getPerfil());

        try {
            $stmt->execute();
            $lista = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
        return $lista;
    }

    function perfilUsuario()
    {
        $query = "SELECT u.idUsuario, u.nome, u.dataNas, 
                         u.sexo, u.img, u.email, u.cpf, u.rg, u.sexo, u.telefone
                        , pc.valor, pc.idPreco, m.materia, d.descricaoAula, d.descricaoPerfil, d.idDescricao
                    FROM usuario AS u
                        INNER JOIN descricao as d 
                        INNER JOIN preco as pc
                        INNER JOIN materias as m
                    WHERE idUsuario = :idUsuario AND m.idmaterias = pc.materias_idmaterias AND d.usuario_idUsuario = :idUsuario AND pc.usuario_idUsuario = :idUsuario";

        $stmt = self::conn()->prepare($query);

        $stmt->bindValue(":idUsuario", $this->getidUsuario());

        try {
            $stmt->execute();
            $listando = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $listando;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    function listarPerfil($id)
    {
        if ($id['perfil'] == 'professor') {
            $query = "SELECT u.nome, u.idUsuario, u.img FROM usuario AS u 
                            INNER JOIN relacaousuario AS r 
                        WHERE r.idProfessor = :idUsuario AND u.idUsuario = r.idAluno";
        } else {

            $query = "SELECT u.nome, u.idUsuario, u.img FROM usuario AS u 
                            INNER JOIN relacaousuario AS r
                            INNER JOIN preco AS pc ON
                            (pc.usuario_idUsuario = u.idUsuario)
                        WHERE r.idAluno = :idUsuario AND u.idUsuario = r.idProfessor";
        }
        // query que irá realizar o select dos usuarios

        // SELECT u.nome, u.idUsuario, u.img, m.materia FROM usuario AS u INNER JOIN relacaousuario AS r ON (r.idAluno = u.idUsuario) 
        // INNER JOIN preco AS pc INNER JOIN materias AS m WHERE r.idAluno = 1 AND pc.materias_idmaterias = m.idmaterias
        // estabelece conexacao com banco de dados
        $stmt = self::conn()->prepare($query);

        // passa os parametros para query
        $stmt->bindValue(':idUsuario', $id['idUsuario']);
        // executa a query
        try {
            $stmt->execute();
            // fetchall(\PDO::FETCH_ASSOC) traz um array assossiativo com as mensagens do usuarios
            // passando para a variavel $dataobj as informacoes necessárias
            $dataObj = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            // retorna os dados
            return $dataObj;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }


    function listarUsuario()
    {

        if ($_SESSION['perfil'] == 'aluno') {
            $query = "SELECT u.idUsuario, u.nome, u.dataNas, u.email, u.cpf, u.rg, u.telefone,
                        u.sexo, u.img, d.descricaoPerfil, d.idDescricao
                    FROM usuario AS u
                    INNER JOIN descricao AS d ON
                    (d.usuario_idusuario = :idUsuario)
                        WHERE u.idUsuario = :idUsuario";
                    
        } else {

            $query = "SELECT u.idUsuario, u.nome, u.dataNas, u.email, u.cpf, u.rg, u.telefone,
                        u.sexo, u.img
                    FROM usuario AS u
                        WHERE idUsuario = :idUsuario";
        }

        $stmt = self::conn()->prepare($query);

        $stmt->bindValue(":idUsuario", $this->getidUsuario());
        try {
            $stmt->execute();
            $listando = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $listando;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    function listar1()
    {
        $query = "SELECT u.idUsuario, u.nome, u.dataNas, u.email, u.cpf, u.rg, u.telefone,
                       u.sexo, u.img, d.descricaoAula, d.descricaoPerfil, pc.valor, m.materia, d.idDescricao
                    FROM usuario AS u
                    INNER JOIN descricao AS d ON
                    (d.usuario_idusuario = :idUsuario)
                    INNER JOIN preco AS pc ON
                    (pc.usuario_idUsuario = :idUsuario)
                    INNER JOIN materias AS m ON
                    (m.idmaterias = pc.materias_idmaterias)
                   WHERE idUsuario = :idUsuario";

        $stmt = self::conn()->prepare($query);

        $stmt->bindValue(":idUsuario", $this->getidUsuario());
        try {
            $stmt->execute();
            $listando = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $listando;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }




    function salvarPagamento()
    {

        $query = "INSERT INTO compra(valor, idPagamento, statusPagamento, ordemPagamento, Usuario_idUsuario, pagador, recebedor) 
                    VALUES(:valor, :idPagamento, :statusPagamento, :ordemPagamento, :pagador, :pagador, :recebedor);
                  INSERT INTO relacaousuario(idAluno, idProfessor, Usuario_idUsuario) VALUES (:pagador, :recebedor, :pagador)";

        $stmt = self::conn()->prepare($query);


        $stmt->bindValue(':valor', $this->getValor());
        $stmt->bindValue(':idPagamento', $this->getPagamentoId());
        $stmt->bindValue(':statusPagamento', $this->getPagamentoStatus());
        $stmt->bindValue(':ordemPagamento', $this->getPagamentoOrdem());

        $stmt->bindValue(':pagador', $this->getIdAluno());
        $stmt->bindValue(':recebedor', $this->getIdProfessor());

        try {
            $stmt->execute();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}
