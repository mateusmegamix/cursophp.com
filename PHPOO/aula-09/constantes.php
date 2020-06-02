<?php
class Pessoa {
	const nome = "Mateus";

	public function exibirNome(){
		echo self::nome;
	}
}

class Mateus extends Pessoa {
	const nome = "Pereira";

	public function exibirNome(){
		echo parent::nome; // com parent exibi Mateus.
	}
}

$mateus = new Mateus();
$mateus->exibirNome();