<?php

class Veiculo{
	public $modelo; // com private ele cria mais um atributo.
	public $cor;
	public $ano;

	private function Andar(){
		echo "Andou";

	}

	public function Parar(){
		echo "Parou";
	}

	public function mostraAcao(){
		$this->Andar();
	}
}

class Carro extends Veiculo{
	public function ligarLimpador(){
		echo "Limpando em 3,2,1...";
	}
}

$carro = new Veiculo();
$carro->mostraAcao();