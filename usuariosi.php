<?php
include_once('./class/usuarioc.php');

if (isset($_GET["agregar"])){
	
	$nuevo = (new Usuario)->agregar($_POST["nick"],$_POST["email"],$_POST["pass"]);
	
}
$html["usuarios"]=(new Usuario)->listar();