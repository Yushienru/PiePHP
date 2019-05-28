<?php 
namespace Core;

use \Core\Request;
use \Core\Core;



class Controller
{
	protected static $_render;
	public function __construct(){
		// Si l'utilisateur est connecté
		if(isset($_SESSION['log']) && $_SESSION['log']) {
			define('UTILISATEUR_EST_CONNECTE', true);
		} 
		// Si l'utilisateur est déconnecté
		else {
			define('UTILISATEUR_EST_CONNECTE', false);
		}
		// define('UTILISATEUR_EST_CONNECTE', isset($_SESSION['log']) && $_SESSION['log']);
	}

	protected function render($view, $scope = [])
	{
		extract($scope);
		$f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
		str_replace('Controller\\', '', basename(get_class($this))), $view]) . '.php';
		$f = str_replace('Controller', '', $f);

		if (file_exists($f)) {
			ob_start();
			include($f);
			$view = ob_get_clean();
			if (!isset($_SESSION['log']) || $_SESSION['log'] === false) {
				$button = "<a href='/PiePHP/index.php/user/login' class='btn btn-menu-noir btn-lg login pull-left'>
				<span class='lyphicon-log-in'></span> Se Connecter</a>
				<a href='/PiePHP/index.php/user/register' class='btn btn-menu-jaune btn-lg login pull-left'>
				<span class='lyphicon-log-in'></span> S'inscrire</a>";
			} else {
				$button = "<a href='/PiePHP/index.php/user/logout' class='btn btn-menu-noir btn-lg logout pull-left'>
						<span class='glyphicon glyphicon-log-out'></span> Déconnexion</a>";

			}
			
			ob_start();
			include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
			'index']) . '.php');
			 self::$_render = ob_get_clean();
		}
	}

	public function __destruct()
	{
		echo self::$_render;
	}
}