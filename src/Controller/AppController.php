<?php
namespace Controller;

use \Core\Controller;

class AppController extends Controller
{
	
	// public function indexAction()
	// {
	// 	header("Location: /PiePHP/src/View/App");
	// }

	public function bonjourAction() {
		$echo = "Bonjour !!!";

		$this->render('page_bonjour', $scope = array('echo' => $echo ));
	}
}