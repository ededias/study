<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use MF\Action;
use App\Src\Usuarios;
use App\Models\CadastroModel;

class IndexController extends Action
{
	
	public function index()
	{
		if (isset($_SESSION)) {
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
		
		print_r($_FILES);
		if(!isset($_FILES['imagem']['size'])) {
			$this->view->registrar = [
				'imagem' => ''
			];
		}
		if(!isset($this->view->registrar)) {

			$this->view->registrar = [
				'email' => '',
				'nome' => '',
				'senha' => '',
				'rpsenha' => '',
				'telefone' => '',
				'CPF' => '',
				'rg' => '',
				'sexo' => '',
				'dataNas' => '',
				'cep' => '',
				'endereco' => '',
				'numEnd' => '',
				'complemento' => '',
				'bairro' => '',
				'cidade' => '',
				'estado' => ''

			];
		}
		$this->render('registrar', 'index');
	
	}
}
