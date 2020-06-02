<?php

class Pessoa {
	public $nome;
	public $idade;

	public function Falar(){
		echo $this->nome." de ".$this->idade." acabou de falar";
	}
}

$mateus = new Pessoa();
$mateus->nome = "Mateus Pereira Militão";
$mateus->idade = 23;
$mateus->Falar();