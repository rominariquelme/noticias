<?php
	session_start();
	ini_set('display_errors', true);
	error_reporting(E_ALL);
	
	require_once './vendor/autoload.php';
	Twig_Autoloader::register();
	
	$loader = new Twig_Loader_Filesystem('./templates');
	$twig = new Twig_Environment($loader, array(
	    //'cache' => './cache',
	    'cache' => false,
	));


	$html[] = null;
	switch(isset($_GET["seccion"]) ? $_GET["seccion"] : ''){
		case 'login':
			include ('./login.php');
			echo $twig->render('login.html',$html);
			break;
		case 'noticias':
			include('./noticias.php');
			echo $twig->render('noticias.html', $html);			
			break;
		case 'enviar':
			echo $twig->render('enviar.html', $html);			
			break;
		case 'usuarios':
			include('./usuariosi.php');
			echo $twig->render('usuarios.html',$html);
			break;
		default:
			echo $twig->render('home.html', $html);
	}
?>