<?php

class Veiculo{
	protected $modelo; // com private ele cria mais um atributo.
	public $cor;
	public $ano;

	public function Andar(){
		echo "Andou";

	}

	public function Parar(){
		echo "Parou";
	}


	public function setModelo($m){
		$this->modelo = $m;
	}

	public function getModelo(){
		return $this->modelo;
	}
}

class Carro extends Veiculo{
	public function ligarLimpador(){
		echo "Limpando em 3,2,1...";
	}
}

class Moto extends Veiculo{
	public function darGrau(){
		echo "Dando grau em 3,2,1...";
	}
}

$carro = new Veiculo();
$carro->setModelo("HILUX");
echo $carro->getModelo();
var_dump($carro);