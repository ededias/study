<?php

namespace App\Controllers;

use App\Models\CadastroModel;
use App\Models\UsuarioModel;
use App\Src\Users;
use MF\Action;
// classe de autenticacao que extende a usuariomodel
class AuthController extends UsuarioModel
{

	function caminhoImagem($imgSrc)
	{

		$dir = "img/courses/";
		$imgExtencao = (pathinfo($imgSrc['imagem']['name'], PATHINFO_EXTENSION));

		$temp = ($imgSrc['imagem']['tmp_name']);
		$novoNome = uniqid() . ".$imgExtencao";
		$dirImg =  $dir . $novoNome;
		move_uploaded_file($temp, $dirImg);

		return $dirImg;
	}
	// funcao para validar o login
	public function loginValidate()
	{

		$this->__set('email', $_POST['email']);
		$this->__set('password', $_POST['password']);

		$result = $this->validar();

		if (empty($result)) {
			header('location: /?erro=0');
		} else {
			session_start();
			$_SESSION = $result;
			header('location: /main');
		}
	}

	// salvar os dados preenchidos do registrase que está no corpo
	function salvar()
	{
		
		if($_FILES['imagem']['size'] == 0) {
			
			header('location: /register?f=f');
		}
		if($_POST['perfil'] == ''){
			
			header('location: /register?p=p');
		}
		if ($_POST['senha'] != $_POST['rpsenha']) {
			
			header('location: /register?s=s');
		} else {
			$cadastrar = new CadastroModel();
			$cadastrar->setPerfil($_POST['perfil']);
			$cadastrar->setnome($_POST['nome']);
			$cadastrar->setdataNas($_POST['dataNas']);
			$cadastrar->setCEP($_POST['cep']);
			$cadastrar->setendereco($_POST['endereco']);
			$cadastrar->setnumEnd($_POST['numEnd']);
			$cadastrar->setcidade($_POST['cidade']);
			$cadastrar->setestado($_POST['estado']);
			$cadastrar->setSexo($_POST['sexo']);
			$cadastrar->setbairro($_POST['bairro']);
			$cadastrar->setcomplemento($_POST['complemento']);
			$cadastrar->settelefone($_POST['telefone']);
			$cadastrar->setemail($_POST['email']);
			$cadastrar->setsenha($_POST['senha']);
			$cadastrar->setcpf($_POST['CPF']);
			$cadastrar->setrg($_POST['rg']);
			$cadastrar->setImg($this->caminhoImagem($_FILES));
			$result = $cadastrar->salvarCadastro($cadastrar);

			if($result == true) {
				$this->__set('password', $_POST['senha']);
				$this->__set('email', $_POST['email']);
				$result = $this->validar();
				session_start();
				$_SESSION = $result;
				header('location: /perfil');
			} else {
				
				header('location: /registrar?err=e');
			}
			
		}
	}

	public function validate()
	{

		session_start();
		$_SESSION;

		if (empty($_SESSION) && isset($_SESSION)) {
			header('location: /?autenticar=erro');
		}
	}

	public function exit()
	{
		session_start();
		session_destroy();
		header('location: /');
	}
}
