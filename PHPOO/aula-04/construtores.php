<?php

//construtores
class Login{
	private $email;
	private $senha;
	private $nome;

	public function __construct($email, $senha, $nome){
		$this->nome = $nome;
		$this->setEmail($email);
		$this->setSenha($senha);
	}

	public function getNome(){
		return $this->nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($e){
		$email = filter_var($e, FILTER_SANITIZE_EMAIL);
		$this->email = $email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($s){
		$this->senha = $s;
	}

	public function Logar(){
		if($this->email == "teste@teste.com" and $this->senha == "123456"):
				echo "Lagado com sucesso!";
			else:
				echo "Dados inválidos";
			endif;
	}
}

$logar = new Login("teste@teste.com", "123456", "Mateus Pereira Militão");
$logar->Logar();
echo "<br>";
echo $logar->getNome();