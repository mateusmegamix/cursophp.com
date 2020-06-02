<?php
//Relação entre objetos (Associação)

class Pedido {
	public $numero;
	public $cliente;
}

class Cliente {
	public $nome;
	public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Mateus Pereira Militão";
$cliente->endereco = "Rua x, bairro y, Cidade z";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(
	'numero' => $pedido->numero,
	'nome_cliente' => $pedido->cliente->nome,
	'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);