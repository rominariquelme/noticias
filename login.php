<?php
include_once('./class/usuarioc.php');
if (isset($_GET["login"])){
	$nick = $_POST["nick"];
	$pass = $_POST["pass"];
	$validar = (new Usuario)->validar($nick, $pass);
	if ($validar > 0){
		echo "Usuario valido";
	} else
		echo "Usuario invalido";
}

?>