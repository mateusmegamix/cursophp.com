<?php

class Veiculo{
	public $modelo;
	public $cor;
	public $ano;

	public function Andar(){
		echo "Andou";

	}

	public function Parar(){
		echo "Parou";
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

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "vermelho";
$carro->ano = 2018;
$carro->Andar($carro);
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);

$moto = new Moto();
$moto->modelo = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
echo "<br>";
$moto->darGrau();
var_dump($moto);
$moto->Parar($moto);