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
		$this->render('pagamento', 'main');
	}
	
	function mercadoPago()
	{

		SDK::setAccessToken("TEST-6434990738409266-042216-48fcbcf4f026f3daae6eaebda11128e4-327719278");
		// Cria um objeto de preferência
		$preference = new Preference();

		// Cria um item na preferência
		$item = new Item();
		$item->title = '';
		$item->quantity = 1;
		$item->unit_price = 1;
		$preference->items = array($item);
		$preference->save();
	}
}
