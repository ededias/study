<?php

namespace App\Database;
// class database estabelece conexão com o banco de dados

abstract class Database
{
	// variavel instance para retornar a instancia com o banco de dados
	private static $instance = null;
	
	// metodo conn() estabelece a conexão com o banco de dados
	protected static function conn()
	{
		// $jsonFile pega os dados de configuração com o banco de dados;
		// $jsonStr transforma em texto;
		$dev = '../App/Config/dbConfig.json';
		$prd = "../bludv/Config/dbConfig.json";
		$jsonFile = file_get_contents($dev, true);
		$jsonStr = json_decode($jsonFile, true);
		
		try {
			// inicia a instancia junto da classe PDO
			self::$instance = new \PDO("mysql:host={$jsonStr['dev']['mysql']};dbname={$jsonStr['dev']['dbName']};charset=utf8",$jsonStr['dev']['username'], $jsonStr['dev']['password']);
			return self::$instance;
		} catch (\PDOException $e) {
			
			echo ($e->getMessage());
		}
		
	}
}
