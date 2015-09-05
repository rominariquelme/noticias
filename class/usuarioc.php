<?php
include_once('./class/conectar.php');

class Usuario extends Conectar{
	protected $nick,$email, $pass;

	public function __construct(){
			$pdo = new Conectar();
			$this->db = $pdo->db;
	}

	public function agregar($nick, $email,$pass){
		$query = $this->db->prepare("INSERT INTO usuarios (nick,email,pass) VALUES (:nick, :email, :pass)");
		$query->execute(array( ':nick'=>$nick,':email'=>$email, ':pass'=>$pass ));
		$this->id = $this->db->lastInsertId();
		$this->nick = $nick;
		$this->email = $email;
		$this->pass = $pass;
		return $this;
	}

	public function listar(){
		$usuarios=null;
		$query = $this->db->prepare("SELECT * FROM usuarios");
		$query->execute(array());
		$usuarios = $query->fetchAll();
		return $usuarios;
	}

	public function eliminar(){
		$this->db->exec("DELETE FROM usuarios WHERE id='$this->id'");
	}

	public function buscarPorID($id){
		
	}
	public function validar($nick, $pass){
		$query = $this->db->prepare("select nick, pass from usuarios where nick='$nick' and pass = '$pass'");
		$query->execute(array());
		if ($query > 0){
			return true;
		} else
			return false;
	}
}