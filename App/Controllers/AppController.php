<?php

namespace App\Controllers;

use MF\Action;
use App\Controllers\AuthController;
use App\Models\CadastroModel;
use MercadoPago\SDK;
use MercadoPago\Item;
use MercadoPago\Preference;
use MercadoPago\Payment;

class AppController extends Action
{

	public function main()
	{

		$infPessoais = new CadastroModel();

		(new AuthController())->validate();
		$userInf = [
			'idUsuario' => $_SESSION['idUsuario'],
			'perfil' => $_SESSION['perfil']
		];
		$result = $infPessoais->listarPerfil($userInf);

		$this->view->main = $result;
		$this->render('main', 'main');
	}

	public function cursos()
	{
		$infPessoais = new CadastroModel();

		(new AuthController())->validate();

		if ($_SESSION['perfil'] == 'aluno') {
			$infPessoais->setPerfil('professor');
			$result = $infPessoais->listarCasdastro();
			$this->view->cursos = $result;
			$this->render('cursos', 'main');
		} else {

			$infPessoais->setPerfil('professor');
			$result = $infPessoais->listarCasdastro();
			$this->view->cursos = $result;
			$infPessoais->setPerfil('aluno');
			$this->render('cursos', 'main');
		}
	}

	public function atualizar()
	{
		(new AuthController())->validate();

		$atualizar = new CadastroModel();
		print_r($_POST);
		$atualizar->setIdDescricao($_POST['idDescricao']);
		$atualizar->setDescricaoAula($_POST['descricaoaula']);
		$atualizar->setDescricaoPerfil($_POST['descricaoperfil']);
		$atualizar->setValor($_POST['valoraula']);
		$atualizar->setIdMaterias($_POST['aula']);
		$atualizar->setidUsuario($_SESSION['idUsuario']);
		$atualizar->setIdPreco($_POST['idPreco']);
		$atualizar->atualizarCad($atualizar);
		echo "hello world";
		// header('location: /perfil');
	}

	public function perfil()
	{
		(new AuthController())->validate();
		$infPessoais = (new CadastroModel());

		$infPessoais->setidUsuario($_SESSION['idUsuario']);
		$lista = $infPessoais->perfilUsuario($infPessoais);

		if (!empty($lista)) {

			$this->view->perfil = $lista;

			$this->render('perfil', 'main');
		} else {
			
			$lista = $infPessoais->listarUsuario();
			$this->view->perfil = $lista;
			$this->render('perfil', 'main');
		}
	}

	function atualizarPerfil()
	{
		(new AuthController())->validate();

		$atualizarPerfil = new CadastroModel();

		if (!empty($_POST['senha'])) {
			$atualizarPerfil->setsenha($_POST['senha']);
		}

		$atualizarPerfil->settelefone($_POST['telefone']);
		$atualizarPerfil->setnome($_POST['nome']);
		$atualizarPerfil->setidUsuario($_SESSION['idUsuario']);
		$atualizarPerfil->atualizarPerfil();
		header('location: /perfil');
	}

	function pagamento()
	{

		(new AuthController())->validate();
		$professor = new CadastroModel;
		$professor->setidUsuario($_GET['professor']);
		if ($_SESSION['perfil'] == 'professor') {

			$result = $professor->listarUsuario();
		} else {

			$result = $professor->listar1($professor);
		}


		$this->view->pagamento = $result;
		$this->render('pagamento', 'main');
	}

	function mercadoPago()
	{
		(new AuthController())->validate();
		$professor = new CadastroModel();
		SDK::setAccessToken("TEST-6434990738409266-042216-48fcbcf4f026f3daae6eaebda11128e4-327719278");
		// Cria um objeto de preferência
		$preference = new Preference();
		$professor->setidUsuario($_POST['professor']);
		$result = $professor->listar1();
		// Cria um item na preferência
		$item = new Item();
		$item->title = $_POST['aula'];
		$item->quantity = 1;
		$item->unit_price = $_POST['pacote'];
		$preference->items = array($item);
		$preference->save();
		$this->view->comprar = ["usuario" => $_SESSION['idUsuario'], 'professor' => $result, "api" => $preference->id];
		$this->render('comprar', 'main');
	}

	function confirmarPagamento()
	{
		(new AuthController())->validate();

		if ($_POST['payment_status'] == 'approved') {
			$pagamento = new CadastroModel();

			$pagamento->setIdprofessor($_POST['professor']);
			$pagamento->setIdAluno($_POST['aluno']);
			$pagamento->setValor($_POST['valor']);
			$pagamento->setPagamentoStatus($_POST['payment_status']);
			$pagamento->setPagamentoOrdem($_POST['merchant_order_id']);
			$pagamento->setPagamentoId($_POST['payment_id']);

			$pagamento->salvarPagamento($pagamento);

			header('location: /main');
		} else {
			header('location: /main?erro=true');
		}
	}
}
