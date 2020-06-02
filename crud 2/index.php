<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(2);
$produto->setNome('Notebook Asus');
$produto->setDescricao('i9, 8Gb');

$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->create($produto);
$produtoDao->read();
//$produtoDao->update($produto);
//$produtoDao->delete(4);


foreach($produtoDao->read() as $produto):
	echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;