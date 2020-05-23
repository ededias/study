<?php

namespace MF;

// Classe que inicia o projeto a partir das rotas
abstract class Bootstrap
{
	// variavel das rotas
	private $routes;

	// metodo de inicio das rotas
	abstract protected function initRoutes();
	// metodo construtor para construir a classe routes na aplicacao e iniciar
	public function __construct()
	{
		$this->initRoutes();
		$this->run($this->getUrl());
	}
	// pega a rota e retorna
	public function getRoutes()
	{
		return $this->routes;
	}
	// seta a rota com o valor
	public function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}
	// metodo de que serve para iniciar o processo 	da aplicacao
	protected function run($url)
	{	
		// faz um foreach percorrendo a variavel routes 
		// pega a rota a partir do do arquivo App\\Controller utilizando os nameespaces dele para criar a classe de forma automatica
		
		foreach ($this->getRoutes() as $key => $route) {
			// print_r($route);
			// print_r($url);
			if ($url == strtolower($route['route'])) {

				$class = "App\\Controllers\\" . ucfirst($route['controller']);
				//controller define a rota ou caminho que a url vai seguir
				$controller = new $class;
				// action dispara a funcao que irá chamar dentro do arquivo rota
				$action = $route['action'];

				// dispira o metodo dentro do controller
				$controller->$action();
			}
		}
	}
	// pega a url vinda passada como parametro
	function getUrl()
	{
		
		return parse_url(strtolower($_SERVER['REQUEST_URI']), PHP_URL_PATH);
	}
}
