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

		if ($_SESSION['perfil'] == 'aluno') {
			$infPessoais->setPerfil('professor');
			$result = $infPessoais->listarCasdastro();

			$this->view->main = $result;
			$this->render('cursos', 'main');
		} else {

			$this->view->main = json_encode($infPessoais);
			$infPessoais->setPerfil('aluno');
			$this->render('main', 'main');
		}
	}

	public function cursos()
	{
		$this->render('cursos', 'main');
	}

	public function perfil()
	{
		(new AuthController())->validate();
		$infPessoais = (new CadastroModel());
		if ($_SESSION['perfil'] == 'aluno') {

			$infPessoais->setidUsuario($_SESSION['idUsuario']);
			$lista = $infPessoais->listar1($infPessoais);
			$this->view->perfil = $lista;
			$this->render('perfil', 'main');
		} else {
			
			$infPessoais->setidUsuario($_SESSION['idUsuario']);
			$this->view->perfil = $lista;
			$this->render('perfil', 'main');
		}
	}

	function pagamento()
	{
		
		(new AuthController())->validate();
		$professor = new CadastroModel;
		$professor->setidUsuario($_GET['professor']);
		$result = $professor->listar1($professor);
		
		$this->view->pagamento = $result;
		$this->render('pagamento', 'main');
	}

	function mercadoPago()
	{
		(new AuthController())->validate();
		SDK::setAccessToken("TEST-6434990738409266-042216-48fcbcf4f026f3daae6eaebda11128e4-327719278");
		// Cria um objeto de preferência
		$preference = new Preference();
		
		// Cria um item na preferência
		$item = new Item();
		$item->title = $_POST['aula'];
		$item->quantity = 1;
		$item->unit_price = $_POST['pacote'];
		$preference->items = array($item);
		$preference->save();
		$this->view->comprar = ["usuario" => $_SESSION['idUsuario'], 'professor' => $_POST['professor'], "api"=>$preference->id];
		$this->render('comprar', 'main');
	}

	function confirmarPagamento() {
		(new AuthController())->validate();
		
		if($_POST['payment_status'] == 'approved'){
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
