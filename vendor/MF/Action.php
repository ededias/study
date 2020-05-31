<?php

namespace MF;
// classe Action criar renderiza o layout de forma automatica para o usuario, 
class Action
{

	// variavel view
	protected $view;
	// classe construtora que constroi um view a partir de uma classe vazia

	function __construct()
	{

		$this->view = new \stdClass;
	}

	
	// funcao que faz a renderizacao do layout da aplicacao
	public function render($view, $layout = '')
	{
		// chama a view e passa o valor para a mesma

		$this->view->page = $view;

		// verifica que o arquivo php existe ou não de forma automatica e retorna ele para o usuario 
		// caso não exista retorna o proprio conteudo da metodo a baixo
		$dev = "../App/Views/$layout.php";
		$prd = "../bludv/App/Views/$layout.php";
		if (file_exists($dev)) {
			require_once $dev;
		} else {
			$this->content();
		}
	}
	// metodo utiliza a funcao padrao do php para pegar uma classe "get_class()";
	// passando o proprio objeto $this;

	public function content()
	{
		
		$currentClass = get_class($this);

		$currentClass = str_replace("App\\Controllers\\", "", $currentClass);
		$currentClass = strtolower(str_replace("Controller", "", $currentClass));
		require_once "../App/Views/$currentClass/{$this->view->page}.php";
		// require_once "../bludv/App/Views/$currentClass/{$this->view->page}.php";
	}
}
