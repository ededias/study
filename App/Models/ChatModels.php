<?php

namespace App\Models;

use App\Database\Database;

class ChatModels extends Database
{
	// metodo para salvar as mensagens
	function saveMsg($dataMsg)
	{
		// query para realizar o salvamento daas mensagens 
		$query = "INSERT INTO chat(chat, idEnviar, idReceber, Usuario_idUsuario)
              VALUES (:chat, :idEnviar, :idReceber ,:Usuario_idUsuario)";
		// estabelece a conexao com o banco de dados e passa para o prepare a query
		$stmt = self::conn()->prepare($query);
		// adiciona os valores da mensagem a query
		// fazendo um bind
		$stmt->bindValue(':chat', $dataMsg->getMsgData()[0]);
		$stmt->bindValue(':idEnviar', $dataMsg->getMsgData()[1]);
		$stmt->bindValue(':idReceber', $dataMsg->getIdRecebedor());
		$stmt->bindValue(':Usuario_idUsuario', $dataMsg->getMsgData()[1]);
		// executa a query fazendo a insercao dos dados no banco
		$stmt->execute();
	}
	// atualiza as mensagens para o usuario
	function updateMsg($userId)
	{
		// query para realizar a selecao dos dados do usuario
		$query = "SELECT chat, DATE_FORMAT(dataHora, '%d/%m/%Y %h:%i') 
                AS data FROM chat WHERE 
                (idEnviar = 1 and idReceber = 2) 
                or 
                (idEnviar = 2 and idReceber = 1)";
		// estabelece a conexao com o banco de dados
		$stmt = self::conn()->prepare($query);
		// passa os parametros para query
		$stmt->bindValue(':idUsuario', $userId);
		// executa a query
		$stmt->execute();
		// fetchall(\PDO::FETCH_ASSOC) traz um array assossiativo com as mensagens do usuarios
		// passando para a variavel $dataobj as informacoes necessárias
		$dataObj = $stmt->fetchAll(\PDO::FETCH_ASSOC);
		// realiza um return das mensagens
		return $dataObj;
	}

	// getusuer recebe com parametro dois ids
	// sendo um do usuario e outro
	// o id do perfil do usuario
	function getUsers($id)
	{
		// separa os ids do perfil realizando a verificacao do id do perfil
		// para saber qual parametro irá ser passado para a query
		if ($id['idPerfil'] == '2') {
			$perfil = 'idProfessor';
			$perfilInner = 'idAluno';
		} else {
			$perfil = 'idAluno';
			$perfilInner = 'idProfessor';
		}
		// query que irá realizar o select dos usuarios
		$query = "SELECT u.nome, u.idUsuario FROM usuario AS u 
					INNER JOIN relacaousuario AS r ON 
						(r.$perfilInner = u.idUsuario) 
				  WHERE r.$perfil = :idUsuario";

		// estabelece conexacao com banco de dados
		$stmt = self::conn()->prepare($query);
		// passa os parametros para query
		$stmt->bindValue(':idUsuario', $id['idUsuario']);
		// executa a query
		$stmt->execute();
		// fetchall(\PDO::FETCH_ASSOC) traz um array assossiativo com as mensagens do usuarios
		// passando para a variavel $dataobj as informacoes necessárias
		$dataObj = $stmt->fetchAll(\PDO::FETCH_ASSOC);
		// retorna os dados
		return $dataObj;
	}
}
