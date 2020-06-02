<?php

class Login{

	public static $user;

	public static function verificaLogin(){
		echo "O usuário está logado!".self::user." está logado!"; //$this não funciona em metodos estáticos
	}

	public function sairSistema(){
		echo "O usuário deslogou";
	}
}
//Login::$user() = "admin";
//Login::verificaLogin();

$login = new Login();
$login->sairSistema();
